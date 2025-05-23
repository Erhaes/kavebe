@extends('layouts.app')

@section('title', 'Tentang')

@section('content')

{{-- About --}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang Kami</h2>
            {!! Str::of($lab->keterangan)
                ->replaceMatches('/<p>/', '<p class="mb-4 font-light text-gray-800 md:text-lg dark:text-gray-200 text-justify">')
                ->sanitizeHtml() !!}
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            @if($lab->getFirstMediaUrl('foto_lab'))
                <img class="w-full rounded-lg" src="{{ $lab->getFirstMediaUrl('foto_lab') }}" alt="Lab Image">
            @endif
        </div>
    </div>
</section>
{{-- End About --}}



{{-- Kata Pengantar --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto text-center max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Kata Pengantar</h2>
            <i>
                {!! Str::of($introduction->pengantar)
                    ->replaceMatches('/<p>/', '<p class="mb-4 font-medium text-gray-800 md:text-lg dark:text-gray-200">')
                    ->sanitizeHtml() !!}
            </i>
            <p class="mb-4 font-extrabold">{{ $introduction->team->nama }}</p>
        </div>
    </div>
  </section>
{{-- End Pengantar --}}


{{-- Visi Misi --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Visi</h2>
            {!! Str::of($lab->visi)
                ->replaceMatches('/<p>/', '<p class="mb-4 font-medium text-gray-800 md:text-lg dark:text-gray-200">')
                ->sanitizeHtml() !!}
        </div>
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Misi</h2>
            {!! Str::of($lab->misi)
                ->replaceMatches('/<p>/', '<p class="mb-4 font-medium text-gray-800 md:text-lg dark:text-gray-200">')
                ->replaceMatches('/<ul>/', '<ul class="list-decimal mb-4 pl-5 font-medium">')
                ->replaceMatches('/<li>/', '<li class="text-gray-800 dark:text-gray-200">')
                ->sanitizeHtml() !!}
        </div>
    </div>
  </section>
{{-- End Visi Misi --}}


{{-- Team --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tim Kami</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-200">Tim yang berdedikasi dalam memberikan pelayanan terbaik di Laboratorium Teknik Sipil</p>
        </div> 
        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($teams as $team)
            <div class="text-center text-gray-500 dark:text-gray-200">
                @if($team->getFirstMediaUrl('foto_anggota'))
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ $team->getFirstMediaUrl('foto_anggota') }}" alt="{{ $team->nama }}">
                @else
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="{{ $team->nama }}">
                @endif
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $team->nama }}
                </h3>
                <p>{{ $team->position->nama_jabatan }}</p>
            </div>
            @endforeach
        </div>  
    </div>
</section>
{{-- End Team --}}

@endsection