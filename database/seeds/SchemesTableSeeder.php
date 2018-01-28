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
        $default = [  
            "title_1" => [
                "title" => "Title 1",
                "name" => "title_1",
                "type" => "text-line"
            ],
            "content_1" => [
                "title" => "Content 2",
                "name" => "content_1",
                "type" => "rich-text"
            ]
        ];

        $fiveContentsSidebar = [
            "title_1" => [
                "title" => "Title 1",
                "name" => "title_1",
                "type" => "text-line"
            ],
            "content_1" => [
                "title" => "Content 2",
                "name" => "content_1",
                "type" => "rich-text"
            ],
            "title_2" => [
                "title" => "Title 2",
                "name" => "title_2",
                "type" => "text-line"
            ],
            "content_2" => [
                "title" => "Content 2",
                "name" => "content_2",
                "type" => "rich-text"
            ],
            "title_3" => [
                "title" => "Title 3",
                "name" => "title_3",
                "type" => "text-line"
            ],
            "content_3" => [
                "title" => "Content 3",
                "name" => "content_3",
                "type" => "rich-text"
            ],
            "title_4" => [
                "title" => "Title 4",
                "name" => "title_4",
                "type" => "text-line"
            ],
            "content_4" => [
                "title" => "Content 4",
                "name" => "content_4",
                "type" => "rich-text"
            ],
            "title_5" => [
                "title" => "Title 5",
                "name" => "title_5",
                "type" => "text-line"
            ],
            "content_5" => [
                "title" => "Content 5",
                "name" => "content_5",
                "type" => "rich-text"
            ]
        ];

        $schemes = [
        	['Homepage', json_encode($default), 'homepage'],
        	['Single Content', json_encode($default), 'single-content'],
        	['Single Content Call to Action', json_encode($default), 'single-content-call-action'],
        	['Five Content with Sidebar', json_encode($fiveContentsSidebar), 'five-contents-sidebar'],
        	['Donation', json_encode($default), 'donation'],
        	['Contact', json_encode($default), 'contact'],
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
