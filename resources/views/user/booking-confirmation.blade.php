@extends('user.navbar')

@section('user')

<div class="container mt-5 mb-5">

    <div class="card shadow-lg mx-auto" style="max-width: 700px;">

        <div class="card-header bg-success text-white text-center py-4">

            <h2>Booking Confirmed!</h2>
            <p class="mb-0">Your movie ticket has been booked successfully.</p>

        </div>

        <div class="card-body p-4">

            <h4 class="text-center mb-4">Movie Ticket</h4>

            <hr>

            <p>
                <strong>Booking ID:</strong>
                #{{ $booking->id }}
            </p>

            <p>
                <strong>Movie:</strong>
                {{ $booking->movie->Movie_name ?? 'N/A' }}
            </p>

            <p>
                <strong>Theater:</strong>
                {{ $booking->showtime->theater->theater_name ?? 'N/A' }}
            </p>

            <p>
                <strong>Date:</strong>
                {{ $booking->showtime->showdate ?? 'N/A' }}
            </p>

            <p>
                <strong>Show Time:</strong>
                {{ $booking->showtime->showtime ?? 'N/A' }}
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
                <strong>Total Amount:</strong>
                Rs. {{ number_format($booking->total_price, 2) }}
            </p>

            <p>
                <strong>Status:</strong>
                <span class="badge bg-success">
                    {{ $booking->status }}
                </span>
            </p>

            <hr>

            <div class="text-center mt-4">

                <a href="{{ route('my.bookings') }}"
                   class="btn btn-primary">
                    My Bookings
                </a>

                <a href="{{ url('/') }}"
                   class="btn btn-secondary">
                    Back to Home
                </a>

            </div>

        </div>

    </div>

</div>

@endsection