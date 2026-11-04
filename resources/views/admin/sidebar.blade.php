<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieFlex Admin - Movie Booking System</title>

    <!-- 1. TAILWIND CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                            dark: '#0d0e12',
                            card: '#16181f',
                            border: '#262933',
                            accent: '#f43f5e'
                        }
                    }
                }
            }
        }
    </script>

    <!-- 2. FONTAWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 3. CHART.JS LIBRARY CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- 4. EMBEDDED INTERNAL CUSTOM CSS STYLES -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0d0e12;
            color: #f3f4f6;
            overflow-x: hidden;
        }

        /* Custom Scrollbars */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #16181f;
        }
        ::-webkit-scrollbar-thumb {
            background: #262933;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #e11d48;
        }

        /* Sidebar & Collapse Animations */
        .sidebar-transition {
            transition: width 0.25s cubic-bezier(0.4, 0, 0.2, 1), transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .collapsed .sidebar-hide-text,
        .collapsed .logo-subtext,
        .collapsed .user-info {
            display: none !important;
        }

        .collapsed .sidebar-item {
            justify-content: center;
            padding-left: 0;
            padding-right: 0;
        }

        .collapsed .brand-header {
            justify-content: center;
            padding-left: 0;
            padding-right: 0;
        }

        /* Glassmorphism Effect */
        .glass-card {
            background: rgba(22, 24, 31, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(38, 41, 51, 0.8);
        }

        /* Light mode fallbacks */
        html:not(.dark) body {
            background-color: #f8fafc;
            color: #0f172a;
        }
        html:not(.dark) .glass-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #e2e8f0;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased selection:bg-brand-600 selection:text-white">

    <!-- Mobile Navigation Drawer Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/70 z-30 hidden lg:hidden backdrop-blur-sm transition-opacity" onclick="toggleMobileSidebar()"></div>

    <div class="flex h-screen overflow-hidden">

        <!-- ========================================================= -->
        <!-- 1. LEFT SIDEBAR NAVIGATION MENU                           -->
        <!-- ========================================================= -->
        <aside id="sidebar" class="sidebar-transition fixed lg:static inset-y-0 left-0 z-40 w-64 bg-brand-card border-r border-brand-border flex flex-col justify-between -translate-x-full lg:translate-x-0 select-none">

            <!-- Sidebar Header & Branding -->
            <div>
                <div class="brand-header h-16 flex items-center justify-between px-5 border-b border-brand-border">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-600 to-rose-400 flex items-center justify-center text-white shadow-lg shadow-brand-600/30 flex-shrink-0">
                            <i class="fa-solid fa-film text-lg"></i>
                        </div>
                        <div class="sidebar-hide-text">
                            <h1 class="font-extrabold text-lg leading-tight tracking-tight text-white dark:text-white">MovieFlex</h1>
                            <p class="logo-subtext text-[10px] text-brand-500 font-bold tracking-widest uppercase">Admin System</p>
                        </div>
                    </div>

                    <!-- Desktop Toggle Collapse Button -->
                    <button onclick="toggleDesktopSidebar()" class="hidden lg:flex p-1.5 rounded-lg text-gray-400 hover:text-white hover:bg-brand-border/50 transition-colors">
                        <i id="collapseChevron" class="fa-solid fa-chevron-left text-sm"></i>
                    </button>

                    <!-- Mobile Close Button -->
                    <button onclick="toggleMobileSidebar()" class="lg:hidden text-gray-400 hover:text-white">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="p-3 space-y-1 overflow-y-auto max-h-[calc(100vh-8rem)]">

                    <a href="{{ route('movie.index') }}" onclick="switchView('dashboard', this)" class="nav-btn sidebar-item active-nav flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all bg-brand-600 text-white shadow-lg shadow-brand-600/20">
                        <i class="fa-solid fa-chart-pie w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Dashboard</span>
                    </a>

                    <a href="{{ route('movie.create') }}"  class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-clapperboard w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Movies</span>
                    </a>

                    <a href="{{ route('theater.create') }}"  class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-clock w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Theater</span>
                    </a>

                    <a href="{{ route('show.index') }}"  class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-ticket w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Show Time</span>
                    </a>

                    <a href="#" onclick="switchView('customers', this)" class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-users w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Users & Customers</span>
                    </a>

                    <a href="#" onclick="switchView('analytics', this)" class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-chart-line w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">Reports & Analytics</span>
                    </a>

                    <a href="#" onclick="switchView('settings', this)" class="nav-btn sidebar-item flex items-center gap-3.5 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-gray-400 hover:bg-brand-border/40 hover:text-white transition-all">
                        <i class="fa-solid fa-gear w-5 text-center text-sm"></i>
                        <span class="sidebar-hide-text">System Settings</span>
                    </a>
                </nav>
            </div>

            <!-- User Profile Summary at Sidebar Bottom -->
            <div class="p-3 border-t border-brand-border">
                <div class="sidebar-item flex items-center gap-3 p-2 rounded-xl bg-brand-dark/60 border border-brand-border/60">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=120" alt="Admin Avatar" class="w-9 h-9 rounded-lg object-cover ring-2 ring-brand-600/30">
                    <div class="user-info min-w-0 flex-1">
                        <p class="text-xs font-bold text-white truncate">Aptech Administrator</p>
                        <p class="text-[10px] text-gray-400 truncate">admin@movieflex.com</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- ========================================================= -->
        <!-- 2. MAIN APPLICATION CONTENT AREA                          -->
        <!-- ========================================================= -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

            <!-- TOP HEADER BAR -->
            <header class="h-16 bg-brand-card border-b border-brand-border flex items-center justify-between px-4 sm:px-6 z-20">
                <div class="flex items-center gap-3">
                    <!-- Mobile Hamburger Drawer Switch -->
                    <button onclick="toggleMobileSidebar()" class="lg:hidden p-2 rounded-xl text-gray-300 hover:bg-brand-border/50">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>

                    <!-- Global Search Input -->
                    <div class="relative w-44 sm:w-80">
                        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-500 text-xs"></i>
                        <input type="text" id="globalSearchInput" onkeyup="handleGlobalSearch(this.value)" placeholder="Search movies, tickets, users..." class="w-full bg-brand-dark/80 text-xs text-white pl-9 pr-4 py-2 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all placeholder-gray-500">
                    </div>
                </div>

                <!-- Right Quick Actions & Controls -->
                <div class="flex items-center gap-2 sm:gap-3">

                    <!-- Quick Add Buttons -->
                    <a href="{{ route('addnewmovies') }}" class="flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white px-3.5 py-2 rounded-xl text-xs font-semibold shadow-lg shadow-brand-600/20 transition-all">
                        <i class="fa-solid fa-plus"></i>
                        <span>Add Movie</span>
                    </a>

                    <button onclick="openModal('bookingModal')" class="flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-3.5 py-2 rounded-xl text-xs font-semibold shadow-lg shadow-emerald-600/20 transition-all">
                        <i class="fa-solid fa-ticket"></i>
                        <span>New Booking</span>
                    </button>

                    <!-- Notifications Dropdown Trigger -->
                    <button class="p-2 rounded-xl text-gray-300 hover:bg-brand-border/50 relative transition-colors">
                        <i class="fa-solid fa-bell text-sm"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-brand-600 rounded-full ring-2 ring-brand-card"></span>
                    </button>

                    <!-- Dark / Light Mode Toggle Switch -->
                    <button onclick="toggleDarkMode()" class="p-2 rounded-xl text-gray-300 hover:bg-brand-border/50 transition-colors">
                        <i id="themeIcon" class="fa-solid fa-sun text-sm"></i>
                    </button>
                </div>
            </header>

          @yield("admin")
        </div>
    </div>

    <!-- ========================================================= -->
    <!-- 4. EMBEDDED INTERNAL JAVASCRIPT LOGIC                     -->
    <!-- ========================================================= -->
    <script>
        // Sample Movies Dataset
        let moviesList = [
            { id: 1, title: 'Inception: Resurrections', genre: 'Sci-Fi / Action', rating: '8.8', image: 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?auto=format&fit=crop&q=80&w=400' },
            { id: 2, title: 'Cyberpunk 2077', genre: 'Action / Sci-Fi', rating: '8.4', image: 'https://images.unsplash.com/photo-1578632767115-351597cf2477?auto=format&fit=crop&q=80&w=400' },
            { id: 3, title: 'Galactic Odyssey', genre: 'Adventure', rating: '9.0', image: 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=400' },
            { id: 4, title: 'Dark Knight Protocol', genre: 'Thriller', rating: '9.2', image: 'https://images.unsplash.com/photo-1509198397868-475647b2a1e5?auto=format&fit=crop&q=80&w=400' }
        ];

        // Sample Bookings Dataset
        let bookingsList = [
            { id: 'TKT-901', customer: 'David Miller', movie: 'Inception: Resurrections', showtime: '07:30 PM', seats: 'C4, C5', amount: '$30.00', status: 'Confirmed' },
            { id: 'TKT-902', customer: 'Sophia Turner', movie: 'Cyberpunk 2077', showtime: '09:15 PM', seats: 'A1', amount: '$15.00', status: 'Pending' },
            { id: 'TKT-903', customer: 'Ethan Hunt', movie: 'Galactic Odyssey', showtime: '04:00 PM', seats: 'F10, F11', amount: '$30.00', status: 'Confirmed' },
            { id: 'TKT-904', customer: 'Emma Watson', movie: 'Dark Knight Protocol', showtime: '08:00 PM', seats: 'B2', amount: '$15.00', status: 'Cancelled' }
        ];

        // Initializer on Load
        window.onload = function() {
            // Check if tables/grids exist before rendering to prevent errors on separate pages
            if (document.getElementById('bookingsTableBody')) {
                renderBookingsTable(bookingsList);
            }
            if (document.getElementById('moviesGrid')) {
                renderMoviesGrid(moviesList);
            }
            if (document.getElementById('revenueTrendChart') && document.getElementById('genreDoughnutChart')) {
                initializeCharts();
            }
        };

        // Navigation Switcher
        function switchView(viewId, el) {
            document.querySelectorAll('.view-panel').forEach(p => p.classList.add('hidden'));
            const targetView = document.getElementById('view-' + viewId);
            if(targetView) targetView.classList.remove('hidden');

            document.querySelectorAll('.nav-btn').forEach(btn => {
                btn.classList.remove('bg-brand-600', 'text-white', 'shadow-lg', 'shadow-brand-600/20');
                btn.classList.add('text-gray-400');
            });

            el.classList.add('bg-brand-600', 'text-white', 'shadow-lg', 'shadow-brand-600/20');
            el.classList.remove('text-gray-400');

            if (window.innerWidth < 1024) {
                toggleMobileSidebar();
            }
        }

        // Desktop Sidebar Toggle Collapse
        let isCollapsed = false;
        function toggleDesktopSidebar() {
            const sidebar = document.getElementById('sidebar');
            const icon = document.getElementById('collapseChevron');
            isCollapsed = !isCollapsed;

            if (isCollapsed) {
                sidebar.classList.add('collapsed');
                sidebar.classList.replace('w-64', 'w-20');
                icon.classList.replace('fa-chevron-left', 'fa-chevron-right');
            } else {
                sidebar.classList.remove('collapsed');
                sidebar.classList.replace('w-20', 'w-64');
                icon.classList.replace('fa-chevron-right', 'fa-chevron-left');
            }
        }

        // Mobile Sidebar Drawer Toggle
        function toggleMobileSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('mobileOverlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Dark / Light Mode Switch
        function toggleDarkMode() {
            const html = document.documentElement;
            const icon = document.getElementById('themeIcon');
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                icon.classList.replace('fa-sun', 'fa-moon');
            } else {
                html.classList.add('dark');
                icon.classList.replace('fa-moon', 'fa-sun');
            }
        }

        // Render Data Table
        function renderBookingsTable(data) {
            const tbody = document.getElementById('bookingsTableBody');
            if (!tbody) return;
            tbody.innerHTML = '';

            data.forEach(item => {
                let badge = '';
                if(item.status === 'Confirmed') badge = `<span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Confirmed</span>`;
                else if(item.status === 'Pending') badge = `<span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">Pending</span>`;
                else badge = `<span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-rose-500/10 text-rose-400 border border-rose-500/20">Cancelled</span>`;

                tbody.innerHTML += `
                    <tr class="hover:bg-brand-dark/40 transition-colors">
                        <td class="py-3 px-3 font-mono font-bold text-brand-500">${item.id}</td>
                        <td class="py-3 px-3 font-semibold text-white">${item.customer}</td>
                        <td class="py-3 px-3">${item.movie}</td>
                        <td class="py-3 px-3 text-gray-400">${item.showtime}</td>
                        <td class="py-3 px-3 font-mono">${item.seats}</td>
                        <td class="py-3 px-3 font-bold text-white">${item.amount}</td>
                        <td class="py-3 px-3">${badge}</td>
                        <td class="py-3 px-3 text-right space-x-1">
                            <button onclick="viewTicket('${item.id}')" class="text-gray-400 hover:text-white p-1" title="View Ticket"><i class="fa-solid fa-eye"></i></button>
                            <button onclick="deleteBooking('${item.id}')" class="text-gray-400 hover:text-rose-500 p-1" title="Delete"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                `;
            });
        }

        // Filters
        function applyBookingFilter() {
            const val = document.getElementById('tableStatusFilter').value;
            if(val === 'ALL') renderBookingsTable(bookingsList);
            else renderBookingsTable(bookingsList.filter(b => b.status === val));
        }

        function handleGlobalSearch(query) {
            const q = query.toLowerCase();
            const filtered = bookingsList.filter(b =>
                b.customer.toLowerCase().includes(q) ||
                b.movie.toLowerCase().includes(q) ||
                b.id.toLowerCase().includes(q)
            );
            renderBookingsTable(filtered);
        }

        // Render Movie Grid Cards
        function renderMoviesGrid(data) {
            const grid = document.getElementById('moviesGrid');
            if (!grid) return;
            grid.innerHTML = '';

            data.forEach(m => {
                grid.innerHTML += `
                    <div class="glass-card rounded-2xl overflow-hidden shadow-sm flex flex-col group border border-brand-border">
                        <div class="relative h-60 overflow-hidden">
                            <img src="${m.image}" alt="${m.title}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='https://placehold.co/400x600/16181f/ffffff?text=Movie'">
                            <span class="absolute top-3 right-3 bg-black/80 backdrop-blur-md text-amber-400 text-xs font-bold px-2.5 py-1 rounded-lg flex items-center gap-1 border border-white/10">
                                <i class="fa-solid fa-star text-[10px]"></i> ${m.rating}
                            </span>
                        </div>
                        <div class="p-4 flex-1 flex flex-col justify-between space-y-2">
                            <div>
                                <span class="text-[10px] font-extrabold text-brand-500 uppercase tracking-wider">${m.genre}</span>
                                <h4 class="font-bold text-white text-sm line-clamp-1">${m.title}</h4>
                            </div>
                            <div class="flex items-center justify-between pt-2 border-t border-brand-border">
                                <span class="text-xs text-gray-400">Screen 1 & 2</span>
                                <button onclick="deleteMovie(${m.id})" class="text-xs text-rose-500 hover:underline font-semibold">Remove</button>
                            </div>
                        </div>
                    </div>
                `;
            });
        }

        // Modal Helpers
        function openModal(id) {
            const modal = document.getElementById(id);
            if(modal) modal.classList.remove('hidden');
        }
        function closeModal(id) {
            const modal = document.getElementById(id);
            if(modal) modal.classList.add('hidden');
        }

        function deleteBooking(id) {
            bookingsList = bookingsList.filter(b => b.id !== id);
            applyBookingFilter();
        }

        function deleteMovie(id) {
            moviesList = moviesList.filter(m => m.id !== id);
            renderMoviesGrid(moviesList);
        }

        // Chart.js Setup
        function initializeCharts() {
            const ctx1El = document.getElementById('revenueTrendChart');
            if (ctx1El) {
                const ctx1 = ctx1El.getContext('2d');
                new Chart(ctx1, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                        datasets: [{
                            label: 'Revenue ($)',
                            data: [16000, 21000, 25000, 28000, 32000, 35000, 41000, 44000, 42000, 48250],
                            borderColor: '#e11d48',
                            backgroundColor: 'rgba(225, 29, 72, 0.12)',
                            fill: true,
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            x: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#71717a' } },
                            y: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#71717a' } }
                        }
                    }
                });
            }

            const ctx2El = document.getElementById('genreDoughnutChart');
            if (ctx2El) {
                const ctx2 = ctx2El.getContext('2d');
                new Chart(ctx2, {
                    type: 'doughnut',
                    data: {
                        labels: ['Action', 'Sci-Fi', 'Thriller', 'Adventure'],
                        datasets: [{
                            data: [40, 30, 18, 12],
                            backgroundColor: ['#e11d48', '#3b82f6', '#10b981', '#a855f7'],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { position: 'bottom', labels: { color: '#9ca3af', font: { size: 10 } } } }
                    }
                });
            }
        }
    </script>
</body>
</html>
