<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttachGallery extends Model
{
    use SoftDeletes;
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'attach_galleries';
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [ 'id_gallery', 'id_attachment' ];
}
