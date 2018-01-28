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
           "page_title" => [
              "title" => "Page_title",
              "name" => "page_title"
           ],
           "title_1" => [
              "title" => "Title",
              "name" => "title_1"
           ],
           "content_1" => [
              "title" => "Content",
              "name" => "content_1",
              "type" => "textarea"
           ]
        ];
        $five = [  
           "page_title" => [
              "title" => "Page_title",
              "name" => "page_title"
           ],
           "title_1" => [
              "title" => "Title",
              "name" => "title_1"
           ],
           "content_1" => [
              "title" => "Content",
              "name" => "content_1",
              "type" => "textarea"
           ],
           "title_2" => [
              "title" => "Title",
              "name" => "title_2"
           ],
           "content_2" => [
              "title" => "Content",
              "name" => "content_2",
              "type" => "textarea"
           ],
           "title_3" => [
              "title" => "Title",
              "name" => "title_3"
           ],
           "content_3" => [
              "title" => "Content",
              "name" => "content_3",
              "type" => "textarea"
           ],
           "title_4" => [
              "title" => "Title",
              "name" => "title_4"
           ],
           "content_4" => [
              "title" => "Content",
              "name" => "content_4",
              "type" => "textarea"
           ],
           "title_5" => [
              "title" => "Title",
              "name" => "title_5"
           ],
           "content_5" => [
              "title" => "Content",
              "name" => "content_5",
              "type" => "textarea"
           ]
        ];
        $schemes = [
        	['Homeapge', json_encode(['page_title' => '']), 'homepage'],
        	['Single Content', json_encode($default), 'single-content'],
        	['Single Content Call to Action', json_encode($default), 'single-content-call-action'],
        	['Five Content with Sidebar', json_encode($five), 'five-contents-sidebar'],
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
