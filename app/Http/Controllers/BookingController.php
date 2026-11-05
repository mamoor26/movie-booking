<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Showtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    // Save Booking (with class selection + kids concession)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'movie_id'     => ['required', 'exists:movies,id'],
            'showtime_id'  => ['required', 'exists:showtimes,id'],
            'class'        => ['required', 'in:Gold,Platinum,Box'],
            'seats'        => ['required', 'array', 'min:1'],
            'seats.*'      => [
                'required',
                'string',
                'regex:/^[A-E]([1-8])$/',
                'distinct'
            ],
            'kids_tickets' => ['required', 'integer', 'min:0'],
        ]);

        $booking = DB::transaction(function () use ($validated) {

            $showtime = Showtime::whereKey($validated['showtime_id'])
                ->lockForUpdate()
                ->firstOrFail();

            // Check showtime belongs to the selected movie
            if ((int) $showtime->movie_id !== (int) $validated['movie_id']) {
                throw ValidationException::withMessages([
                    'showtime_id' => 'Selected showtime does not belong to this movie.',
                ]);
            }

            // Get price based on selected class
            $class = $validated['class'];
            $priceField = strtolower($class) . '_price'; // gold_price, platinum_price, box_price
            $price = (float) $showtime->$priceField;

            if ($price <= 0) {
                throw ValidationException::withMessages([
                    'class' => 'Selected class is not available for this showtime.',
                ]);
            }

            $requestedSeats = array_values(
                array_unique($validated['seats'])
            );

            // Check for already booked seats
            $existingBookings = Booking::where('showtime_id', $showtime->id)
                ->whereIn('status', [
                    'Pending',
                    'pending',
                    'Confirmed',
                    'confirmed'
                ])
                ->lockForUpdate()
                ->get();

            $alreadyBooked = [];

            foreach ($existingBookings as $existingBooking) {
                $alreadyBooked = array_merge(
                    $alreadyBooked,
                    is_array($existingBooking->seats)
                        ? $existingBooking->seats
                        : (json_decode(
                            $existingBooking->seats ?? '[]',
                            true
                        ) ?: [])
                );
            }

            $conflicts = array_values(
                array_intersect($requestedSeats, $alreadyBooked)
            );

            if (count($conflicts)) {
                throw ValidationException::withMessages([
                    'seats' => 'These seats are already booked: '
                        . implode(', ', $conflicts),
                ]);
            }

            // Calculate total price (kids get 50% discount)
            $totalTickets = count($requestedSeats);
            $kidsTickets  = (int) $validated['kids_tickets'];

            // Make sure kids count is not more than total seats
            if ($kidsTickets > $totalTickets) {
                $kidsTickets = $totalTickets;
            }

            $adultTickets = $totalTickets - $kidsTickets;

            // Adult: full price, Kids: half price
            $totalPrice = ($adultTickets * $price) + ($kidsTickets * $price * 0.5);

            return Booking::create([
                'user_id'       => Auth::id(),
                'movie_id'      => $showtime->movie_id,
                'showtime_id'   => $showtime->id,
                'seats'         => $requestedSeats,
                'class'         => $class,
                'total_tickets' => $totalTickets,
                'kids_tickets'  => $kidsTickets,
                'total_price'   => $totalPrice,
                'status'        => 'Confirmed',
            ]);
        });

        return redirect()
            ->route('booking.confirmation', $booking->id)
            ->with('success', 'Your ticket booking has been confirmed.');
    }


    // My Bookings
    public function index()
    {
        $bookings = Booking::with([
            'movie',
            'showtime.theater'
        ])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.mybookings', compact('bookings'));
    }


    // Booking Confirmation
    public function show($id)
    {
        $booking = Booking::with([
            'movie',
            'showtime.theater'
        ])
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('user.booking-confirmation', compact('booking'));
    }
}