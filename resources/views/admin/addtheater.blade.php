@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Top Header Title & Back Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-5xl mx-auto">
        <div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">Add New Theater</h1>
            <p class="text-xs text-gray-400 mt-0.5">Configure theater details, location, and seating capacity</p>
        </div>
        <a href="javascript:history.back()" class="inline-flex items-center justify-center gap-2 bg-brand-card hover:bg-brand-border/40 text-gray-300 hover:text-white px-4 py-2.5 rounded-xl text-xs font-semibold border border-brand-border transition-all self-start sm:self-auto">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <!-- Main Content Card Container -->
    <div class="max-w-5xl mx-auto glass-card rounded-3xl p-6 sm:p-10 border border-brand-border shadow-2xl bg-brand-card/90">

        <form action="{{ route('theater.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Row 1: Theater Name & Location -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Theater Name (Dropdown) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Theater Name <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="theater_name" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select theater name</option>
                            <option value="Cinepax Cinemas">Cinepax Cinemas</option>
                            <option value="Universal Cinemas">Universal Cinemas</option>
                            <option value="Nueplex Cinemas">Nueplex Cinemas</option>
                            <option value="The Arena">The Arena</option>
                            <option value="Atrium Cinemas">Atrium Cinemas</option>
                            <option value="Grand Cultural Complex">Grand Cultural Complex</option>
                            <option value="Mega Multiplex">Mega Multiplex</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>

                <!-- Location (Dropdown - Pakistani Cities) -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Location / City <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="location" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected>Select city / location</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Rawalpindi">Rawalpindi</option>
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Multan">Multan</option>
                            <option value="Peshawar">Peshawar</option>
                            <option value="Quetta">Quetta</option>
                            <option value="Hyderabad">Hyderabad</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Row 2: Total Seats -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Total Seats -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Total Seats <span class="text-brand-500">*</span>
                    </label>
                    <input type="number" name="total_seats" placeholder="Enter total seats (e.g., 200)" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all placeholder-gray-500 shadow-inner">
                </div>
            </div>

            <!-- Form Action Footer Buttons -->
            <div class="pt-6 border-t border-brand-border/60 flex items-center justify-end gap-3">
                <a href="javascript:history.back()" class="px-6 py-3 rounded-xl text-xs font-semibold text-gray-400 hover:text-white hover:bg-brand-border/40 transition-all">
                    Cancel
                </a>
                <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-3 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-building"></i> Save Theater
                </button>
            </div>

        </form>
    </div>

</main>
@endsection
