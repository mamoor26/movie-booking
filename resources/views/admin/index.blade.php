@extends('admin.sidebar')
@section('admin')
  <!-- MAIN WORKSPACE VIEWS -->
            <main class="flex-1 overflow-y-auto p-4 sm:p-6 space-y-6">

                <!-- --------------------------------------------------- -->
                <!-- VIEW 1: MAIN DASHBOARD OVERVIEW                     -->
                <!-- --------------------------------------------------- -->
                <div id="view-dashboard" class="view-panel space-y-6">

                    <!-- Page Header Title -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-white">Cinema Operational Dashboard</h2>
                            <p class="text-xs text-gray-400">Live ticket sales, revenue graphs, and show updates</p>
                        </div>
                        <div class="flex items-center gap-2 bg-brand-card border border-brand-border px-3.5 py-1.5 rounded-xl text-xs font-semibold text-gray-300">
                            <i class="fa-regular fa-calendar text-brand-600"></i>
                            <span id="currentDateDisplay">October 2026</span>
                        </div>
                    </div>

                    <!-- 4 METRIC SUMMARY CARDS -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Card 1: Total Users (Converted from Total Revenue) -->
                        <div class="glass-card p-4 rounded-2xl shadow-sm flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Users</p>
                                <p class="text-2xl font-extrabold text-white" id="statUsers">{{\App\Models\User::count()}}</p>
                                <span class="text-[11px] font-bold text-emerald-400 flex items-center gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +12.5% this month
                                </span>
                            </div>
                            <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>

                        <!-- Card 2: Total Bookings -->
                        <div class="glass-card p-4 rounded-2xl shadow-sm flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Total Bookings</p>
                                <p class="text-2xl font-extrabold text-white" id="statBookings">3,420</p>
                                <span class="text-[11px] font-bold text-emerald-400 flex items-center gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +8.2% today
                                </span>
                            </div>
                            <div class="w-12 h-12 rounded-2xl bg-brand-600/10 text-brand-500 border border-brand-600/20 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-ticket"></i>
                            </div>
                        </div>

                        <!-- Card 3: Active Movies -->
                        <div class="glass-card p-4 rounded-2xl shadow-sm flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Active Movies</p>
                                <p class="text-2xl font-extrabold text-white" id="statMovies">{{\App\Models\Movie::count()}}</p>
                                <span class="text-[11px] font-semibold text-gray-400"></span>
                            </div>
                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-400 border border-blue-500/20 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-film"></i>
                            </div>
                        </div>

                        <!-- Card 4: Occupancy Rate -->
                        <div class="glass-card p-4 rounded-2xl shadow-sm flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Seat Occupancy</p>
                                <p class="text-2xl font-extrabold text-white">84.5%</p>
                                <span class="text-[11px] font-bold text-purple-400 flex items-center gap-1">
                                    <i class="fa-solid fa-couch"></i> High Demand
                                </span>
                            </div>
                            <div class="w-12 h-12 rounded-2xl bg-purple-500/10 text-purple-400 border border-purple-500/20 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>

                    <!-- CHART.JS ANALYTICS SECTION -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Revenue Trend Chart -->
                        <div class="lg:col-span-2 glass-card p-5 rounded-2xl space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="font-bold text-white text-base">Revenue & Ticket Growth</h3>
                                    <p class="text-xs text-gray-400">Monthly sales performance breakdown</p>
                                </div>
                                <select class="bg-brand-dark text-xs font-semibold rounded-xl border border-brand-border px-3 py-1.5 text-gray-300 focus:outline-none">
                                    <option>Monthly (2026)</option>
                                    <option>Weekly</option>
                                </select>
                            </div>
                            <div class="h-64 sm:h-72 w-full">
                                <canvas id="revenueTrendChart"></canvas>
                            </div>
                        </div>

                        <!-- Genre Distribution Chart -->
                        <div class="glass-card p-5 rounded-2xl space-y-4">
                            <div>
                                <h3 class="font-bold text-white text-base">Genre Popularity</h3>
                                <p class="text-xs text-gray-400">Ticket bookings by genre category</p>
                            </div>
                            <div class="h-64 sm:h-72 w-full flex items-center justify-center">
                                <canvas id="genreDoughnutChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- DATA TABLE: RECENT TICKET BOOKINGS -->
                    <div class="glass-card rounded-2xl overflow-hidden p-5 space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div>
                                <h3 class="font-bold text-base text-white">Recent Ticket Reservations</h3>
                                <p class="text-xs text-gray-400">Real-time status of seats reserved across all cinema auditoriums</p>
                            </div>
                            <!-- Filter Toolbar -->
                            <div class="flex items-center gap-2">
                                <select id="tableStatusFilter" onchange="applyBookingFilter()" class="bg-brand-dark text-xs font-semibold rounded-xl border border-brand-border px-3 py-1.5 text-gray-300 focus:outline-none">
                                    <option value="ALL">All Status</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>

                        <!-- Table Area -->
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-brand-border text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                                        <th class="py-3 px-3">Ticket ID</th>
                                        <th class="py-3 px-3">Customer</th>
                                        <th class="py-3 px-3">Movie Title</th>
                                        <th class="py-3 px-3">Showtime</th>
                                        <th class="py-3 px-3">Seats</th>
                                        <th class="py-3 px-3">Amount</th>
                                        <th class="py-3 px-3">Status</th>
                                        <th class="py-3 px-3 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="bookingsTableBody" class="text-xs divide-y divide-brand-border/50 text-gray-300">
                                    <!-- Dynamic JavaScript Table Rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 2: MOVIES MANAGEMENT                           -->
                <!-- --------------------------------------------------- -->
                <div id="view-movies" class="view-panel hidden space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-extrabold text-white">Movies Catalog Management</h2>
                            <p class="text-xs text-gray-400">Manage screenings, posters, categories, and ratings</p>
                        </div>
                        <button onclick="openModal('addMovieModal')" class="bg-brand-600 hover:bg-brand-700 text-white px-4 py-2 rounded-xl text-xs font-semibold flex items-center gap-2 shadow-lg shadow-brand-600/20">
                            <i class="fa-solid fa-plus"></i> Add New Movie
                        </button>
                    </div>

                    <!-- Movies Cards Grid -->
                    <div id="moviesGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Dynamic Movie Cards Rendered Here -->
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 3: SHOWTIMES & SCREENS                         -->
                <!-- --------------------------------------------------- -->
                <div id="view-showtimes" class="view-panel hidden space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white">Showtimes & Screen Schedule</h2>
                        <p class="text-xs text-gray-400">Auditoriums capacity and daily slot allocation</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="glass-card p-5 rounded-2xl space-y-3">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-white text-sm">Screen 1 (IMAX 3D)</h4>
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Active</span>
                            </div>
                            <p class="text-xs text-gray-400">Capacity: 250 Seats | Dolby Atmos Sound</p>
                        </div>
                        <div class="glass-card p-5 rounded-2xl space-y-3">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-white text-sm">Screen 2 (VIP Recliner)</h4>
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Active</span>
                            </div>
                            <p class="text-xs text-gray-400">Capacity: 80 Seats | Gourmet Dining</p>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 4: BOOKINGS & TICKETS                          -->
                <!-- --------------------------------------------------- -->
                <div id="view-bookings" class="view-panel hidden space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white">Bookings & Ticket Issuance</h2>
                        <p class="text-xs text-gray-400">Search customer tickets and issue replacements</p>
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 5: CUSTOMERS                                   -->
                <!-- --------------------------------------------------- -->
                <div id="view-customers" class="view-panel hidden space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white">Customer Loyalty & Accounts</h2>
                        <p class="text-xs text-gray-400">Registered users, booking history, and reward points</p>
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 6: REPORTS & ANALYTICS                         -->
                <!-- --------------------------------------------------- -->
                <div id="view-analytics" class="view-panel hidden space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white">Financial & Operational Analytics</h2>
                        <p class="text-xs text-gray-400">Detailed financial audits and seat occupancy rate reports</p>
                    </div>
                </div>

                <!-- --------------------------------------------------- -->
                <!-- VIEW 7: SYSTEM SETTINGS                             -->
                <!-- --------------------------------------------------- -->
                <div id="view-settings" class="view-panel hidden space-y-6">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-white">System Settings</h2>
                        <p class="text-xs text-gray-400">Payment gateway configurations, seat maps, and access permissions</p>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- ========================================================= -->
    <!-- 3. MODAL DIALOG POPUPS                                    -->
    <!-- ========================================================= -->

    <!-- MODAL 1: ADD NEW MOVIE -->
    <div id="addMovieModal" class="fixed inset-0 bg-black/75 z-50 flex items-center justify-center hidden p-4 backdrop-blur-sm">
        <div class="glass-card rounded-2xl max-w-lg w-full shadow-2xl overflow-hidden border border-brand-border">
            <div class="flex items-center justify-between p-5 border-b border-brand-border">
                <h3 class="font-bold text-base text-white">Add New Movie</h3>
                <button onclick="closeModal('addMovieModal')" class="text-gray-400 hover:text-white">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <form onsubmit="saveMovieForm(event)" class="p-5 space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Movie Title</label>
                    <input type="text" id="mTitle" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Genre</label>
                        <input type="text" id="mGenre" placeholder="Action, Sci-Fi" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Rating</label>
                        <input type="text" id="mRating" placeholder="8.8" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Poster Image Link</label>
                    <input type="url" id="mImage" placeholder="https://images.unsplash.com/..." required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                </div>
                <div class="flex justify-end gap-3 pt-3 border-t border-brand-border">
                    <button type="button" onclick="closeModal('addMovieModal')" class="px-4 py-2 text-xs font-semibold text-gray-400 hover:text-white">Cancel</button>
                    <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white px-4 py-2 rounded-xl text-xs font-semibold shadow-lg shadow-brand-600/20">Save Movie</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 2: NEW TICKET BOOKING -->
    <div id="bookingModal" class="fixed inset-0 bg-black/75 z-50 flex items-center justify-center hidden p-4 backdrop-blur-sm">
        <div class="glass-card rounded-2xl max-w-md w-full shadow-2xl overflow-hidden border border-brand-border">
            <div class="flex items-center justify-between p-5 border-b border-brand-border">
                <h3 class="font-bold text-base text-white">Issue Ticket Booking</h3>
                <button onclick="closeModal('bookingModal')" class="text-gray-400 hover:text-white">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
            <form onsubmit="saveBookingForm(event)" class="p-5 space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Customer Name</label>
                    <input type="text" id="bCustomer" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Select Movie</label>
                    <select id="bMovie" class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                        <option>Inception: Resurrections</option>
                        <option>Cyberpunk 2077</option>
                        <option>Galactic Odyssey</option>
                        <option>Dark Knight Protocol</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Seat No(s)</label>
                        <input type="text" id="bSeats" placeholder="E4, E5" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-400 mb-1">Amount ($)</label>
                        <input type="text" id="bAmount" placeholder="30.00" required class="w-full bg-brand-dark border border-brand-border rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-brand-600">
                    </div>
                </div>
                <div class="flex justify-end gap-3 pt-3 border-t border-brand-border">
                    <button type="button" onclick="closeModal('bookingModal')" class="px-4 py-2 text-xs font-semibold text-gray-400 hover:text-white">Cancel</button>
                    <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-xl text-xs font-semibold shadow-lg shadow-emerald-600/20">Confirm Booking</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL 3: TICKET DETAILS VIEW -->
    <div id="ticketDetailModal" class="fixed inset-0 bg-black/75 z-50 flex items-center justify-center hidden p-4 backdrop-blur-sm">
        <div class="glass-card rounded-2xl max-w-sm w-full shadow-2xl overflow-hidden border border-brand-border p-6 space-y-4 text-center">
            <div class="w-12 h-12 rounded-full bg-emerald-500/10 text-emerald-400 flex items-center justify-center mx-auto text-xl border border-emerald-500/20">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <h3 class="font-extrabold text-white text-lg" id="detMovie">Movie Title</h3>
                <p class="text-xs text-brand-500 font-mono font-bold mt-0.5" id="detId">TKT-000</p>
            </div>
            <div class="bg-brand-dark/80 p-4 rounded-xl border border-brand-border text-left space-y-2 text-xs">
                <div class="flex justify-between"><span class="text-gray-400">Customer:</span><span id="detCustomer" class="font-bold text-white">--</span></div>
                <div class="flex justify-between"><span class="text-gray-400">Seats:</span><span id="detSeats" class="font-bold text-white">--</span></div>
                <div class="flex justify-between"><span class="text-gray-400">Showtime:</span><span class="font-bold text-white">08:00 PM</span></div>
                <div class="flex justify-between"><span class="text-gray-400">Status:</span><span id="detStatus" class="font-bold text-emerald-400">Confirmed</span></div>
            </div>
            <button onclick="closeModal('ticketDetailModal')" class="w-full bg-brand-600 hover:bg-brand-700 text-white py-2 rounded-xl text-xs font-semibold transition-colors">Close Receipt</button>
        </div>
    </div>


@endsection
