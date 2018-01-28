<?php

namespace Hackathon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;
use Validator;
use Hackathon\Models\Page;
use Hackathon\Models\Scheme;

class AdminPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page = Page::find($id);
        $scheme = $page->scheme->data;
        $allscheme = Scheme::get();
        return view('admin.forms.page', ['page' => $page, 'scheme' => $scheme, 'allscheme' => $allscheme]);
    }

    public function update(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'page_title' => 'required|max:255',
            'scheme' => 'required',
            'url' => 'required'
        ]);
        $id = $request->input('id');
        if(!$validator->fails()){
            $page = Page::find($id);
            $scheme = $page->scheme->data;
            foreach ($scheme as $key => $value) {
                if(!in_array($value->name, ['page_title'])){
                    $datas[$key] = $request->input($key);
                }
            }
            $page->scheme_id = $request->input('scheme');
            $page->page_title = $request->input('page_title');
            $page->description = $request->input('description');
            $page->content = json_encode($datas);
            $page->url = $request->input('url');
            $page->keywords = $request->input('keywords');
            $page->save();
        }
        return redirect('/admin/pagina/' . $id)->withErrors($validator)->withInput();
    }

}
