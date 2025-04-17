@extends('layouts.frontend.app')

@section('content')
    <!-- Hero Carousel Section -->
        <div class="px-2 w-full relative">
            <button class="prev-arrow absolute bottom-[80px] right-6 transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                <x-heroicon-o-arrow-small-left class="h-6 w-6 text-gray-800" /> 
            </button>
            <button class="next-arrow absolute bottom-[20px] right-6 transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                <x-heroicon-o-arrow-small-right class="h-6 w-6 text-gray-800" />
            </button>
            <div class="slider w-full mx-auto mt-10 max-h-[60vh] overflow-hidden rounded-xl bg-green-700">
                <img src="https://placehold.co/1200x500" alt="Slide 1" class="w-full shadow-lg" />
                <img src="https://placehold.co/1200x500" alt="Slide 2" class="w-full shadow-lg" />
                <img src="https://placehold.co/1200x500" alt="Slide 3" class="w-full shadow-lg" />
            </div>
        </div>

    <!-- services section -->
        <section class="my-10">
            <div class="heading text-center py-5">
              <h6 class="text-red-400 text-[14px] font-bold uppercase mb-3">welcome to skyotel global</h6>
              <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
              <h1 class="text-black text-[30px] font-bold my-5">Our Services</h1>
            </div>

            <div class="px-2 w-full relative">
                <button class="prev-arrow-service absolute bottom-[-80px] left-[45%] transform -translate-y-1/2 -translate-x-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-left class="h-6 w-6 text-gray-800" /> 
                </button>
                <button class="next-arrow-service absolute bottom-[-80px] right-[42%] transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-right class="h-6 w-6 text-gray-800" />
                </button>
                <div class="slider-service w-full max-w-7xl mx-auto mt-10">
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 1" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 2" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" />
                    </div>
                </div>
            </div>
        </section>

    <!-- Categories section -->
        <section class="my-20">
            <div class="heading text-center py-5">
              <h6 class="text-red-400 text-[14px] font-bold uppercase mb-3">Visa Categories</h6>
              <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
              <h1 class="text-black text-[30px] font-bold my-5">Enabling Your Immigration<br>Successfully</h1>
            </div>

            <div class="categories-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-5">
                <div class="category-item border border-gray-300 rounded-xl p-4">
                    <img src="https://placehold.co/300x200" alt="Category 1" class="w-full rounded-xl" />
                    <h3 class="text-start text-lg font-bold mt-2">Category 1</h3>
                    <a href="#category1" class="w-full py-2 border-t-2 border-black">Read More</a>
                </div>
                <div class="category-item border border-gray-300 rounded-xl p-4">
                    <img src="https://placehold.co/300x200" alt="Category 2" class="w-full rounded-xl" />
                    <h3 class="text-start text-lg font-bold mt-2">Category 2</h3>
                </div>
                <div class="category-item">
                    <img src="https://placehold.co/300x200" alt="Category 3" class="w-full rounded-xl" />
                    <h3 class="text-start text-lg font-bold mt-2">Category 3</h3>
                </div>
            </div>
        </section>

@endsection

{{-- @push('js')
    <script>



    </script>
@endpush --}}
