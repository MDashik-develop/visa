@extends('layouts.frontend.app')

@section('content')
    <!-- Hero Carousel Section -->


    <div class="px-5">


        
        <div class="relative w-full max-w-4xl mx-auto mt-10">
            <!-- Arrows -->
            <button class="slick-prev absolute left-0 top-1/2  z-10  p-2 rounded-full shadow">
next
            </button>
    
            <button class="slick-next absolute right-0 top-1/2  z-10  p-2 rounded-full shadow">

            </button>
    
            <!-- Slider -->
            <div class="slider">
                <div><img src="https://placehold.co/600x400" alt="Slide 1" class="w-full rounded-xl" /></div>
                <div><img src="https://placehold.co/600x400" alt="Slide 2" class="w-full rounded-xl" /></div>
                <div><img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" /></div>
            </div>
        </div>

        {{-- <div class="slider w-full max-w-4xl mx-auto mt-10">
            <div><img src="https://placehold.co/600x400" alt="Slide 1" class="w-full rounded-xl" /></div>
            <div><img src="https://placehold.co/600x400" alt="Slide 2" class="w-full rounded-xl" /></div>
            <div><img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" /></div>
            <div class="px-5">
        </div> --}}
            
        </div>

    </div>
@endsection

