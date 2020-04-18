<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "test";

    //relationship
    public function user()
    {
        return $this->belongsToMany('App\User', 'lam', 'test_id', 'user_id');
    }
    public function question()
    {
        return $this->hasMany('App\models\Question', 'test_id', 'id');
    }
}