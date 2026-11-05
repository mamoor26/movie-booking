@extends('user.navbar')

@section('user')

<style>
    .booking-container {
        max-width: 950px;
        margin: 50px auto;
        padding: 30px;
        background: #1b2030;
        border-radius: 15px;
        color: white;
    }

    .show-card {
        background: #292f42;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .show-card input {
        accent-color: #ffc107;
    }

    .screen {
        background: white;
        color: #111;
        text-align: center;
        padding: 12px;
        margin: 35px auto;
        max-width: 500px;
        border-radius: 50% 50% 5px 5px;
    }

    .seat-row {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 12px 0;
    }

    .seat {
        width: 42px;
        height: 38px;
        border: none;
        border-radius: 8px 8px 4px 4px;
        background: #444c60;
        color: white;
        cursor: pointer;
    }

    .seat.selected {
        background: #ffc107;
        color: black;
    }

    .seat.booked {
        background: #dc3545;
        cursor: not-allowed;
    }

    .seat:disabled {
        opacity: 1;
    }

    .summary {
        background: #292f42;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
    }

    .btn-book {
        background: #ffc107;
        color: black;
        font-weight: bold;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
    }

    .btn-book:hover {
        background: #e0a800;
    }

    .seat-map {
        display: none;
    }

    .seat-map.active {
        display: block;
    }

    .class-options label {
        display: inline-block;
        margin-right: 15px;
        padding: 8px 12px;
        background: #444c60;
        border-radius: 8px;
        cursor: pointer;
    }

    .class-options input:checked + span {
        color: #ffc107;
        font-weight: bold;
    }
</style>

<div class="container booking-container">

    <h2 class="text-center mb-4">Book Your Movie Ticket</h2>

    <h3 class="text-warning">{{ $movie->Movie_name }}</h3>

    <hr>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p class="mb-1">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <!-- Date Filter -->
    @php
        // Get all unique dates from showtimes
        $dates = $showtimes->pluck('showdate')->unique()->sort()->values();
    @endphp

    <div class="mb-4">
        <label class="text-warning"><strong>Filter by Date:</strong></label>
        <select id="dateFilter" class="form-select" onchange="filterByDate()" style="max-width: 300px;">
            <option value="">All Dates</option>
            @foreach($dates as $date)
                <option value="{{ $date }}">{{ $date }}</option>
            @endforeach
        </select>
    </div>

    <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">

        @csrf

        <input type="hidden" name="movie_id" value="{{ $movie->id }}">

        <!-- Hidden input for selected class -->
        <input type="hidden" name="class" id="classInput" value="">

        <h4 class="mb-3">Available Showtimes</h4>

        @forelse($showtimes as $show)

            @php
                // Get booked seats for this showtime
                // (status is "Confirmed" with capital C as set in BookingController)
                $bookedSeats = $show->bookings
                    ->whereIn('status', ['Confirmed', 'confirmed', 'Pending', 'pending'])
                    ->flatMap(function($booking) {
                        $seats = $booking->seats;
                        return is_array($seats) ? $seats : (json_decode($seats ?? '[]', true) ?: []);
                    })
                    ->toArray();
            @endphp

            <div class="show-card" data-date="{{ $show->showdate }}">

                <h5 class="text-warning">
                    {{ $show->theater->theater_name ?? 'Theater' }}
                </h5>

                <p>Date: {{ $show->showdate }}</p>

                <p>Time: {{ $show->showtime }}</p>

                <p>Categories: {{ $show->categories }}</p>

                <label>
                    <input
                        type="radio"
                        name="showtime_id"
                        value="{{ $show->id }}"
                        onchange="selectShowtime(this)"
                        required
                    >
                    Select This Showtime
                </label>

                <div class="seat-map" id="seatmap-{{ $show->id }}">

                    <!-- Class Selection (Gold / Platinum / Box) -->
                    <div class="class-options mb-3 mt-3">
                        <strong>Select Class:</strong>
                        <br><br>

                        <label>
                            <input
                                type="radio"
                                name="class_radio"
                                value="Gold"
                                data-price="{{ $show->gold_price ?? 0 }}"
                                onchange="selectClass(this)"
                            >
                            <span>Gold - Rs. {{ $show->gold_price ?? 'N/A' }}</span>
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="class_radio"
                                value="Platinum"
                                data-price="{{ $show->platinum_price ?? 0 }}"
                                onchange="selectClass(this)"
                            >
                            <span>Platinum - Rs. {{ $show->platinum_price ?? 'N/A' }}</span>
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="class_radio"
                                value="Box"
                                data-price="{{ $show->box_price ?? 0 }}"
                                onchange="selectClass(this)"
                            >
                            <span>Box - Rs. {{ $show->box_price ?? 'N/A' }}</span>
                        </label>
                    </div>

                    <hr>

                    <div class="screen">
                        SCREEN THIS WAY
                    </div>

                    <div class="text-center mb-3">
                        <span class="badge bg-secondary">Available</span>
                        <span class="badge bg-warning text-dark">Selected</span>
                        <span class="badge bg-danger">Booked</span>
                    </div>

                    @foreach(['A','B','C','D','E'] as $row)

                        <div class="seat-row">

                            @for($i = 1; $i <= 8; $i++)

                                @php
                                    $seat = $row.$i;
                                    $isBooked = in_array($seat, $bookedSeats);
                                @endphp

                                <button
                                    type="button"
                                    class="seat {{ $isBooked ? 'booked' : '' }}"
                                    data-seat="{{ $seat }}"
                                    {{ $isBooked ? 'disabled' : '' }}
                                    onclick="selectSeat(this)"
                                >
                                    {{ $seat }}
                                </button>

                            @endfor

                        </div>

                    @endforeach

                </div>

            </div>

        @empty

            <div class="alert alert-warning">
                No Showtimes Available For This Movie.
            </div>

        @endforelse

        @if($showtimes->count() > 0)

            <div class="summary">

                <h5>Booking Summary</h5>

                <p>
                    Selected Class:
                    <span id="selectedClass" class="text-warning">None</span>
                </p>

                <p>
                    Selected Seats:
                    <span id="selectedSeats">None</span>
                </p>

                <p>
                    Total Tickets:
                    <span id="totalTickets">0</span>
                </p>

                <!-- Kids Tickets (3-12 years get 50% discount) -->
                <div class="mb-3">
                    <label class="text-warning">
                        <strong>Kids Tickets (3-12 years, 50% off):</strong>
                    </label>
                    <input
                        type="number"
                        name="kids_tickets"
                        id="kidsTickets"
                        class="form-control"
                        min="0"
                        value="0"
                        style="max-width: 150px;"
                        onchange="updateSummary()"
                    >
                    <small class="text-muted">
                        Select how many of your seats are for kids.
                    </small>
                </div>

                <h5 class="text-warning">
                    Total Price: Rs.
                    <span id="totalPrice">0</span>
                </h5>

                <div id="seatInputs"></div>

                <button type="submit" class="btn-book mt-3">
                    Confirm Booking
                </button>

            </div>

        @endif

    </form>

</div>

<script>

    let selectedSeats = [];
    let selectedClass = '';
    let classPrice = 0;

    // Filter showtimes by date
    function filterByDate() {
        let selectedDate = document.getElementById('dateFilter').value;

        document.querySelectorAll('.show-card').forEach(function(card) {
            if (!selectedDate || card.dataset.date === selectedDate) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // When user selects a showtime
    function selectShowtime(radio) {

        // Hide all seat maps
        document.querySelectorAll('.seat-map').forEach(function(map) {
            map.classList.remove('active');
        });

        // Show the selected showtime's seat map
        let selectedMap = document.getElementById(
            'seatmap-' + radio.value
        );
        selectedMap.classList.add('active');

        // Reset selections
        selectedSeats = [];
        selectedClass = '';
        classPrice = 0;

        // Reset seat colors
        document.querySelectorAll('.seat').forEach(function(seat) {
            seat.classList.remove('selected');
        });

        // Reset class radios
        document.querySelectorAll('input[name="class_radio"]').forEach(function(radio) {
            radio.checked = false;
        });

        // Reset kids count
        document.getElementById('kidsTickets').value = 0;

        updateSummary();
    }

    // When user selects a class
    function selectClass(radio) {
        selectedClass = radio.value;
        classPrice = Number(radio.dataset.price);

        // Set hidden input value
        document.getElementById('classInput').value = selectedClass;

        updateSummary();
    }

    // When user selects / deselects a seat
    function selectSeat(button) {

        if (button.classList.contains('booked')) {
            return;
        }

        let seat = button.dataset.seat;

        if (button.classList.contains('selected')) {

            button.classList.remove('selected');

            selectedSeats = selectedSeats.filter(function(item) {
                return item !== seat;
            });

        } else {

            button.classList.add('selected');

            selectedSeats.push(seat);

        }

        updateSummary();
    }

    // Update the booking summary
    function updateSummary() {

        // Selected class
        document.getElementById('selectedClass').innerText =
            selectedClass ? selectedClass : 'None';

        // Selected seats
        document.getElementById('selectedSeats').innerText =
            selectedSeats.length
                ? selectedSeats.join(', ')
                : 'None';

        // Total tickets
        let totalSeats = selectedSeats.length;
        document.getElementById('totalTickets').innerText = totalSeats;

        // Kids count (cannot be more than total seats)
        let kidsInput = document.getElementById('kidsTickets');
        let kids = parseInt(kidsInput.value) || 0;

        if (kids > totalSeats) {
            kids = totalSeats;
            kidsInput.value = kids;
        }

        // Calculate price
        let adults = totalSeats - kids;

        // Adult: full price, Kids: 50% discount
        let totalPrice = (adults * classPrice) + (kids * classPrice * 0.5);

        document.getElementById('totalPrice').innerText =
            totalPrice.toFixed(2);

        // Create hidden inputs for each selected seat
        let inputs = document.getElementById('seatInputs');
        inputs.innerHTML = '';

        selectedSeats.forEach(function(seat) {
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'seats[]';
            input.value = seat;
            inputs.appendChild(input);
        });

    }

    // Validate form before submit
    document.getElementById('bookingForm').addEventListener(
        'submit',
        function(event) {

            let showtime = document.querySelector(
                'input[name="showtime_id"]:checked'
            );

            if (!showtime) {
                event.preventDefault();
                alert('Please select a showtime!');
                return;
            }

            if (!selectedClass) {
                event.preventDefault();
                alert('Please select a class (Gold / Platinum / Box)!');
                return;
            }

            if (selectedSeats.length === 0) {
                event.preventDefault();
                alert('Please select at least one seat!');
                return;
            }

        }
    );

</script>

@endsection