@extends('layouts.app')

@section('title', 'Pengujian Laboratorium')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8">
            <h1 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pengujian Laboratorium</h1>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Daftar layanan pengujian yang tersedia di laboratorium kami</p>
        </div>

        <!-- Filter Section -->
        <div class="mb-8">
            <div class="flex flex-wrap gap-4 justify-center">
                <button id="all-btn" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 active-filter">
                    Semua Pengujian
                </button>
                @foreach($testings->pluck('facility.nama_lab')->unique() as $lab)
                <button class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600" data-lab="{{ $lab }}">
                    {{ $lab }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Testing Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($testings as $testing)
            <div class="testing-card" data-lab="{{ $testing->facility->nama_lab }}">
                <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 overflow-hidden">
                    @if($testing->getFirstMediaUrl('foto_pengujian'))
                    <img class="w-full h-48 object-cover" 
                         src="{{ $testing->getFirstMediaUrl('foto_pengujian') }}" 
                         alt="{{ $testing->nama_testing }}">
                    @endif
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white mb-2">
                            {{ $testing->nama_testing }}
                        </h3>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ Str::limit(strip_tags($testing->keterangan), 100) }}
                        </p>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                {{ $testing->facility->nama_lab }}
                            </span>
                            @if($testing->equipment)
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                {{ $testing->equipment->nama_alat }}
                            </span>
                            @endif
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">
                                Rp {{ number_format($testing->harga, 0, ',', '.') }}
                            </span>
                            <a href="{{ route('testing.show', $testing->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Detail
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-lab]');
    const allButton = document.getElementById('all-btn');
    const testingCards = document.querySelectorAll('.testing-card');

    function setActiveFilter(clickedButton) {
        // Remove active class from all buttons
        document.querySelectorAll('button').forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-white', 'text-gray-900', 'border', 'border-gray-200');
        });

        // Add active class to clicked button
        clickedButton.classList.remove('bg-white', 'text-gray-900', 'border', 'border-gray-200');
        clickedButton.classList.add('bg-blue-600', 'text-white');
    }

    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const lab = button.getAttribute('data-lab');
            setActiveFilter(button);

            testingCards.forEach(card => {
                if (card.getAttribute('data-lab') === lab) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Show all items
    allButton.addEventListener('click', () => {
        setActiveFilter(allButton);
        testingCards.forEach(card => {
            card.style.display = 'block';
        });
    });
});
</script>
@endsection