@extends('layouts.app')

@section('title', 'Tentang')

@section('content')

{{-- About --}}

<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang Kami</h2>
            <p class="mb-4">Laboratorium Teknik Sipil Unsoed berfungsi sebagai pusat pembelajaran praktis dan eksperimental yang dipergunakan oleh mahasiswa Fakultas Teknik Unsoed dan pelayanan untuk mitra dari luar Laboratorium Teknik Sipil Unsoed yang mencakup bidang Struktur dan Bahan Bangunan, Mekanika Tanah dan Hidraulika, Transportasi, Mekanika Keairan dan Teknik Lingkungan.</p>
            <p>Dengan fasilitas yang memadai dan didukung oleh tenaga ahli serta dosen-dosen berpengalaman, Laboratorium Teknik Sipil 
                Unsoed menjadi salah satu pusat unggulan dalam mendukung pengembangan ilmu pengetahuan dan teknologi di bidang teknik sipil, 
                sekaligus menjadi mitra strategis bagi berbagai pemangku kepentingan di tingkat regional maupun nasional.</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{ asset('/images/Lab-Mektan.jpeg') }}" alt="office content 1">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('images/Lab-Transport.jpeg') }}" alt="office content 2">
        </div>
    </div>
</section>

{{-- End About --}}



{{-- Kata Pengantar --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto text-center max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Kata Pengantar</h2>
            {{-- <p class="mb-4 font-light">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p> --}}
            <i>
                <p class="mb-4 font-medium">Selamat datang di website resmi Laboratorium Teknik Sipil Universitas Jenderal Soedirman. Website ini hadir sebagai wujud komitmen kami dalam menyediakan informasi yang transparan, akurat, dan mudah diakses terkait fasilitas, layanan, serta kegiatan akademik dan penelitian yang berlangsung di laboratorium kami.</p>
                <p class="mb-4 font-medium">Sebagai bagian penting dalam mendukung tridharma perguruan tinggi, laboratorium ini terus berinovasi dalam menyediakan layanan praktikum, pengujian material, serta riset terapan di berbagai bidang teknik sipil. Melalui platform ini, kami juga membuka peluang kolaborasi dengan mitra industri, lembaga pemerintah, dan masyarakat luas.</p>
                <p class="mb-4 font-medium">Kami berharap kehadiran website ini dapat menjadi jembatan komunikasi yang efektif dan memberikan manfaat sebesar-besarnya bagi seluruh pemangku kepentingan.</p>
            </i>
            <p class="mb-4 font-extrabold">Kepala Laboratorium</p>
        </div>
    </div>
  </section>
{{-- End Pengantar --}}


{{-- Visi Misi --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Visi</h2>
            <p class="mb-4 font-medium">Menjadi laboratorium Teknik Sipil yang bermutu dan maju untuk mendukung kegiatan akademik, penelitian dan industri konstruksi sehingga dapat berkontribusi bagi pembangunan bangsa dan negara.</p>
        </div>
        <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-200">
            <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Misi</h2>
            {{-- <p class="mb-4 font-medium">Menjadi laboratorium Teknik Sipil yang bermutu dan maju untuk mendukung kegiatan akademik, penelitian dan industri konstruksi sehingga dapat berkontribusi bagi pembangunan bangsa dan negara.</p> --}}
            <ol class="list-decimal mb-4 pl-5 font-medium">
                <li>Memberikan pelayanan praktikum kepada mahasiswa</li>
                <li>Memberikan pelayanan penelitian kepada dosen dan mahasiswa</li>
                <li>Memberi pelayanan pengujian kepada kontraktor dan konsultan</li>
            </ol>
        </div>
    </div>
  </section>
{{-- End Visi Misi --}}


{{-- Team --}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
        <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tim Kami</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-200">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
        </div> 
        <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('/images/pak-hery.jpg') }}" alt="Pak Hery">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Ir. Hery Awan Susanto., S.T.,M.T.
                </h3>
                <p>Kepala Laboratorium</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('/images/pak-dani.jpg') }}" alt="Pak Dani">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Ir. Dani Nugroho Saputra, S.Pd.T, M.Eng
                </h3>
                <p>Kepala Laboratorium</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Pak Dani">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Umigawati
                </h3>
                <p>Administrator</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Pak Dani">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Ghiffara Hasna Royanisa
                </h3>
                <p>Administrator</p>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Pak Dani">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Ferdiono
                </h3>
                <p>Laboran/Teknisi</p>
            </div>
            
            {{-- <div class="text-center text-gray-500 dark:text-gray-200">
                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/neil-sims.png" alt="Neil Avatar">
                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Neil Sims</a>
                </h3>
                <p>Vue.js Developer</p>
                <ul class="flex justify-center mt-4 space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                        </a> 
                    </li> 
                </ul>
            </div> --}}
        </div>  
    </div>
  </section>
{{-- End Team --}}

@endsection