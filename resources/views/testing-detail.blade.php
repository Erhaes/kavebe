@extends('layouts.app')

@section('title', $testing->nama_testing)

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-lg mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('testing.index') }}" class="inline-flex items-center text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Pengujian
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $testing->nama_testing }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Main Content -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                @if($testing->getFirstMediaUrl('foto_pengujian'))
                <img class="w-full h-96 object-cover" 
                     src="{{ $testing->getFirstMediaUrl('foto_pengujian') }}" 
                     alt="{{ $testing->nama_testing }}">
                @endif

                <div class="p-6">
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $testing->nama_testing }}</h1>
                    
                    <!-- Laboratory and Equipment Info -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded dark:bg-blue-900 dark:text-blue-300">
                            {{ $testing->facility->nama_lab }}
                        </span>
                        @if($testing->equipment)
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded dark:bg-green-900 dark:text-green-300">
                            {{ $testing->equipment->nama_alat }}
                        </span>
                        @endif
                    </div>

                    <!-- Testing Details -->
                    <div class="prose max-w-none dark:prose-invert mb-6">
                        {!! Str::of($testing->keterangan)
                            ->replaceMatches('/<p>/', '<p class="mb-4 text-gray-700 dark:text-gray-300">')
                            ->replaceMatches('/<ul>/', '<ul class="list-disc pl-5 mb-4">')
                            ->replaceMatches('/<li>/', '<li class="text-gray-700 dark:text-gray-300">')
                            ->sanitizeHtml() !!}
                    </div>

                    <!-- Testing Information Table -->
                    <div class="overflow-x-auto relative mb-6">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                @if($testing->satuan)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Satuan
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $testing->satuan }}
                                    </td>
                                </tr>
                                @endif
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Harga
                                    </th>
                                    <td class="py-4 px-6">
                                        Rp {{ number_format($testing->harga, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @if($testing->sampel)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Jumlah Sampel
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $testing->sampel }}
                                    </td>
                                </tr>
                                @endif
                                @if($testing->catatan)
                                <tr>
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Catatan
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $testing->catatan }}
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Back Button -->
                    <div class="flex justify-center">
                        <a href="{{ route('testing.index') }}" class="inline-flex items-center text-blue-600 hover:underline">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                            Kembali ke daftar pengujian
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 