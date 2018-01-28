<?php

namespace Hackathon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;
use Validator;
use Hackathon\Models\Attachment;

class AdminSponsorController extends Controller
{

    protected $path = 'images/category';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $attachs = Attachment::join('attach_galleries', 'id_attachment', '=', 'id')
                    ->where('id_gallery', 1)
                    ->get();
        return view('admin.forms.sponsor', ['attachs' => $attachs]);
    }

    public function upload(Request $request)
    {
        if (!empty($request->file('image')) && $request->file('image')->isValid()) {
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($this->path, $fileName);
            $attach = Attachment::create([
                'title' => $request->file('image')->getClientOriginalName(),
                'type' => 'image',
                'filename' => $fileName,
                'path' => $this->path . '/' . $fileName,
                'extension' => $request->file('image')->getClientOriginalExtension(),
                'size' => $request->file('image')->getSize()
            ]);
            $attach->gallery()->sync(1);
        }
        return redirect('admin/configuracoes/patrocinadores');
    }

    public function delete($id)
    {
        $attachs = Attachment::find($id);
        unlink($attachs->path);
        $attachs->gallery()->detach();
        $attachs->delete();
        return redirect('admin/configuracoes/patrocinadores');
    }

}
