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
            <button class="btn btn-primary" disabled>
                Book Now (Coming Soon)
            </button>

        </div>

    </div>

</div>

@endsection