<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'Movie_name',
        'Genre',
        'Poster',
        'Trailer',
        'Release_date'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // A movie can have many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}