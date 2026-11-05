@extends("user.navbar")

@section("user")

<div class="container mt-5 mb-5">

    <h2 class="mb-4">Movie Details</h2>

    <div class="row">

        <!-- Movie Poster -->
        <div class="col-md-4 mb-4">

            @if($movie->Poster)
                <img
                    src="{{ asset('storage/poster_folder/' . $movie->Poster) }}"
                    class="img-fluid rounded shadow"
                    alt="{{ $movie->Movie_name }}"
                    style="width:100%; max-height:500px; object-fit:cover;"
                >
            @else
                <p>Poster Not Available</p>
            @endif

        </div>

        <!-- Movie Information -->
        <div class="col-md-8">

            <h1>{{ $movie->Movie_name }}</h1>

            <hr>

            <h5>Genre:</h5>
            <p>{{ $movie->Genre }}</p>

            <h5>Release Date:</h5>
            <p>{{ $movie->Release_date }}</p>

            <hr>

            <!-- Movie Trailer -->
            <h4>Movie Trailer</h4>

            @if($movie->Trailer)

                <video width="100%" height="300" controls>
                    <source
                        src="{{ asset('storage/trailer_folder/' . $movie->Trailer) }}"
                        type="video/mp4"
                    >
                    Your browser does not support video.
                </video>

            @else

                <p>Trailer Not Available</p>

            @endif

            <hr>

            <!-- Booking Button -->
            <a href="{{ route('user.ticket', $movie->id) }}"
               class="btn btn-warning btn-lg">
                Book Now
            </a>

            <hr>

            <!-- ==================== REVIEWS & RATINGS SECTION ==================== -->

            <h4>Reviews & Ratings</h4>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @php
                // Get all reviews for this movie with user info
                $reviews = $movie->reviews()->with('user')->latest()->get();

                // Calculate average rating
                $avgRating = $reviews->count() > 0
                    ? round($reviews->avg('rating'), 1)
                    : 0;
            @endphp

            <!-- Average Rating Display -->
            <div class="mb-3">
                <strong>Average Rating: </strong>

                @if($reviews->count() > 0)
                    <span style="color: #ffc107; font-size: 20px;">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= round($avgRating))
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                    </span>
                    <span>{{ $avgRating }} / 5</span>
                    <small class="text-muted">
                        ({{ $reviews->count() }} reviews)
                    </small>
                @else
                    <span class="text-muted">No reviews yet</span>
                @endif
            </div>

            <!-- List of Existing Reviews -->
            @if($reviews->count() > 0)

                <div class="mb-4">

                    @foreach($reviews as $review)

                        <div class="card mb-2">

                            <div class="card-body">

                                <h6 class="card-title mb-1">
                                    {{ $review->user->name ?? 'Anonymous' }}

                                    <span style="color: #ffc107;">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review->rating)
                                                ★
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </span>
                                </h6>

                                <p class="card-text mb-1">{{ $review->comment }}</p>

                                <small class="text-muted">
                                    {{ $review->created_at->format('d M, Y') }}
                                </small>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <p class="text-muted">
                    Be the first to review this movie!
                </p>

            @endif

            <!-- Review Form (only for logged in users) -->
            @if(Auth::check())

                <form action="{{ route('review.store') }}" method="POST">

                    @csrf

                    <input
                        type="hidden"
                        name="movie_id"
                        value="{{ $movie->id }}"
                    >

                    <div class="mb-3">
                        <label class="form-label">
                            <strong>Your Rating:</strong>
                        </label>

                        <select name="rating" class="form-select" required>
                            <option value="">Select rating</option>
                            <option value="5">5 - Excellent</option>
                            <option value="4">4 - Good</option>
                            <option value="3">3 - Average</option>
                            <option value="2">2 - Poor</option>
                            <option value="1">1 - Terrible</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            <strong>Your Review:</strong>
                        </label>

                        <textarea
                            name="comment"
                            class="form-control"
                            rows="3"
                            placeholder="Write your review here..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Submit Review
                    </button>

                </form>

            @else

                <div class="alert alert-info">
                    Please
                    <a href="{{ route('loginform') }}">login</a>
                    to write a review.
                </div>

            @endif

            <!-- ==================== END REVIEWS SECTION ==================== -->

        </div>

    </div>

</div>

@endsection