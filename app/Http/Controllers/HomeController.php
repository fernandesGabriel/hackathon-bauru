<?php

namespace Hackathon\Http\Controllers;

use Hackathon\Models\Page;
use Hackathon\Models\Scheme;
use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;

class HomeController extends Controller
{
	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
    public function index(Request $request)
    {
    	$view = 'homepage';
        $default = Page::where('scheme_id', '1')->get()->first();
        $content = $default->content;

        if(!empty($request->page)){
    	    if ($request->page->scheme_id != 1) {
                $view = $request->page->scheme->view;
                $content = $request->page->content;
            }
    	}

    	if(is_null($content)) {
            $content = new \stdClass();
            $defaultScheme = Scheme::find(1)->data;
            foreach ($defaultScheme as $key => $value) {
                $content->$key = '';
            }
        }

        return view("templates." . $view, [
            'request' => $request,
            'content' => $content
        ]);
    }
}