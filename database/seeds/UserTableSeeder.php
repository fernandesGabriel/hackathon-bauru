<?php

use Illuminate\Database\Seeder;
use Hackathon\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new User();
        $page->name = "Administrador";
        $page->username = "administrador";
        $page->email = "admin@admin.com";
        $page->password = Hash::make('admin');
        $page->save();
    }
}
