<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scheme extends Model
{
    use SoftDeletes;

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'schemes';
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [ 'name', 'data', 'view' ];

    public function getDataAttribute($data)
    {
        return $data ? json_decode($data) : $data;
    }
}