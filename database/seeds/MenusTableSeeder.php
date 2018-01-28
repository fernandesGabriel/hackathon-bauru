<?php

use Illuminate\Database\Seeder;
use Hackathon\Models\Menu;
use Hackathon\Models\Page;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = Page::orderBy('id')->get();
        foreach ($pages as $page) {
        	$menu = new Menu;
        	$menu->title = $page->page_title;
        	$menu->path = $page->url;
        	$menu->save();
        }
    }
}
