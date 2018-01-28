<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use SoftDeletes;

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'attachments';
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [ 'title', 'description', 'type', 'filename', 'path', 'extension', 'size' ];
}
