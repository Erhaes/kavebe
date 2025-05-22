{{-- Navbar --}}
<header class="@container sticky top-0 z-50">
    <nav class="bg-white border-gray-200 px-3 sm:px-4 lg:px-6 py-2.5 dark:bg-gray-800 shadow-md">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center space-x-2">
                <!-- Gambar light mode -->
                <img src="{{ asset('images/logo-putih.png') }}" class="mr-0 sm:mr-2 h-10 sm:h-12 block dark:hidden" alt="Logo Unsoed">
  
                <!-- Gambar dark mode -->
                <img src="{{ asset('images/logo-gelap.png') }}" class="mr-0 sm:mr-2 h-10 sm:h-12 hidden dark:block" alt="Logo Unsoed">
            </a>
            <div class="flex items-center lg:order-2">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2 mr-1 sm:mr-2">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
                <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-4 lg:px-5 py-2 lg:py-2.5 mr-1 sm:mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 transition duration-150">Uji Lab</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 transition-all duration-300 ease-in-out" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-6 xl:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="{{ request()->is('/') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Home</a>
                    </li>
                    <li>
                        <a href="/tentang" class="{{ request()->is('tentang') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Profil</a>
                    </li>
                    <li>
                        <a href="/fasilitas" class="{{ request()->is('fasilitas') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Fasilitas</a>
                    </li>
                    <li>
                        <a href="/pengujian" class="{{ request()->is('pengujian') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Pengujian</a>
                    </li>
                    <li>
                        <a href="/penelitian" class="{{ request()->is('penelitian') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Penelitian</a>
                    </li>
                    <li>
                        <a href="/berita" class="{{ request()->is('berita') ? 'block py-2 pr-4 pl-3 text-white bg-primary-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white' : 'block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700' }} transition duration-150">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

{{-- Script untuk animasi menu mobile --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('[data-collapse-toggle="mobile-menu-2"]');
        const mobileMenu = document.getElementById('mobile-menu-2');
        const menuIconOpen = menuToggle.querySelector('svg:not(.hidden)');
        const menuIconClose = menuToggle.querySelector('svg.hidden');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Toggle ikon menu
            menuIconOpen.classList.toggle('hidden');
            menuIconClose.classList.toggle('hidden');
            
            // Jika menu terbuka, tambahkan animasi masuk
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.style.opacity = '0';
                mobileMenu.style.maxHeight = '0';
                
                setTimeout(() => {
                    mobileMenu.style.opacity = '1';
                    mobileMenu.style.maxHeight = '500px';
                }, 10);
            }
        });
    });
</script> --}}