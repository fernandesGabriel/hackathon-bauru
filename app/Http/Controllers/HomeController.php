<?php

namespace Hackathon\Http\Controllers;

use Hackathon\Models\Page;
use Hackathon\Models\Scheme;
use Hackathon\Models\Attachment;
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

        $attachs = null;
        if($default->scheme_id == 1){
            $attachs = Attachment::join('attach_galleries', 'id_attachment', '=', 'id')
                    ->where('id_gallery', 1)
                    ->get();
        }

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
            'content' => $content,
            'attachs' => $attachs
        ]);
    }
}