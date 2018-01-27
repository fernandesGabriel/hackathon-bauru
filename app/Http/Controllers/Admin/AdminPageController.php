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
        $scheme = Scheme::get();
        return view('admin.forms.page', ['page' => $page, 'scheme' => $scheme]);
    }

    public function update(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required|max:255',
            'scheme' => 'required',
            'url' => 'required'
        ]);
        $id = $request->input('id');
        if(!$validator->fails()){
            $menu_id = null;
            $page = Page::find($id);
            $page->scheme_id = $request->input('scheme');
            $page->title = $request->input('title');
            $page->description = $request->input('description');
            $page->content = $request->input('content');
            $page->url = $request->input('url');
            $page->keywords = $request->input('keywords');
            $page->menu_id = $request->input('$menu_id');
            $page->save();
        }
        return redirect('/admin/pagina/' . $id)->withErrors($validator)->withInput();
    }

}
