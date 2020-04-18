<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "question";
    
    //relationship
    public function user()
    {
        return $this->belongsToMany('App\User', 'user_question', 'question_id', 'user_id');
    }
    public function answer()
    {
        return $this->hasMany('App\models\Answer', 'question_id', 'id');
    }
}
