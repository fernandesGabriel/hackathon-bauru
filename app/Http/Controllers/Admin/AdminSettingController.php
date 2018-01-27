<?php

namespace Hackathon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Hackathon\Http\Controllers\Controller;

class AdminSettingController extends Controller
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
     * Show the application contact settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexContact()
    {
        return view('admin.forms.contact');
    }

    /**
     * Show the application user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        return view('admin.users');
    }

    /**
     * Show the application payment settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPayment()
    {
        return view('admin.forms.payment');
    }

    /**
     * Show the application sponsor settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSponsor()
    {
        return view('admin.forms.sponsor');
    }
}
