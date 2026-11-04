@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Header & Add Movie Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-7xl mx-auto">
        <div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">All Movies</h1>
            <p class="text-xs text-gray-400 mt-0.5">Manage your movie library, posters, and trailers</p>
        </div>
        <a href="{{ route('addnewmovies') }}" class="inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 text-white px-5 py-2.5 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all self-start sm:self-auto">
            <i class="fa-solid fa-plus"></i> Add New Movie
        </a>
    </div>

    <!-- Table Card Container -->
    <div class="max-w-7xl mx-auto glass-card rounded-3xl border border-brand-border shadow-2xl bg-brand-card/90 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-brand-border bg-brand-dark/50 text-[11px] font-bold text-gray-400 uppercase tracking-wider">
                        <th class="py-4 px-6 w-16">ID</th>
                        <th class="py-4 px-6">Poster</th>
                        <th class="py-4 px-6">Movie Name</th>
                        <th class="py-4 px-6">Genre</th>
                        <th class="py-4 px-6">Release Date</th>
                        <th class="py-4 px-6">Trailer Video</th>
                        <th class="py-4 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-border/60 text-xs text-gray-300">

                    @foreach ($data as $item)
                    <tr class="hover:bg-brand-dark/30 transition-colors">

                        <!-- Movie ID -->
                        <td class="py-3 px-6 font-mono font-bold text-gray-400">
                            {{ $item->id }}
                        </td>

                        <!-- Poster Preview -->
                        <td class="py-3 px-6">
                            <div class="w-10 h-14 rounded-lg bg-brand-dark border border-brand-border overflow-hidden flex-shrink-0 shadow">
                                <img src="{{ asset('storage/poster_folder/'.$item->Poster) }}" alt="Poster" class="w-full h-full object-cover" onerror="this.src='https://placehold.co/200x300/16181f/ffffff?text=Poster'">
                            </div>
                        </td>

                        <!-- Movie Name -->
                        <td class="py-3 px-6 font-bold text-white">
                            {{ $item->Movie_name }}
                        </td>

                        <!-- Genre Badge -->
                        <td class="py-3 px-6">
                            <span class="inline-block bg-brand-500/10 text-brand-500 border border-brand-500/20 px-2.5 py-1 rounded-full text-[10px] font-bold">
                                {{ $item->Genre }}
                            </span>
                        </td>

                        <!-- Release Date -->
                        <td class="py-3 px-6 font-medium text-gray-300">
                            {{ $item->Release_date }}
                        </td>

                        <!-- Direct HTML5 Video Tag -->
                        <td class="py-3 px-6">
                            <div class="w-36 h-20 rounded-xl bg-black border border-brand-border overflow-hidden shadow">
                                <video controls class="w-full h-full object-cover">
                                    <source src="{{ asset('storage/trailer_folder/'.$item->Trailer) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </td>

                        <!-- Actions (Edit / Delete) -->
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <!-- Edit Button -->
                                <a href="{{ route('movie.edit',$item->id) }}" class="w-8 h-8 rounded-lg bg-brand-dark hover:bg-brand-border border border-brand-border flex items-center justify-center text-gray-400 hover:text-white transition-all shadow" title="Edit">
                                    <i class="fa-solid fa-pen-to-square text-[11px]"></i>
                                </a>
                                <!-- Delete Button -->
                                <form action="{{ route('movie.destroy',$item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?');">
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

        <!-- Pagination / Footer Info -->
        <div class="py-4 px-6 border-t border-brand-border bg-brand-dark/30 flex items-center justify-between text-xs text-gray-400">
            <span>Showing movies list from database</span>
        </div>

    </div>

</main>
@endsection
