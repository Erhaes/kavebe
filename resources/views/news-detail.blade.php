@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-lg lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <!-- Kategori dan Tanggal -->
            <div class="flex items-center gap-4 mb-4 text-sm">
                <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                    Akademik
                </span>
                <span class="text-gray-500">Dipublikasikan: 28 April 2025</span>
            </div>
            
            <!-- Judul Berita -->
            <h1 class="mb-6 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl dark:text-white">Website Lab Teknik Sipil</h1>
            
            <!-- Info Penulis -->
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 dark:bg-gray-700 dark:text-gray-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-base font-semibold text-gray-900 dark:text-white">Admin Laboratorium</p>
                    <p class="text-sm text-gray-500 dark:text-gray-200">Staf Laboratorium Teknik Sipil</p>
                </div>
            </div>
            
            <!-- Gambar Utama -->
            <figure class="mb-8">
                <img class="w-full rounded-lg" src="{{ asset('/images/Lab-Mektan.jpeg') }}" alt="Gedung Laboratorium Teknik Sipil Unsoed">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-200">Gedung Laboratorium Teknik Sipil Universitas Jenderal Soedirman</figcaption>
            </figure>
            
            <!-- Konten Berita -->
            <div class="space-y-6 prose max-w-none prose-lg prose-gray dark:prose-invert">
                <p>Purbalingga, 28 April 2025 - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam reiciendis rem nisi laborum impedit asperiores deserunt accusamus illum quisquam accusantium temporibus in cumque, libero consectetur excepturi vel incidunt consequuntur unde eveniet maxime? Quidem, necessitatibus. Nesciunt soluta magni explicabo voluptatem atque.</p>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis harum eum ipsum voluptas aperiam veniam eveniet, ipsa molestiae deserunt sed facere, nam adipisci vel earum aliquam magni deleniti in. Impedit velit, sequi unde esse cumque quidem totam? Modi eos, est et aperiam sit cupiditate numquam vel excepturi, omnis aliquid saepe.</p>
                
                <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-900 dark:text-white">SUbjudul</h2>
                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, consequuntur.</p>
                
                {{-- <ul class="list-disc pl-6 space-y-2">
                    <li>Informasi lengkap mengenai 60 jenis pengujian yang tersedia</li>
                    <li>Sistem pemesanan online untuk layanan pengujian</li>
                    <li>Informasi fasilitas dan peralatan laboratorium</li>
                    <li>Profil staf dan tenaga ahli laboratorium</li>
                    <li>Berita dan kegiatan terkini di Laboratorium Teknik Sipil Unsoed</li>
                    <li>Informasi akreditasi dan sertifikasi yang dimiliki laboratorium</li>
                </ul> --}}
                
                {{-- <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-900 dark:text-white">Peningkatan Layanan Pengujian</h2>
                
                <p>Laboratorium Teknik Sipil Unsoed telah lama dikenal sebagai salah satu laboratorium pengujian terpercaya di wilayah Jawa Tengah. Dengan hadirnya website baru ini, diharapkan dapat meningkatkan jangkauan layanan pengujian yang ditawarkan.</p>
                
                <p>"Selama ini, kami telah melayani berbagai proyek infrastruktur di wilayah Jawa Tengah dan sekitarnya. Melalui website ini, kami berharap dapat menjangkau lebih banyak pengguna dan memberikan layanan pengujian yang lebih baik dan efisien," tambah Dr. Sutanto.</p>
                
                <p>Sebagai lembaga yang telah memperoleh akreditasi dari LAM Teknik PII dan IABEE, Laboratorium Teknik Sipil Unsoed memiliki komitmen untuk terus meningkatkan kualitas layanan dan mempertahankan standar tertinggi dalam pengujian bahan dan konstruksi bangunan.</p>
                
                <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-900 dark:text-white">Rencana Pengembangan ke Depan</h2>
                
                <p>Ke depannya, Laboratorium Teknik Sipil Unsoed berencana untuk terus mengembangkan website dengan menambahkan fitur-fitur baru, seperti:</p>
                
                <ul class="list-disc pl-6 space-y-2">
                    <li>Sistem pelacakan status pengujian secara online</li>
                    <li>Portal hasil pengujian yang dapat diakses secara digital</li>
                    <li>Layanan konsultasi online dengan tenaga ahli laboratorium</li>
                    <li>Modul pembelajaran online untuk mahasiswa teknik sipil</li>
                </ul>
                
                <p>Website Laboratorium Teknik Sipil Unsoed dapat diakses melalui alamat <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">www.labsipil.unsoed.ac.id</a>.</p>
                
                <p>Untuk informasi lebih lanjut, hubungi:</p>
                <p>Laboratorium Teknik Sipil<br>
                Fakultas Teknik Universitas Jenderal Soedirman<br>
                Jl. Mayjend Sungkono KM 5, Blater, Purbalingga, Jawa Tengah 53371<br>
                Telepon: (0281) 6596700<br>
                Email: labsipil@unsoed.ac.id</p> --}}
            </div>
            
            <!-- Share Buttons -->
            <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Bagikan artikel ini:</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Artikel Terkait -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Artikel Terkait</h3>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <a href="#" class="block p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Artike 1</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-200">14 April 2025</p>
                    </a>
                    <a href="#" class="block p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Artikel 2</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-200">5 April 2025</p>
                    </a>
                    <a href="#" class="block p-4 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Artikel 3</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-200">25 Maret 2025</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection