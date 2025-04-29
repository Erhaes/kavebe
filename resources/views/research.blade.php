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
        <div class="flex flex-col md:flex-row justify-between gap-4 mb-6">
            <div class="w-full md:w-1/3">
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                <select id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Semua Tahun</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="w-full md:w-1/3">
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Semua Kategori</option>
                    <option value="jurnal">Jurnal</option>
                    <option value="penelitian">Penelitian</option>
                    <option value="konferensi">Prosiding Konferensi</option>
                    <option value="buku">Buku</option>
                </select>
            </div>
            <div class="w-full md:w-1/3">
                <label for="bidang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bidang</label>
                <select id="bidang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Semua Bidang</option>
                    <option value="struktur">Struktur dan Bahan Bangunan</option>
                    <option value="geoteknik">Hidroteknik</option>
                    <option value="transportasi">Transportasi</option>
                    <option value="keairan">Mekanika Tanah</option>
                    <option value="lingkungan">Pemetaan</option>
                </select>
            </div>
        </div>
        <div class="mb-6">
            <form class="flex items-center">   
                <label for="simple-search" class="sr-only">Cari</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari judul, penulis, atau kata kunci..." required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Cari</span>
                </button>
            </form>
        </div>
    </div>
</section>
{{-- End Filter and Search --}}

{{-- Publication List --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Menampilkan 1 dari 1 publikasi</h3>
        
        <div class="border-t border-gray-200 dark:border-gray-700">
            <!-- Publication Item 1 -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tempora.</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Penulis 1, Penulis 2, Penulis 3
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Teknik Sipil Indonesia, Vol. 8, No. 2, 2024
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Transportasi</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2024</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tempora.</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Penulis 1, Penulis 2, Penulis 3
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Teknik Sipil Indonesia, Vol. 8, No. 2, 2024
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Transportasi</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2024</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tempora.</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Penulis 1, Penulis 2, Penulis 3
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Teknik Sipil Indonesia, Vol. 8, No. 2, 2024
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Transportasi</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2024</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, tempora.</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Penulis 1, Penulis 2, Penulis 3
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Teknik Sipil Indonesia, Vol. 8, No. 2, 2024
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Transportasi</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2024</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            {{-- <!-- Publication Item 2 -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Studi Eksperimental Penggunaan Material Daur Ulang pada Beton Ramah Lingkungan</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Dr. Yanuar Haryanto, Arnie Widyaningrum, S.T., M.T., Nor Intang Setyo H., S.T., M.T.
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Journal of Sustainable Civil Engineering, Vol. 5, No. 3, 2023
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Struktur dan Bahan Bangunan</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2023</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Publication Item 3 -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Evaluasi Kinerja Sistem Drainase Perkotaan dengan Pendekatan Hidrologi Berkelanjutan</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Dr. Purwanto Bekti Santoso, S.T., M.T., Teguh Haris Santoso, S.T., M.Eng.
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Prosiding Konferensi Nasional Teknik Sipil ke-17, 2023
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Konferensi</span>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">Teknik Keairan</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2023</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Publication Item 4 -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Optimasi Biaya dan Waktu pada Proyek Konstruksi Menggunakan Metode Lean Construction</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Dr. Amalia Nur Adiningrum, S.T., M.T., Dani Nugroho Saputra, S.Pd.T, M.Eng.
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Manajemen Konstruksi, Vol. 12, No. 1, 2024
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">Manajemen Konstruksi</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2024</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Publication Item 5 -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white">
                            <a href="#" class="hover:underline">Analisis Stabilitas Lereng pada Daerah Rawan Longsor di Kabupaten Banyumas</a>
                        </h4>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Penulis:</span> Dr. Yanto, S.T., M.Eng., Arwan Apriyono, S.T., M.Eng.
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            <span class="font-medium">Publikasi:</span> Jurnal Geoteknik Indonesia, Vol. 15, No. 3, 2022
                        </p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Jurnal</span>
                            <span class="bg-pink-100 text-pink-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300">Geoteknik</span>
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">2022</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        
        <!-- Pagination -->
        <div class="flex flex-col items-center mt-8">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Menampilkan <span class="font-semibold text-gray-900 dark:text-white">1</span> sampai <span class="font-semibold text-gray-900 dark:text-white">10</span> dari <span class="font-semibold text-gray-900 dark:text-white">45</span> hasil
            </span>
            <div class="inline-flex mt-2 xs:mt-0">
                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="inline-flex -space-x-px text-sm">
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Sebelumnya</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            </div>
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