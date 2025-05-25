@extends('layouts.app')

@section('title', $research->judul)

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-lg mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('research.index') }}" class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Penelitian
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Detail Penelitian</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Main Content -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $research->judul }}</h1>
                    
                    <!-- Research Info -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($research->topics as $topic)
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded dark:bg-blue-900 dark:text-blue-300">
                            {{ $topic->topik }}
                        </span>
                        @endforeach
                        <span class="bg-purple-100 text-purple-800 text-sm font-medium px-3 py-1 rounded dark:bg-purple-900 dark:text-purple-300">
                            {{ $research->tahun }}
                        </span>
                    </div>

                    <!-- Authors -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Penulis</h2>
                        <div class="flex flex-wrap gap-4">
                            @foreach($research->users as $author)
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-800 dark:text-blue-300 text-sm font-bold">
                                        {{ substr($author->name, 0, 1) }}
                                    </span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $author->name }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Abstract -->
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Abstrak</h2>
                        <div class="prose max-w-none dark:prose-invert">
                            <p class="text-gray-700 dark:text-gray-300">
                                {{ $research->abstrak }}
                            </p>
                        </div>
                    </div>

                    <!-- Link -->
                    @if($research->link)
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Link Publikasi</h2>
                        <a href="{{ $research->link }}" target="_blank" class="text-blue-600 hover:underline dark:text-blue-500">
                            {{ $research->link }}
                        </a>
                    </div>
                    @endif

                    <!-- Back Button -->
                    <div class="flex justify-center">
                        <a href="{{ route('research.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                            Kembali ke daftar penelitian
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 