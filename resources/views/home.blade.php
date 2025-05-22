@extends('layouts.app')

@section('title', 'Home')

@section('content')
{{-- hero section --}}
<section class="relative bg-white dark:bg-gray-900">
    @if($infolab->getFirstMediaUrl('videolab'))
    <div class="absolute inset-0 overflow-hidden z-0">
        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ $infolab->getFirstMediaUrl('videolab') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>
    @endif
    <div class="relative z-10 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl {{ $infolab->getFirstMediaUrl('videolab') ? 'text-white' : 'dark:text-white' }}">Laboratorium Teknik Sipil</h1>
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl {{ $infolab->getFirstMediaUrl('videolab') ? 'text-white' : 'dark:text-white' }}">Universitas Jenderal Soedirman</h1>
        {{-- <p class="mb-8 text-lg font-normal text-gray-800 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-200">Kami melayani pengujian bahan bangunan serta standar bangunan menggunakan alat -alat yang tersertifikasi untuk semua kalangan.</p> --}}
        <p class="mb-8 text-lg font-normal text-gray-800 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-200">
            {{ $infolab->cta ?? 'Kami melayani pengujian bahan bangunan serta standar bangunan menggunakan alat -alat yang tersertifikasi untuk semua kalangan.' }}
        </p>
        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Pesan Pengujian
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" id="openVideoModal" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                Tonton video
            </a>  
        </div>
    </div>
</section>
{{-- End hero --}}

{{-- About --}}
<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden rounded-2xl" src="{{ $infolab->getFirstMediaUrl('foto_lab') }}" alt="dashboard image">
        <img class="w-full hidden dark:block rounded-2xl" src="{{ $infolab->getFirstMediaUrl('foto_lab') }}" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang Kami</h2>
            <div class="mb-6 font-light text-gray-800 md:text-lg dark:text-gray-200 text-justify">
                {!! Str::of($infolab->keterangan)
                    ->before('</p>')
                    ->append('</p>')
                    ->sanitizeHtml() !!}
            </div>
            <a href="{{ route('profile') }}" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Selengkapnya
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</section>
{{-- End About --}}

{{-- feature --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto text-center max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Keunggulan</h2>
            {{-- <p class="text-gray-800 sm:text-xl dark:text-gray-200">Keunggulan kami.</p> --}}
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-12 md:space-y-0">
            <div class="flex flex-col items-center text-center">
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Tenaga Berpengalaman</h3>
                <p class="text-gray-800 dark:text-gray-200">Pengujian dilakukan oleh tenaga ahli yang berpengalaman dan profesional dalam bidangnya.</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Kalibrasi Alat Rutin</h3>
                <p class="text-gray-800 dark:text-gray-200">Alat pengujian dikalibrasi setiap tahun untuk memastikan keakuratan hasil pengujian.</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3v2h2v4h-2v2h4V3h-4z" />
                        <path d="M8 3H4v8h4V7h2V5H8V3z" />
                        <path d="M6 13h8v4H6z" />
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Melayani 60 Jenis Pengujian</h3>
                <p class="text-gray-800 dark:text-gray-200">Kami melayani hingga 60 jenis pengujian yang berbeda.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Harga Bersaing</h3>
                <p class="text-gray-800 dark:text-gray-200">Harga bersaing dan hasil sudah teruji. Dapat diskon bila membeli pengujian secara paket.</p>
            </div>
            
        </div>
    </div>
  </section>
  {{-- End Feature --}}

  {{-- Akreditasi --}}
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Akreditasi & Sertifikasi</h2>
            <p class="font-light text-gray-800 sm:text-xl dark:text-gray-200 mb-6">Akreditasi dan Sertifikasi yang telah diperoleh Laboratorium Teknik SIpil Unsoed hingga saat ini.</p>
        </div> 
        <div class="grid gap-8 lg:gap-12
            @if($hitungsertif == 1) 
                grid-cols-1 max-w-md mx-auto
            @elseif($hitungsertif == 2) 
                sm:grid-cols-2
            @elseif($hitungsertif == 3) 
                sm:grid-cols-1 md:grid-cols-3
            @elseif($hitungsertif >= 4) 
                sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4
            @endif">
            @foreach ($sertifikasis as $sertifikasi)
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 p-6 border border-gray-200 dark:border-gray-700 flex flex-col h-full transform hover:-translate-y-1">
                    <div class="flex justify-center items-center mb-5 flex-grow">
                        <img class="w-40 h-40 object-contain rounded-md border-2 border-gray-300 dark:border-gray-600 shadow-md hover:border-blue-500 dark:hover:border-blue-400 transition-all duration-300" src="{{ $sertifikasi->getFirstMediaUrl('foto_sertifikat') }}" alt="{{ $sertifikasi->lembaga }}">
                    </div>
                    <h3 class="mb-3 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $sertifikasi->lembaga }}
                    </h3>
                    <a href="{{ $sertifikasi->getFirstMediaUrl('file_sertifikat') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-colors duration-200 mt-auto">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Unduh Sertifikat
                    </a>
                </div>
            @endforeach
        </div>
    </div>
  </section>
  {{-- End Akreditasi --}}

  {{-- Kontak section --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto text-center max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Kontak Kami</h2>
            <p class="text-gray-800 sm:text-xl dark:text-gray-200">Hubungi kami untuk informasi pengujian atau kerjasama.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Informasi Kontak</h3>
                
                @if(count($contacts->where('sosial_media', 0)) > 0)
                    @foreach($contacts->where('sosial_media', 0) as $contact)
                    <div class="flex items-start mb-4">
                        <div class="flex-shrink-0">
                            {!! preg_replace('/<svg[^>]*class="[^"]*"[^>]*/', '<svg class="w-5 h-5 text-primary-600 dark:text-primary-300"', Str::of($contact->icon)->sanitizeHtml()) !!}
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-800 dark:text-gray-200">
                                {!! Str::of($contact->kontak)->sanitizeHtml() !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="flex items-start mb-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-primary-600 dark:text-primary-300">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-800 dark:text-gray-200">
                                Jl. Mayjend Sungkono KM 5, Blater, Purbalingga, Jawa Tengah 53371
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start mb-4">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-800 dark:text-gray-200">
                                0813 9313 3408
                            </p>
                        </div>
                    </div>
                @endif

                <div class="mt-6">
                    <h4 class="text-lg font-medium mb-2 text-gray-900 dark:text-white">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        @foreach($contacts as $contact)
                            @if($contact->sosial_media)
                                <a href="{{ $contact->link }}" class="text-gray-800 hover:text-gray-900 dark:hover:text-white">
                                    {!! preg_replace('/<svg[^>]*class="[^"]*"[^>]*/', '<svg class="w-5 h-5"', Str::of($contact->icon)->sanitizeHtml()) !!}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="h-96 rounded-lg overflow-hidden">
                {!! Str::of($infolab->link_maps)->sanitizeHtml() !!}
            </div>
        </div>
    </div>
</section>
{{-- End Kontak --}}


<!-- Modal Video -->
<div id="videoModal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
    <div class="relative top-20 mx-auto shadow-lg rounded-md bg-white max-w-3xl">
        
        {{-- <!-- Modal header -->
        <div class="flex justify-between items-center bg-primary-700 text-white px-4 py-2 rounded-t-md">
            <h3 class="text-xl font-semibold">Video Laboratorium Teknik Sipil UNSOED</h3>
            <button id="closeVideoModal" class="text-white hover:bg-red-600 hover:rounded-lg p-1">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div> --}}
        
        <!-- Modal body -->
        <div class="p-4 dark:bg-gray-900">
            <div class="aspect-w-16 aspect-h-9">
                <button id="closeVideoModal" class="text-white bg-red-600 hover:bg-red-600 hover:rounded-lg p-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="youtubeVideo" class="w-full">
                    <!-- YouTube video akan dimasukkan di sini melalui JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk modal video -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoModal = document.getElementById('videoModal');
        const openVideoModal = document.getElementById('openVideoModal');
        const closeVideoModal = document.getElementById('closeVideoModal');
        const youtubeVideo = document.getElementById('youtubeVideo');
        
        // Ganti VIDEO_ID dengan ID video YouTube yang ingin ditampilkan
        const youtubeVideoId = 'GANTI_DENGAN_ID_VIDEO_YOUTUBE_ANDA';
        
        openVideoModal.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Masukkan iframe YouTube ke dalam modal
            youtubeVideo.innerHTML = `
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QMn3g51K_S0?si=RWIJILwXHY9P58qf" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            `;
            
            // Tampilkan modal
            videoModal.classList.remove('hidden');
        });
        
        closeVideoModal.addEventListener('click', function() {
            // Hapus iframe YouTube saat modal ditutup untuk menghentikan video
            youtubeVideo.innerHTML = '';
            
            // Sembunyikan modal
            videoModal.classList.add('hidden');
        });
        
        // Tutup modal jika user klik di luar modal
        videoModal.addEventListener('click', function(e) {
            if (e.target === videoModal) {
                youtubeVideo.innerHTML = '';
                videoModal.classList.add('hidden');
            }
        });
        
        // Tutup modal jika user tekan tombol Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !videoModal.classList.contains('hidden')) {
                youtubeVideo.innerHTML = '';
                videoModal.classList.add('hidden');
            }
        });
    });
</script>

@endsection
