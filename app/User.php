<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //relationship
    public function comments()
    {
        return $this->hasMany('App\models\Comment', 'user_id', 'id');
    }
    public function test()
    {
        return $this->belongsToMany('App\models\Test', 'lam', 'user_id', 'test_id');
    }
    public function question()
    {
        return $this->belongsToMany('App\model\Question', 'user_question', 'user_id', 'question_id');
    }
}
