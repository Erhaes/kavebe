@extends('layouts.app')

@section('title', 'Ruangan')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center mb-8">
                <h1 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Laboratorium Transportasi</h1>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Fasilitas pengujian dan penelitian di bidang transportasi dan material jalan</p>
            </div>
            
            <div class="mb-8">
                <img src="{{ asset('/images/Ruang/Lab. Transport.jpeg') }}" class="w-full h-96 object-cover rounded-lg shadow-md" alt="Laboratorium Transportasi">
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Deskripsi Laboratorium</h2>
                <p class="text-gray-500 dark:text-gray-400">
                    Laboratorium Transportasi Teknik Sipil Unsoed menyediakan fasilitas untuk pengujian material perkerasan jalan, 
                    analisis lalu lintas, dan penelitian di bidang transportasi. Laboratorium ini dilengkapi dengan berbagai peralatan modern 
                    untuk mendukung kegiatan praktikum mahasiswa dan layanan pengujian bagi masyarakat dan industri.
                </p>
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Peralatan Laboratorium</h2>
                <p class="text-gray-500 dark:text-gray-400 mb-6">
                    Klik pada gambar peralatan di bawah ini untuk melihat detail dan fungsi masing-masing alat.
                </p>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" x-data="{ showModal: false }">
                    <!-- Alat 1 -->
                    <div>
                        <button type="button" data-modal-target="alat1Modal" data-modal-toggle="alat1Modal" class="w-full">
                            <img class="h-60 w-full object-cover rounded-lg shadow-md hover:opacity-80 transition-opacity" src="{{ asset('/images/1. Uji ekstrak portrai.jpeg') }}" alt="Marshall Test">
                            <p class="mt-2 text-center font-medium text-gray-900 dark:text-white">Alat Uji Ekstrak</p>
                        </button>
                    </div>

                    <!-- Alat 2 -->
                    <div>
                        <button type="button" data-modal-target="alat2Modal" data-modal-toggle="alat2Modal" class="w-full">
                            <img class="h-60 w-full object-cover rounded-lg shadow-md hover:opacity-80 transition-opacity" src="{{ asset('/images/2. Berat jenis coredrill aspal.jpeg') }}" alt="Los Angeles Abrasion">
                            <p class="mt-2 text-center font-medium text-gray-900 dark:text-white">Alat Uji Berat Jenis</p>
                        </button>
                    </div>

                    <!-- Alat 3 -->
                    <div>
                        <button type="button" data-modal-target="alat3Modal" data-modal-toggle="alat3Modal" class="w-full">
                            <img class="h-60 w-full object-cover rounded-lg shadow-md hover:opacity-80 transition-opacity" src="{{ asset('/images/2. Berat jenis coredrill aspal.jpeg') }}" alt="Ductility Test">
                            <p class="mt-2 text-center font-medium text-gray-900 dark:text-white">Alat Uji Core Drill</p>
                        </button>
                    </div>

                    <!-- Alat 4 -->
                    <div>
                        <button type="button" data-modal-target="alat4Modal" data-modal-toggle="alat4Modal" class="w-full">
                            <img class="h-60 w-full object-cover rounded-lg shadow-md hover:opacity-80 transition-opacity" src="{{ asset('/images/4.Uji penetrasi aspal.jpeg') }}" alt="Core Drill">
                            <p class="mt-2 text-center font-medium text-gray-900 dark:text-white">Alat Uji Penetrasi</p>
                        </button>
                    </div>

                    
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('facilities') }}" class="inline-flex items-center text-blue-600 hover:underline">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                    </svg>
                    Kembali ke daftar laboratorium
                </a>
            </div>
        </div>
    </section>

    <!-- Modals for each equipment -->
    <!-- Modal 1 - Marshall Test -->
    <div id="alat1Modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Alat Uji Ekstrak
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="alat1Modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/2">
                            <img class="rounded-lg" src="{{ asset('/images/1. Uji ekstrak portrai.jpeg') }}" alt="Marshall Test">
                        </div>
                        <div class="md:w-1/2">
                            <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Deskripsi</h4>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">
                                Alat uji ekstrak digunakan untuk menganalisis dan menentukan kadar zat tertentu dalam material, terutama aspal dan bahan lainnya yang digunakan dalam konstruksi.
                            </p>
                            {{-- <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Fungsi</h4>
                            <ul class="list-disc pl-5 space-y-2 text-gray-500 dark:text-gray-400">
                                <li>Menentukan stabilitas Marshall campuran aspal</li>
                                <li>Mengukur nilai flow (kelelehan) campuran aspal</li>
                                <li>Menghitung nilai Marshall Quotient (MQ)</li>
                                <li>Evaluasi karakteristik campuran aspal panas</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="alat1Modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 - Marshall Test -->
    <div id="alat2Modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Alat Uji Berat Jenis
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="alat1Modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/2">
                            <img class="rounded-lg" src="{{ asset('/images/2. Berat jenis coredrill aspal.jpeg') }}" alt="Marshall Test">
                        </div>
                        <div class="md:w-1/2">
                            <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Deskripsi</h4>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">
                                peralatan pengujian Kepadatan canggih untuk mengukur sampel padat dan cair dengan sensor presisi tinggi dan fungsi penimbangan otomatis.
                            </p>
                            {{-- <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Fungsi</h4>
                            <ul class="list-disc pl-5 space-y-2 text-gray-500 dark:text-gray-400">
                                <li>Menentukan stabilitas Marshall campuran aspal</li>
                                <li>Mengukur nilai flow (kelelehan) campuran aspal</li>
                                <li>Menghitung nilai Marshall Quotient (MQ)</li>
                                <li>Evaluasi karakteristik campuran aspal panas</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="alat2Modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection