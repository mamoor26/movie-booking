<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $fillable=[
        'theater_name','location','total_seats'

    ];
}
