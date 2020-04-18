<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    public function test()
    {
        return $this->hasMany('App\model\Test', 'idCategory', 'id');
    }
}
