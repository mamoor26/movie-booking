@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Header & Add Showtime Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-6xl mx-auto">
        <div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">All Showtimes</h1>
            <p class="text-xs text-gray-400 mt-0.5">Manage movie schedules, theaters, categories, and ticket prices</p>
        </div>
        <a href="{{ route('show.create') }}" class="inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all self-start sm:self-auto">
            <i class="fa-solid fa-plus"></i> Add New Showtime
        </a>
    </div>

    <!-- Table Card Container -->
    <div class="max-w-6xl mx-auto glass-card rounded-3xl border border-brand-border shadow-2xl bg-brand-card/90 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-brand-border bg-brand-dark/50 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <th class="py-4 px-6 w-16">ID</th>
                        <th class="py-4 px-6">Movie Name</th>
                        <th class="py-4 px-6">Theater</th>
                        <th class="py-4 px-6">Show Date & Time</th>
                        <th class="py-4 px-6">Category</th>
                        <th class="py-4 px-6">Price</th>
                        <th class="py-4 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-border/60 text-xs text-gray-300">

@foreach ($data as $item)


                    <tr class="hover:bg-brand-dark/30 transition-colors">

                        <td class="py-4 px-6 font-mono font-bold text-gray-400">
                            {{ $item->id }}
                        </td>

                        <!-- Movie Name (Relationship se fetch hoga) -->
                        <td class="py-4 px-6 font-bold text-white flex items-center gap-2">
                            <i class="fa-solid fa-film text-brand-500 text-sm"></i>
                            <span>{{$item->movie->Movie_name}}</span>
                        </td>

                        <!-- Theater Name & Location -->
                        <td class="py-4 px-6 font-medium text-gray-300">
                            <div class="font-bold text-white">{{$item->theater->theater_name}}</div>
                            <div class="text-[10px] text-gray-400">{{ $item->theater->location }}</div>
                        </td>

                        <!-- Show Date & Time -->
                        <td class="py-4 px-6 font-mono text-gray-300">
                            <div>{{$item->showdate}}</div>
                            <div class="text-emerald-400 font-semibold">{{ $item->showtime }}</div>
                        </td>

                        <!-- Category -->
                        <td class="py-4 px-6">
                            <span class="inline-block bg-brand-dark border border-brand-border px-2.5 py-1 rounded-lg text-[11px] font-semibold text-gray-300">
                                {{ $item->categories }}
                            </span>
                        </td>

                        <!-- Ticket Price -->
                        <td class="py-4 px-6 font-mono font-bold text-emerald-400">
                            Rs. {{ $item->ticket_price }}
                        </td>

                        <!-- Actions (Edit / Delete) -->
                        <td class="py-4 px-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <!-- Edit Button -->
                                <a href="" class="w-8 h-8 rounded-lg bg-brand-dark hover:bg-brand-border border border-brand-border flex items-center justify-center text-gray-400 hover:text-white transition-all shadow" title="Edit">
                                    <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                </a>

                                <!-- Delete Form & Button -->
                                <form action="{{ route('show.destroy',$item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this showtime?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-8 h-8 rounded-lg bg-brand-dark hover:bg-rose-500/20 border border-brand-border hover:border-rose-500/30 flex items-center justify-center text-gray-400 hover:text-rose-400 transition-all shadow" title="Delete">
                                        <i class="fa-solid fa-trash text-[11px]"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="py-4 px-6 border-t border-brand-border bg-brand-dark/30 flex items-center justify-between text-xs text-gray-400">
            <span>Showing all active showtimes from database</span>
        </div>

    </div>

</main>
@endsection
