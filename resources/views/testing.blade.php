@extends('layouts.app')

@section('title', 'Pengujian Laboratorium')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-64 bg-gray-100 dark:bg-gray-800 p-4">
            <h5 class="font-bold text-gray-800 dark:text-white mb-4">Laboratorium</h5>
            <ul>
                <li class="mb-2">
                    <button id="btn-lab-transport" class="w-full text-left py-2 px-3 rounded bg-blue-600 text-white flex items-center" onclick="switchLab('lab-transport')">
                        {{-- <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg> --}}
                        Laboratorium Transportasi
                    </button>
                </li>
                <li>
                    <button id="btn-lab-hidro" class="w-full text-left py-2 px-3 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex items-center text-gray-800 dark:text-white" onclick="switchLab('lab-hidro')">
                        {{-- <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg> --}}
                        Laboratorium Hidroteknik
                    </button>
                </li>
                <li>
                    <button id="btn-lab-struktur" class="w-full text-left py-2 px-3 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex items-center text-gray-800 dark:text-white" onclick="switchLab('lab-struktur')">
                        {{-- <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg> --}}
                        Laboratorium Struktur dan Bahan Bangunan
                    </button>
                </li>
                <li>
                    <button id="btn-lab-tanah" class="w-full text-left py-2 px-3 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex items-center text-gray-800 dark:text-white" onclick="switchLab('lab-tanah')">
                        {{-- <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg> --}}
                        Laboratorium Mekanika Tanah
                    </button>
                </li>
                <li>
                    <button id="btn-lab-peta" class="w-full text-left py-2 px-3 rounded hover:bg-gray-200 dark:hover:bg-gray-700 flex items-center text-gray-800 dark:text-white" onclick="switchLab('lab-peta')">
                        {{-- <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg> --}}
                        Laboratorium Pemetaan
                    </button>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 bg-white dark:bg-gray-900">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Pengujian Laboratorium</h1>

            <!-- Lab Transport Content -->
            <div id="lab-transport" class="lab-content">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Pengujian Laboratorium Transportasi</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">
                        Laboratorium Transportasi menyediakan berbagai jenis pengujian untuk material perkerasan jalan dan analisis transportasi, termasuk evaluasi kualitas aspal dan agregat.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Uji Ekstraksi Aspal -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/1. Uji ekstrak portrai.jpeg') }}" class="w-full h-48 object-cover" alt="Uji Ekstraksi Aspal">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Uji Ekstraksi Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Proses pemisahan aspal dari campuran menggunakan pelarut untuk analisis kadar aspal.</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian1Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Uji Berat Jenis Core Drill Aspal -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/2. Berat jenis coredrill aspal.jpeg') }}" class="w-full h-48 object-cover" alt="Uji Berat Jenis Core Drill Aspal">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Uji Berat Jenis Core Drill Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan berat jenis lapisan perkerasan aspal di lapangan.</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian2Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Core Drill Aspal -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/3. coredrill aspal.jpeg') }}" class="w-full h-48 object-cover" alt="Core Drill Aspal">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Core Drill Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Metode pengambilan sampel inti dari perkerasan jalan untuk analisis laboratorium.</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian3Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Lab Hidroteknik Content -->
            <div id="lab-hidro" class="lab-content">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Pengujian Laboratorium Transportasi</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">
                        Laboratorium Transportasi menyediakan berbagai jenis pengujian untuk material perkerasan jalan dan analisis transportasi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Pengujian 1 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/marshall-stability.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Marshall">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Uji Ekstraksi Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan stabilitas dan flow campuran aspal</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian1Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Pengujian 2 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/abrasi.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Abrasi">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Pengujian Abrasi Agregat</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian ketahanan agregat terhadap keausan menggunakan mesin Los Angeles</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian2Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lab Struktur dan Bahan Bangunan Content -->
            <div id="lab-struktur" class="lab-content hidden">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Pengujian Laboratorium Struktur</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">
                        Laboratorium Struktur menyediakan berbagai jenis pengujian untuk material konstruksi dan analisis struktural.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Pengujian 3 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/kuat-tekan-beton.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Kuat Tekan Beton">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Pengujian Kuat Tekan Beton</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan kekuatan tekan beton</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian3Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Pengujian 4 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/tarik-baja.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Tarik Baja">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Pengujian Tarik Baja</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan kekuatan tarik dan karakteristik baja tulangan</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian4Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Lab Mekanika Tanah Content -->
            <div id="lab-tanah" class="lab-content">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Pengujian Laboratorium Transportasi</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">
                        Laboratorium Transportasi menyediakan berbagai jenis pengujian untuk material perkerasan jalan dan analisis transportasi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Pengujian 1 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/marshall-stability.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Marshall">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Uji Ekstraksi Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan stabilitas dan flow campuran aspal</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian1Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Pengujian 2 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/abrasi.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Abrasi">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Pengujian Abrasi Agregat</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian ketahanan agregat terhadap keausan menggunakan mesin Los Angeles</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian2Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lab Pemetaan Content -->
            <div id="lab-peta" class="lab-content">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Pengujian Laboratorium Transportasi</h2>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">
                        Laboratorium Transportasi menyediakan berbagai jenis pengujian untuk material perkerasan jalan dan analisis transportasi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Pengujian 1 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/marshall-stability.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Marshall">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Uji Ekstraksi Aspal</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian untuk menentukan stabilitas dan flow campuran aspal</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian1Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>

                    <!-- Pengujian 2 -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('/images/abrasi.jpg') }}" class="w-full h-48 object-cover" alt="Pengujian Abrasi">
                        <div class="p-4">
                            <h5 class="font-bold text-lg mb-2 text-gray-900 dark:text-white">Pengujian Abrasi Agregat</h5>
                            <p class="text-gray-500 dark:text-gray-400 mb-4">Pengujian ketahanan agregat terhadap keausan menggunakan mesin Los Angeles</p>
                            <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded" onclick="openModal('pengujian2Modal')">
                                Detail Pengujian
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </div>
    </div>

    <!-- Modal 1 - Uji Ekstraksi Aspal -->
    <div id="pengujian1Modal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 rounded-lg max-w-4xl w-full mx-4">
            <div class="flex justify-between items-center border-b dark:border-gray-700 px-6 py-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Uji Ekstraksi Aspal</h3>
                <button type="button" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" onclick="closeModal('pengujian1Modal')">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
            </div>
            <div class="p-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/2">
                        <img class="rounded-lg w-full" src="{{ asset('/images/1. Uji ekstrak portrai.jpeg') }}" alt="Uji Ekstraksi Aspal">
                    </div>
                    <div class="md:w-1/2">
                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Deskripsi Pengujian</h4>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">
                            Uji ekstraksi aspal adalah proses pemisahan aspal dari campuran perkerasan jalan menggunakan pelarut tertentu. Tujuan pengujian ini adalah untuk mengetahui kadar aspal dalam campuran serta karakteristik komponen penyusunnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 flex justify-end">
                <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded mr-2" onclick="closeModal('pengujian1Modal')">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Modal 2 - Uji Berat Jenis Core Drill Aspal -->
    <div id="pengujian2Modal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 rounded-lg max-w-4xl w-full mx-4">
            <div class="flex justify-between items-center border-b dark:border-gray-700 px-6 py-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Uji Berat Jenis Core Drill Aspal</h3>
                <button type="button" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" onclick="closeModal('pengujian2Modal')">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
            </div>
            <div class="p-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/2">
                        <img class="rounded-lg w-full" src="{{ asset('/images/2. Berat jenis coredrill aspal.jpeg') }}" alt="Uji Berat Jenis Core Drill Aspal">
                    </div>
                    <div class="md:w-1/2">
                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Deskripsi Pengujian</h4>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">
                            Pengujian ini bertujuan untuk menentukan berat jenis inti aspal yang diambil dari lapangan. Berat jenis tersebut berfungsi sebagai parameter untuk mengevaluasi kepadatan dan kualitas lapisan perkerasan jalan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 flex justify-end">
                <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded mr-2" onclick="closeModal('pengujian2Modal')">Tutup</button>
            </div>
        </div>
    </div>

    <!-- Modal 3 - Core Drill Aspal -->
    <div id="pengujian3Modal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 rounded-lg max-w-4xl w-full mx-4">
            <div class="flex justify-between items-center border-b dark:border-gray-700 px-6 py-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Core Drill Aspal</h3>
                <button type="button" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" onclick="closeModal('pengujian3Modal')">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
            </div>
            <div class="p-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="md:w-1/2">
                        <img class="rounded-lg w-full" src="{{ asset('/images/3. coredrill aspal.jpeg') }}" alt="Core Drill Aspal">
                    </div>
                    <div class="md:w-1/2">
                        <h4 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Deskripsi Pengujian</h4>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">
                            Core drill aspal merupakan teknik pengambilan sampel berupa inti dari lapisan perkerasan jalan. Sampel ini kemudian dianalisis di laboratorium untuk mengevaluasi kondisi struktural dan kinerja perkerasan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 flex justify-end">
                <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded mr-2" onclick="closeModal('pengujian3Modal')">Tutup</button>
            </div>
        </div>
    </div>


    <!-- Add more modals for pengujian3Modal and pengujian4Modal with similar structure -->
    <div id="pengujian3Modal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
        <!-- Modal content for lab struktur pengujian 1 -->
    </div>

    <div id="pengujian4Modal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
        <!-- Modal content for lab struktur pengujian 2 -->
    </div>

    <script>
        function switchLab(labId) {
            // Hide all lab content
            document.querySelectorAll('.lab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected lab content
            document.getElementById(labId).classList.remove('hidden');
            
            // Update button styles
            document.querySelectorAll('[id^="btn-"]').forEach(btn => {
                btn.classList.remove('bg-blue-600', 'text-white');
                btn.classList.add('hover:bg-gray-200', 'dark:hover:bg-gray-700', 'text-gray-800', 'dark:text-white');
            });
            
            document.getElementById('btn-' + labId).classList.add('bg-blue-600', 'text-white');
            document.getElementById('btn-' + labId).classList.remove('hover:bg-gray-200', 'dark:hover:bg-gray-700', 'text-gray-800', 'dark:text-white');
        }
        
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
        
        // Close modal when clicking outside of modal content
        document.querySelectorAll('[id$="Modal"]').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
    </script>
</section>
@endsection