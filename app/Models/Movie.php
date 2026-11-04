<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable =[
        'Movie_name','Genre','Poster','Trailer','Release_date'
    ];
}
