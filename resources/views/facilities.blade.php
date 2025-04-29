@extends('layouts.app')

@section('title', 'Fasilitas')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Fasilitas
                </h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="/fasilitas/detail">
                        <img src="{{ asset('/images/Ruang/Lab. Transport.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Laboratorium
                            Transportasi</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Lab. Hidro.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Laboratorium
                            Hidroteknik</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Lab. Struktur.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Laboratorium
                            Struktur dan Bahan Bangunan</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Lab. Mektan.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Laboratorium
                            Mekanika Tanah</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Transport.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Laboratorium
                            Pemetaan</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Admin pendaftaran.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Ruang
                            Administrasi</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Ruang Rapat.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Ruang Rapat
                        </h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Loby ruang tunggu.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Lobby/Ruang
                            Tunggu</h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Ruang Kantor.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Ruang Kantor
                        </h2>
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img src="{{ asset('/images/Ruang/Work Shop.jpeg') }}"
                            class="w-full h-75 object-cover rounded-2xl mb-5" alt="">
                        <h2 class="text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Ruang
                            WorkShop</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
