@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Fasilitas</h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach($facilities as $facility)
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('facilities.detail', $facility->slug) }}">
                        @if($facility->getFirstMediaUrl('foto_fasilitas'))
                            <img src="{{ $facility->getFirstMediaUrl('foto_fasilitas') }}" 
                                class="w-full h-75 object-cover rounded-2xl mb-5" 
                                alt="{{ $facility->nama_lab }}">
                        @endif
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $facility->nama_lab }}
                        </h2>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
