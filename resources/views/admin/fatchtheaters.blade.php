@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Header & Add Theater Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-6xl mx-auto">
        <div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">All Theaters</h1>
            <p class="text-xs text-gray-400 mt-0.5">Manage cinema halls, locations, and seating capacities</p>
        </div>
        <a href="{{ route('addnewTeater') }}" class="inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all self-start sm:self-auto">
            <i class="fa-solid fa-plus"></i> Add New Theater
        </a>
    </div>

    <!-- Table Card Container -->
    <div class="max-w-6xl mx-auto glass-card rounded-3xl border border-brand-border shadow-2xl bg-brand-card/90 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-brand-border bg-brand-dark/50 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <th class="py-4 px-6 w-16">ID</th>
                        <th class="py-4 px-6">Theater Name</th>
                        <th class="py-4 px-6">Location</th>
                        <th class="py-4 px-6">Total Seats</th>
                        <th class="py-4 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-border/60 text-xs text-gray-300">
                    @foreach ($data as $item)


                    <tr class="hover:bg-brand-dark/30 transition-colors">

                        <!-- ID -->
                        <td class="py-4 px-6 font-mono font-bold text-gray-400">
                            {{ $item->id }}

                        </td>

                        <!-- Theater Name -->
                        <td class="py-4 px-6 font-bold text-white flex items-center gap-2">
                            <i class="fa-solid fa-building text-brand-500 text-sm"></i>
                            <span>{{$item->theater_name}}</span>
                        </td>

                        <!-- Location -->
                        <td class="py-4 px-6 font-medium text-gray-300">
                            <i class="fa-solid fa-location-dot text-gray-500 mr-1.5"></i>
                            {{$item->location}}
                        </td>

                        <!-- Total Seats -->
                        <td class="py-4 px-6">
                            <span class="inline-block bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-3 py-1 rounded-full text-[11px] font-bold font-mono">
                                <i class="fa-solid fa-chair mr-1">

                                </i>
                                {{$item->total_seats}}
                                Seats
                            </span>
                        </td>

                        <!-- Actions (Edit / Delete) -->
                        <td class="py-4 px-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <!-- Edit Button -->
                                <a href="{{ route('theater.edit',$item->id) }}" class="w-8 h-8 rounded-lg bg-brand-dark hover:bg-brand-border border border-brand-border flex items-center justify-center text-gray-400 hover:text-white transition-all shadow" title="Edit">
                                    <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                </a>

                                <!-- Delete Form & Button -->
                                <form action="{{ route('theater.destroy',$item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this theater?');">
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

        <!-- Table Footer / Pagination -->
        <div class="py-4 px-6 border-t border-brand-border bg-brand-dark/30 flex items-center justify-between text-xs text-gray-400">
            <span>Showing theaters list from database</span>

        </div>

    </div>

</main>
@endsection
