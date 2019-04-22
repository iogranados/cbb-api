<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'birthday', 'hobby', 'profession', 'about_you', 'photo_small', 'photo_large'
    ];

}
