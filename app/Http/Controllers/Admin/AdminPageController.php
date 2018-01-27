<?php

namespace Hackathon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;

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
    public function index()
    {
        return view('admin.forms.page');
    }
}
