<?php

use Illuminate\Database\Seeder;
use Hackathon\Models\Scheme;

class SchemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schemes = [
        	['Homeapge', json_encode(['page_title' => '']), 'homepage'],
        	['Single Content', json_encode(['page_title' => '', 'title_1' => '', 'content_1' => '']), 'single-content'],
        	['Single Content Call to Action', json_encode(['page_title' => '', 'title_1' => '', 'content_1']), 'single-content-call-action'],
        	['Five Content with Sidebar', json_encode(['page_title' => '', 'title_1' => '', 'content_1' => '', 'title_2' => '', 'content_2' => '', 'title_3' => '', 'content_3' => '', 'title_4' => '', 'content_4' => '', 'title_5' => '', 'content_5' => '']), 'five-contents-sidebar'],
        	['Donation', json_encode(['page_title' => '', 'title_1' => '', 'content_1' => '']), 'donation'],
        	['Contact', json_encode(['page_title' => '', 'title_1' => '', 'content_1' => '']), 'contact'],
        ];

        foreach ($schemes as $key => $row) {
        	$page = new Scheme();
        	$page->name = $row[0];
        	$page->data = $row[1];
        	$page->view = $row[2];
        	$page->save();
        }
    }
}
