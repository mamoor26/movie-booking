
@extends('admin.sidebar')

@section('admin')
<main class="flex-1 overflow-y-auto p-4 sm:p-8 space-y-6">

    <!-- Top Header Title & Back Button -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 max-w-5xl mx-auto">

        <a href="javascript:history.back()" class="inline-flex items-center justify-center gap-2 bg-brand-card hover:bg-brand-border/40 text-gray-300 hover:text-white px-4 py-2.5 rounded-xl text-xs font-semibold border border-brand-border transition-all self-start sm:self-auto">
            <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>

    <!-- Main Content Card Container -->
    <div class="max-w-5xl mx-auto glass-card rounded-3xl p-6 sm:p-10 border border-brand-border shadow-2xl bg-brand-card/90">

        <form action="{{ route('movie.update',$info->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Row 1: Movie Title & Genre -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Movie Title -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Movie Title <span class="text-brand-500">*</span>
                    </label>
                    <input type="text" name="Movie_name" value="{{ $info->Movie_name }}" placeholder="Enter movie title" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all placeholder-gray-500 shadow-inner">
                </div>

                <!-- Genre -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Genre <span class="text-brand-500">*</span>
                    </label>
                    <div class="relative">
                        <select name="Genre" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all appearance-none cursor-pointer">
                            <option value="" selected>Select genre</option>
                            <option value="Action" {{ $info->Genre=='Action'?'selected':'' }}>Action</option>
                            <option value="Sci-Fi" {{ $info->Genre=='Sci-Fi'?'selected':'' }}>Sci-Fi</option>
                            <option value="Thriller" {{ $info->Genre=='Thiriller'?'selected':'' }}>Thriller</option>
                            <option value="Adventure" {{ $info->Genre=='Adventure'?'selected':'' }}>Adventure</option>
                            <option value="Drama" {{ $info->Genre=='Drama'?'selected':'' }}>Drama</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Row 2: Poster URL & Trailer Link -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Poster Image URL -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Poster Image <span class="text-brand-500">*</span>
                    </label>
                    <input type="file" name="Poster" value="{{ $info->Poster }}"  required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all placeholder-gray-500 shadow-inner file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-brand-600 file:text-white hover:file:bg-brand-700 cursor-pointer">
                </div>

                <!-- Trailer Link -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Trailer Video <span class="text-brand-500">*</span>
                    </label>
                    <input type="file" name="Trailer" value="{{ $info->Trailer}}" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all placeholder-gray-500 shadow-inner file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-brand-600 file:text-white hover:file:bg-brand-700 cursor-pointer">
                </div>
            </div>

            <!-- Row 3: Release Date -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-wider text-gray-300">
                        Release Date <span class="text-brand-500">*</span>
                    </label>
                    <input type="date" name="Release_date" value="{{ $info->Release_date }}" required class="w-full bg-brand-dark/90 text-xs text-white px-4 py-3.5 rounded-xl border border-brand-border focus:border-brand-600 focus:outline-none transition-all shadow-inner">
                </div>
            </div>

            <!-- Form Action Footer Buttons -->
            <div class="pt-6 border-t border-brand-border/60 flex items-center justify-end gap-3">
                <a href="javascript:history.back()" class="px-6 py-3 rounded-xl text-xs font-semibold text-gray-400 hover:text-white hover:bg-brand-border/40 transition-all">
                    Cancel
                </a>
                <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-3 rounded-xl text-xs font-bold shadow-lg shadow-brand-600/30 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-cloud-arrow-up"></i> Update Movie
                </button>
            </div>

        </form>
    </div>

</main>
@endsection
