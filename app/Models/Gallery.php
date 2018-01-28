<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'gallery';
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [ 'name', 'description', 'page_id' ];
}
