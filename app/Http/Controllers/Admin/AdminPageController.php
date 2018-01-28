<?php

namespace Hackathon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;
use Validator;
use Hackathon\Models\Page;
use Hackathon\Models\Scheme;

class AdminPageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $page = Page::find($id);
        $pageData = $page->content;
        $pageScheme = Scheme::find($page->scheme_id)->data;
        $schemes = Scheme::get();

        foreach ($pageScheme as $key => &$params) {
            $params->value = "";
            if (isset($pageData->$key)) {
                $params->value = $pageData->$key;
            }
        }

        return view('admin.forms.page', [
            'page' => $page,
            'pageScheme' => $pageScheme,
            'schemes' => $schemes
        ]);
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

            if(!empty($page->menu)){
                $menu = $page->menu;
                $menu->path = $page->url;
                $menu->title = $page->page_title;
                $menu->save();
            }
        }

        return back()->withErrors($validator)->withErrors($validator)->withInput();
    }

}
