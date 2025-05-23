@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita Terkini</h2>
        </div> 
        <div class="grid gap-8 lg:grid-cols-2">
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        Akademik
                    </span>
                    <span class="text-sm">1 days ago</span>
                </div>
                <img src="{{ asset('/images/Lab-Mektan.jpeg') }}" class="w-full h-56 object-cover rounded-2xl mb-3" alt="">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="berita/detail">Website Lab Teknik Sipil</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium pariatur praesentium tempore facere fugiat distinctio hic explicabo itaque, repellendus non ad delectus quia voluptates debitis id. Beatae neque earum provident.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        {{-- <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" /> --}}
                        <span class="font-medium dark:text-white">
                            Admin
                        </span>
                    </div>
                    <a href="berita/detail" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article> 
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        Kegiatan
                    </span>
                    <span class="text-sm">1 days ago</span>
                </div>
                <img src="{{ asset('/images/Lab-Mektan.jpeg') }}" class="w-full h-56 object-cover rounded-2xl mb-3" alt="">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Test Display</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse fugit modi, molestiae itaque, maiores exercitationem vel neque soluta quam reprehenderit beatae. Officiis explicabo asperiores facere recusandae, repellendus et quos minus?</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        {{-- <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green avatar" /> --}}
                        <span class="font-medium dark:text-white">
                            Admin
                        </span>
                    </div>
                    <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>                  
        </div>  
    </div>
  </section>

@endsection