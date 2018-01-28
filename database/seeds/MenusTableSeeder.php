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
        $count = 1;
        $totalItems = count($pages);
        foreach ($pages as $page) {
        	$menu = new Menu;
        	$menu->title = $page->page_title;
        	$menu->path = $page->url;
            $menu->data = json_encode(['class' => 'nav-link py-2']);
            if ($totalItems == $count) {
                $menu->data = json_encode(['class' => 'btn btn-primary']);
            }
        	$menu->save();
            $count++;
        }
    }
}
