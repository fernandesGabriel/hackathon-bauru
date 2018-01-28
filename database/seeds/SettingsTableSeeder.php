<?php

use Illuminate\Database\Seeder;
use Hackathon\Models\Settings;
use Illuminate\Support\Facades\Hash;


class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Settings();
        $page->key = "setting_pagseguro";
        $page->value = "";
        $page->save();

        $page = new Settings();
        $page->key = "setting_payment";
        $page->value = "";
        $page->save();

        $page = new Settings();
        $page->key = "settings_phonenumber";
        $page->value = "";
        $page->save();

        $page = new Settings();
        $page->key = "setting_facebooklink";
        $page->value = "";
        $page->save();

        $page = new Settings();
        $page->key = "setting_contactemail";
        $page->value = "";
        $page->save();
    }
}
