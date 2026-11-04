@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Top Header Title & Back Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-5xl mx-auto">
        <div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">Add New Showtime</h1>
            <p class="text-xs text-gray-400 mt-0.5">Schedule a movie screening, assign a theater, and set ticket pricing</p>
        </div>
        <a href="javascript:history.back()" class="inline-flex items-center justify-center gap-2 bg-brand-card hover:bg-brand-border/40 text-gray-300 hover:text-white px-4 py-2.5 rounded-xl text-xs font-semibold border border-brand-border transition-all self-start sm:self-auto">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <!-- Main Content Card Container -->
    <div class="max-w-5xl mx-auto glass-card rounded-3xl p-6 sm:p-10 border border-brand-border shadow-2xl bg-brand-card/90">

        <form action="{{ route('show.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Row 1: Movie & Theater Selection -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Movie ID (Dropdown) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Select Movie <span class="text-brand-500">*</span>
                    </label>



                    <div class="relative">
                        <select name="movie_id" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected >Choose a movie</option>
                              @foreach ($movie as $movies)
                                <option value="{{ $movies->id }}">{{ $movies->Movie_name }}</option>
                                @endforeach
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>

                </div>

                <!-- Theater ID (Dropdown) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Select Theater <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="theater_id" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected >Choose a theater</option>
                            @foreach ($theater as $theaters )



                                <option value="{{ $theaters->id }}">{{ $theaters->theater_name }}</option>
                                   @endforeach

                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Row 2: Showdate, Showtime & Categories -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Showdate -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Show Date <span class="text-brand-500">*</span>
                    </label>
                    <input type="date" name="showdate" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all shadow-inner">
                </div>

                <!-- Showtime (Dropdown with specified slots) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Show Time <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="showtime" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select show time</option>
                            <option value="11:00 AM To 1:00 PM">11:00 AM To 1:00 PM</option>
                            <option value="2:00 PM To 4:30 PM">2:00 PM To 4:30 PM</option>
                            <option value="5:00 PM To 7:30 PM">5:00 PM To 7:30 PM</option>
                            <option value="8:00 PM To 10:30 PM">8:00 PM To 10:30 PM</option>
                            <option value="11:00 PM To 1:30 AM">11:00 PM To 1:30 AM</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>

                <!-- Categories -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Category <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="categories" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select category</option>
                            <option value="Standard">Standard</option>
                            <option value="VIP">VIP</option>
                            <option value="IMAX">IMAX</option>
                            <option value="3D">3D</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Row 3: Ticket Price (Dropdown with Category Prices) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Ticket Price -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Ticket Price (Rs.) <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="ticket_price" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select ticket price</option>
                            <option value="800">Standard - Rs. 800</option>
                            <option value="1000">3D - Rs. 1,000</option>
                            <option value="1200">VIP - Rs. 1,200</option>
                            <option value="1500">IMAX - Rs. 1,500</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Form Action Footer Buttons -->
            <div class="pt-6 border-t border-brand-border/60 flex items-center justify-end gap-3">
                <a href="javascript:history.back()" class="px-6 py-3 rounded-xl text-xs font-semibold text-gray-400 hover:text-white hover:bg-brand-border/40 transition-all">
                    Cancel
                </a>
                <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-3 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-calendar-plus"></i> Save Showtime
                </button>
            </div>

        </form>
    </div>

</main>
@endsection

