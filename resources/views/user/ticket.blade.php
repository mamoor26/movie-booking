<!DOCTYPE html>
<html>
<head>
    <title>Book Your Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Book Your Movie Ticket</h2>

    <h4>{{ $movie->Movie_name }}</h4>

    <hr>

    <h4>Available Showtimes</h4>

    @forelse($showtimes as $show)

        <div class="card p-3 mb-3">

        <h5>{{ $show->theater->theater_name ?? 'Theater' }}</h5>

            <p>Date: {{ $show->showdate }}</p>

            <p>Time: {{ $show->showtime }}</p>

            <p>Category: {{ $show->categories }}</p>

            <p>Ticket Price: Rs. {{ $show->ticket_price }}</p>

        </div>

    @empty

        <p>No Showtimes Available For This Movie.</p>

    @endforelse

</div>

</body>
</html>