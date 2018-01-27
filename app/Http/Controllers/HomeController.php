<?php

namespace Hackathon\Http\Controllers;

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
    	$view = 'home';
    	if(!empty($request->page)){
    		$view = $request->page->scheme->view;
    	}
        return view($view);
    }
}