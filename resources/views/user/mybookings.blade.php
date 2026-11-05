@extends('user.navbar')

@section('user')

<div class="container mt-5 mb-5">

    <h2 class="mb-4 fw-bold">My Bookings</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($bookings->count() > 0)

        <div class="row">

            @foreach($bookings as $booking)

                <div class="col-md-6 mb-4">

                    <div class="card shadow-sm h-100">

                        <div class="card-body">

                            <h4 class="fw-bold">
                                {{ $booking->movie->Movie_name ?? 'Movie' }}
                            </h4>

                            <hr>

                            <p>
                                <strong>Booking ID:</strong>
                                #{{ $booking->id }}
                            </p>

                            <p>
                                <strong>Show Date:</strong>
                                {{ $booking->showtime->showdate ?? 'N/A' }}
                            </p>

                            <p>
                                <strong>Show Time:</strong>
                                {{ $booking->showtime->showtime ?? 'N/A' }}
                            </p>

                            <p>
                                <strong>Theater:</strong>
                                {{ $booking->showtime->theater->theater_name ?? 'N/A' }}
                            </p>

                            <p>
                                <strong>Class:</strong>
                                <span class="badge bg-info text-dark">
                                    {{ $booking->class ?? 'N/A' }}
                                </span>
                            </p>

                            <p>
                                <strong>Seats:</strong>

                                @php
                                    $seats = is_array($booking->seats)
                                        ? $booking->seats
                                        : json_decode($booking->seats ?? '[]', true);
                                @endphp

                                {{ implode(', ', $seats ?? []) }}
                            </p>

                            <p>
                                <strong>Total Tickets:</strong>
                                {{ $booking->total_tickets }}
                                @if(($booking->kids_tickets ?? 0) > 0)
                                    <small class="text-muted">
                                        (incl. {{ $booking->kids_tickets }} kids)
                                    </small>
                                @endif
                            </p>

                            <p>
                                <strong>Total Price:</strong>
                                Rs. {{ number_format($booking->total_price, 2) }}
                            </p>

                            <p>
                                <strong>Status:</strong>

                                <span class="badge bg-success">
                                    {{ $booking->status }}
                                </span>
                            </p>

                            <a href="{{ route('booking.confirmation', $booking->id) }}"
                               class="btn btn-primary mt-2">

                                View Ticket

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="alert alert-info text-center p-4">

            <h4>No Bookings Found!</h4>

            <p>You haven't booked any movie tickets yet.</p>

            <a href="{{ url('/') }}" class="btn btn-primary">
                Explore Movies
            </a>

        </div>

    @endif

</div>

@endsection