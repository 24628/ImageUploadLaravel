<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()

    {

        return $this->hasMany(Post::class);

    }

    public function user()

    {

        return $this->belongsTo(User::class);

    }

    public function profile()

    {

        return $this->hasOne('App\Profile', 'user_id', 'id');

    }

    public function publish(Post $post)

    {

        $this->posts()->save($post);

//        Post::create([
//
//            'body' => request('body'),
//
//            'title' => request('title'),
//
//            'user_id' => auth()->id()
//        ]);

    }
}
