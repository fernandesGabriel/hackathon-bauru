<?php

use Illuminate\Database\Seeder;
use Hackathon\Models\Gallery;

class GaleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$gallery = new Gallery();
    	$gallery->name = 'Patrocinadores';
    	$gallery->description = 'Banner patrocinadores';
    	$gallery->page_id = 1;
    	$gallery->save();
    }
}
