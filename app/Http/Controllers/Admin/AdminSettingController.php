<?php

namespace Hackathon\Http\Controllers\Admin;

use Hackathon\Models\Settings;
use Hackathon\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Validator;
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
        $settings_phonenumber = Settings::find('settings_phonenumber');
        $setting_facebooklink = Settings::find('setting_facebooklink');
        $setting_contactemail = Settings::find('setting_contactemail');

        return view('admin.forms.contact', [
            'settings_phonenumber' => $settings_phonenumber,
            'setting_facebooklink' => $setting_facebooklink,
            'setting_contactemail' => $setting_contactemail
        ]);
    }

    /**
     * Show the application contact settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveContact (Request $request)
    {
        Settings::updateOrCreate(
            ['key' => 'settings_phonenumber'],
            [
                'key' => 'settings_phonenumber',
                'value' => $request->input('settings_phonenumber')
            ]
        );

        Settings::updateOrCreate(
            ['key' => 'setting_facebooklink'],
            [
                'key' => 'setting_facebooklink',
                'value' => $request->input('setting_facebooklink')
            ]
        );

        Settings::updateOrCreate(
            ['key' => 'setting_contactemail'],
            [
                'key' => 'setting_contactemail',
                'value' => $request->input('setting_contactemail')
            ]
        );

        return redirect()->route('admin/payment/form');
    }

    /**
     * Show the application user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        $users = User::all();

        return view('admin.users',[
            'users' => $users,
        ]);
    }

    /**
     * Show the application user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUser(User $user)
    {
        return view('admin.forms.user', [
           'hasUser' => !is_null($user->id),
           'user' => $user
        ]);
    }

    /**
     * Show the application user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveUser (Request $request)
    {
        if (!empty($request->input('id'))) {

            $validateSchema = [
                'name' => 'required',
                'last_name' => 'max:255',
                'email' => [
                    'required',
                    'max:255',
                    Rule::unique('users')->ignore($request->input('id')),
                ],
                'registration' => 'max:255',
                'username' => [
                    'required',
                    'max:255',
                    Rule::unique('users')->ignore($request->input('id')),
                ],
            ];

            if (!empty($request->input('password'))) {

                $validateSchema['password'] = 'confirmed|min:8';
                $validateSchema['password_confirmation'] = 'required|min:8';

            }

        } else {

            $validateSchema = [
                'name' => 'required',
                'last_name' => 'max:255',
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($request->input('id')),
                ],
                'registration' => 'max:255',
                'username' => [
                    'required',
                    Rule::unique('users')->ignore($request->input('id')),
                ],
                'password' => 'required|min:8'
            ];

        }

        $validator = Validator::make($request->all(), $validateSchema);

        if(!$validator->fails()){

            $data  = [
                'name' => $request->input('name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'registration' => $request->input('registration'),
                'username' => $request->input('username'),
            ];

            if (!empty($request->input('password'))) {

                $data['password'] = Hash::make($request->input('password'));

            }

            $user = User::updateOrCreate(
               $data,
                ['id' => $request->input('id')]
            );

            return redirect()->route('admin/user');
        }

        return back()->withErrors($validator)->withInput();
    }

    /**
     * Show the application user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteUser(Request $request)
    {
        if (!empty($request->input('id'))) {

            $user = User::find($request->input('id'));
            $user->delete();

        }

        return redirect()->route('admin/user');
    }

    /**
     * Show the application payment settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPayment()
    {
        $setting_pagseguro = Settings::find('setting_pagseguro');
        $setting_payment = Settings::find('setting_payment');

        return view('admin.forms.payment',[
            "setting_pagseguro" =>$setting_pagseguro,
            "setting_payment" => $setting_payment
        ]);
    }

    /**
     * Show the application payment settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function savePayment(Request $request)
    {
        Settings::updateOrCreate(
            ['key' => 'setting_pagseguro'],
            [
                'key' => 'setting_pagseguro',
                'value' => $request->input('setting_pagseguro')
            ]
        );

        Settings::updateOrCreate(
            ['key' => 'setting_payment'],
            [
                'key' => 'setting_payment',
                'value' => $request->input('setting_payment')
            ]
        );

        return redirect()->route('admin/payment/form');
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
