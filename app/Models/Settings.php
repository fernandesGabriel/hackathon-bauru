<?php

namespace Hackathon\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $primaryKey = 'key';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';
}
