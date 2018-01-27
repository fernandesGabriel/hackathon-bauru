<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'pages';
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [ 'scheme_id', 'title', 'description', 'url', 'content', 'keywords', 'menu_id' ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function scheme()
    {
        return $this->belongsTo(Scheme::class);
    }
}
