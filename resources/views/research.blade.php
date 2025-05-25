@extends('layouts.app')

@section('title', 'Penelitian dan Jurnal')

@section('content')

{{-- Header Section --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Penelitian dan Publikasi</h2>
            <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-200">Karya ilmiah dan penelitian civitas akademik Teknik Sipil Universitas Jenderal Soedirman</p>
        </div>
    </div>
</section>
{{-- End Header Section --}}

{{-- Filter and Search --}}
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6">
        <form action="{{ route('research.index') }}" method="GET">
            <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
                <div class="w-full md:w-1/2">
                    <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                    <select id="tahun" name="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Semua Tahun</option>
                        @foreach($years as $year)
                        <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-1/2">
                    <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topik Penelitian</label>
                    <select id="topic" name="topic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Semua Topik</option>
                        @foreach($topics as $topic)
                        <option value="{{ $topic->slug }}" {{ request('topic') == $topic->slug ? 'selected' : '' }}>{{ $topic->topik }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <div class="flex items-center">   
                    <label for="search" class="sr-only">Cari</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="search" name="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari judul, penulis, atau kata kunci...">
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Cari</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
{{-- End Filter and Search --}}

{{-- Publication List --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">
            Menampilkan {{ $researches->firstItem() ?? 0 }} - {{ $researches->lastItem() ?? 0 }} dari {{ $researches->total() }} publikasi
        </h3>
        
        <div class="border-t border-gray-200 dark:border-gray-700">
            @forelse($researches as $research)
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="{{ route('research.show', $research->id) }}" class="hover:underline">{{ $research->judul }}</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> 
                            {{ $research->users->pluck('name')->join(', ') }}
                        </p>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            {{ Str::limit($research->abstrak, 200) }}
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach($research->topics as $topic)
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                {{ $topic->topik }}
                            </span>
                            @endforeach
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">
                                {{ $research->tahun }}
                            </span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="{{ route('research.show', $research->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="py-6 text-center text-gray-500 dark:text-gray-400">
                Tidak ada penelitian yang ditemukan.
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        <div class="mt-8">
            {{ $researches->withQueryString()->links() }}
        </div>
    </div>
</section>
{{-- End Publication List --}}

{{-- Call to Action --}}
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 dark:text-white">Tertarik untuk berkolaborasi dalam penelitian?</h2>
            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Laboratorium Teknik Sipil Unsoed terbuka untuk kerjasama penelitian dengan berbagai pihak, baik dari kalangan akademisi maupun industri.</p>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Kami</a>
        </div>
    </div>
</section>
{{-- End Call to Action --}}

@endsection