<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = "level";
    public function test()
    {
        return $this->hasMany('App\models\Test', 'idlevel', 'id');
    }
}
