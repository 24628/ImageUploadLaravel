<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'name','email','firstname','lastname','age','birthdate','bio'
    ];

    public function user()

    {
        return $this->belongsTo('App\User');

    }


}
