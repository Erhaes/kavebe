@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita Terkini</h2>
        </div>

        <!-- Search and Filter -->
        <div class="mb-8">
            <form action="{{ route('news.index') }}" method="GET" class="space-y-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/3">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->kategori }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full md:w-2/3">
                        <label for="search" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cari Berita</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="text" id="search" name="search" value="{{ request('search') }}" class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari judul berita...">
                            <button type="submit" class="absolute right-2.5 bottom-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- News Grid -->
        <div class="grid gap-8 lg:grid-cols-2">
            @forelse($news as $item)
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <div class="flex flex-wrap gap-2">
                        @foreach($item->newscategories as $category)
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $category->kategori }}
                        </span>
                        @endforeach
                    </div>
                    <span class="text-sm">{{ $item->created_at->diffForHumans() }}</span>
                </div>
                @if($item->getFirstMediaUrl('foto_berita'))
                <img src="{{ $item->getFirstMediaUrl('foto_berita') }}" class="w-full h-56 object-cover rounded-2xl mb-3" alt="{{ $item->judul }}">
                @endif
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="{{ route('news.show', $item->slug) }}">{{ $item->judul }}</a>
                </h2>
                <div class="mb-5 font-light text-gray-800 dark:text-gray-200 text-justify line-clamp-3">
                    {!! Str::of($item->konten)->limit(200)->sanitizeHtml() !!}
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span class="font-medium dark:text-white">
                            {{ $item->user->name }}
                        </span>
                    </div>
                    <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Baca selengkapnya
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @empty
            <div class="lg:col-span-2 text-center py-8">
                <p class="text-gray-500 dark:text-gray-400">Tidak ada berita yang ditemukan.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $news->withQueryString()->links() }}
        </div>
    </div>
</section>
@endsection