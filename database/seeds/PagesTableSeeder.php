<?php

use Illuminate\Database\Seeder;
use Hackathon\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
        	['Início', 1, 'inicio'],
        	['Como visitar', 2, 'como-visitar'],
        	['Transparência', 2, 'transparencia'],
        	['Creche para idosos', 2, 'creche-idosos'],
        	['História', 2, 'historia'],
        	['Bazar', 2, 'bazar'],
        	['Contato', 2, 'contato'],
        	['Contribua', 2, 'contribua']
        ];

        foreach ($pages as $key => $row) {
        	$page = new Page;
        	$page->title = $row[0];
        	$page->scheme_id = $row[1];
        	$page->url = $row[2];
        	$page->menu_id = ($key + 1);
        	$page->save();
        }
    }
}
