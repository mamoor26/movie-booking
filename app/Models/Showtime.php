<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = [
        'movie_id',
        'theater_id',
        'showdate',
        'showtime',
        'categories',
        'ticket_price',
        'gold_price',
        'platinum_price',
        'box_price'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class, 'theater_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}