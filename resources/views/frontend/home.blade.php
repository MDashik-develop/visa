@extends('layouts.frontend.app')

@section('content')
    <!-- Hero Carousel Section -->
    <!-- Swiper -->
    {{-- <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
                <!-- More slides -->
            </div>
            <!-- If needed -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> --}}

    <div class="px-5">


        <div class="slider w-full max-w-4xl mx-auto mt-10">
            <div><img src="https://placehold.co/600x400" alt="Slide 1" class="w-full rounded-xl" /></div>
            <div><img src="https://placehold.co/600x400" alt="Slide 2" class="w-full rounded-xl" /></div>
            <div><img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" /></div>
        </div>

    </div>
@endsection

@push('js')
    <script>



    </script>
@endpush
