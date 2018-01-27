<?php

use Illuminate\Database\Seeder;
use Hackathon\Menus;
use Hackathon\Pages;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = Pages::orderBy('id')->get();
        foreach ($pages as $page) {
        	$menu = new Menus;
        	$menu->title = $page->title;
        	$menu->path = $page->url;
        	$menu->save();
        }
    }
}
