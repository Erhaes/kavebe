@extends('layouts.app')

@section('title', $news->judul)

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-lg lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <!-- Kategori dan Tanggal -->
            <div class="flex items-center gap-4 mb-4 text-sm">
                @foreach($news->newscategories as $category)
                <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                    {{ $category->kategori }}
                </span>
                @endforeach
                <span class="text-gray-500">Dipublikasikan: {{ $news->created_at->format('d F Y') }}</span>
            </div>
            
            <!-- Judul Berita -->
            <h1 class="mb-6 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl dark:text-white">{{ $news->judul }}</h1>
            
            <!-- Info Penulis -->
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 dark:bg-gray-700 dark:text-gray-300">
                    <span class="text-lg font-bold">{{ substr($news->user->name, 0, 1) }}</span>
                </div>
                <div class="ml-3">
                    <p class="text-base font-semibold text-gray-900 dark:text-white">{{ $news->user->name }}</p>
                    <p class="text-sm text-gray-500 dark:text-gray-200">{{ $news->user->team ? $news->user->team->jabatan : 'Staff' }}</p>
                </div>
            </div>
            
            <!-- Gambar Utama -->
            @if($news->getFirstMediaUrl('foto_berita'))
            <figure class="mb-8">
                <img class="w-full rounded-lg" src="{{ $news->getFirstMediaUrl('foto_berita') }}" alt="{{ $news->judul }}">
            </figure>
            @endif
            
            <!-- Konten Berita -->
            <article class="mb-4 font-light text-gray-800 dark:text-gray-200 text-justify">
                {!! Str::of($news->konten)
                    ->replaceMatches('/<p>/', '<p class="mb-4">')
                    ->replaceMatches('/<ul>/', '<ul class="list-disc mb-4 pl-5">')
                    ->replaceMatches('/<ol>/', '<ol class="list-decimal mb-4 pl-5">')
                    ->replaceMatches('/<li>/', '<li class="mb-2">')
                    ->replaceMatches('/<h[1-6]>/', '<h$1 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">')
                    ->replaceMatches('/<a /', '<a class="text-blue-600 hover:underline dark:text-blue-400" ')
                    ->replaceMatches('/<img /', '<img class="rounded-lg mb-4" ')
                    ->replaceMatches('/<blockquote>/', '<blockquote class="pl-4 border-l-4 border-gray-300 italic mb-4">')
                    ->sanitizeHtml() !!}
            </article>
            
            <!-- Share Buttons -->
            <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Bagikan artikel ini:</h3>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($news->judul) }}" target="_blank" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($news->judul . ' ' . request()->url()) }}" target="_blank" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.423-.101.827z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Artikel Terkait -->
            @if($relatedNews->isNotEmpty())
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Artikel Terkait</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($relatedNews as $related)
                    <a href="{{ route('news.show', $related->slug) }}" class="block p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{ $related->judul }}</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-200">{{ $related->created_at->format('d F Y') }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Back Button -->
            <div class="mt-8 flex justify-center">
                <a href="{{ route('news.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Kembali ke daftar berita
                </a>
            </div>
        </div>
    </div>
</section>
@endsection