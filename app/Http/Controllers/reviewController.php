<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // Save a review / rating for a movie
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'rating'   => 'required|integer|min:1|max:5',
            'comment'  => 'required|string|max:500',
        ]);

        // Check if user already reviewed this movie
        $existing = Review::where('user_id', Auth::id())
            ->where('movie_id', $request->movie_id)
            ->first();

        if ($existing) {
            // Update the existing review
            $existing->update([
                'rating'  => $request->rating,
                'comment' => $request->comment,
            ]);
        } else {
            // Create new review
            Review::create([
                'user_id'  => Auth::id(),
                'movie_id' => $request->movie_id,
                'rating'   => $request->rating,
                'comment'  => $request->comment,
            ]);
        }

        return redirect()
            ->route('movie.show', $request->movie_id)
            ->with('success', 'Your review has been submitted!');
    }
}