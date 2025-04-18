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

    <!-- logos clients Section -->
        <section>
            <div class="heading text-center py-5">
                <h1 class="text-black text-[30px] font-bold my-3">Our Services</h1>
                <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
            </div>

            <div class="flex justify-center items-center my-10">
                <div class="logos-list flex gap-4 px-10">
                    <div class="logo-item">
                        <img src="https://placehold.co/150x100" alt="Client Logo 1" class="w-full" />
                    </div>
                    <div class="logo-item">
                        <img src="https://placehold.co/150x100" alt="Client Logo 2" class="w-full" />
                    </div>
                    <div class="logo-item">
                        <img src="https://placehold.co/150x100" alt="Client Logo 3" class="w-full" />
                    </div>
                    <div class="logo-item">
                        <img src="https://placehold.co/150x100" alt="Client Logo 4" class="w-full" />
                    </div>
                </div>
            </div>
        </section>

    <!-- services section -->
        <section class="my-10 pb-24" style="background: rgb(247, 245, 245);;">
            <div class="heading text-center py-5">
              <h1 class="text-black text-[30px] font-bold my-3">Our Services</h1>
              <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
            </div>

            <div class="px-2 w-full relative">
                <button class="prev-arrow-service absolute bottom-[-80px] left-[45%] transform -translate-y-1/2 -translate-x-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-left class="h-6 w-6 text-gray-800" /> 
                </button>
                <button class="next-arrow-service absolute bottom-[-80px] right-[42%] transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-right class="h-6 w-6 text-gray-800" />
                </button>
                <div class="slider-service w-full max-w-3xl mx-auto mt-10">
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
              <h1 class="text-black text-[30px] font-bold my-3">Enabling Your Immigration<br>Successfully</h1>
              <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
            </div>

            <div class="flex justify-center items-center">
                <div class="categories-list w-full max-w-6xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-5">
                    <div class="category-item-custom h-100  border border-gray-300">
                        <img src="https://placehold.co/300x200" alt="Category 1" class="w-full" />
                        <h3 class="text-start text-lg font-bold my-5 px-1">Category 1</h3>
                        <div class="w-full py-4 text-center text-[14px] font-bold text-black border-t-2 border-gray-300">
                            <a `1href="#category1">Learn More</a>
                        </div>
                    </div>
                    <div class="category-item-custom h-100  border border-gray-300 rounded-xl">
                        <img src="https://placehold.co/300x200" alt="Category 1" class="w-full" />
                        <h3 class="text-start text-lg font-bold my-5 px-1">Category 1</h3>
                        <div class="w-full py-4 text-center text-[14px] font-bold text-black rounded-lg border-t-2 border-gray-300">
                            <a href="#category1">Learn More</a>
                        </div>
                    </div>
                    <div class="category-item-custom h-100  border border-gray-300 rounded-xl">
                        <img src="https://placehold.co/300x200" alt="Category 1" class="w-full" />
                        <h3 class="text-start text-lg font-bold my-5 px-1">Category 1</h3>
                        <div class="w-full py-4 text-center text-[14px] font-bold text-black rounded-lg border-t-2 border-gray-300">
                            <a href="#category1">Learn More</a>
                        </div>
                    </div>
                    <div class="category-item-custom h-100  border border-gray-300 rounded-xl">
                        <img src="https://placehold.co/300x200" alt="Category 1" class="w-full" />
                        <h3 class="text-start text-lg font-bold my-5 px-1">Category 1</h3>
                        <div class="w-full py-4 text-center text-[14px] font-bold text-black rounded-lg border-t-2 border-gray-300">
                            <a href="#category1">Learn More</a>
                        </div>
                    </div>
                    <div class="category-item-custom h-100  border border-gray-300 rounded-xl">
                        <img src="https://placehold.co/300x200" alt="Category 1" class="w-full" />
                        <h3 class="text-start text-lg font-bold my-5 px-1">Category 1</h3>
                        <div class="w-full py-4 text-center text-[14px] font-bold text-black rounded-lg border-t-2 border-gray-300">
                            <a href="#category1">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="relative bg-[#E6F0EF] rounded-lg overflow-hidden max-w-6xl mx-auto">
             <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
              <svg class="h-full w-full" fill="none" height="100%" viewbox="0 0 400 200" width="100%" xmlns="http://www.w3.org/2000/svg">
               <rect fill="#D9E6E3" height="10" rx="5" width="40" x="20" y="20">
               </rect>
               <rect fill="#D9E6E3" height="15" rx="7.5" width="60" x="80" y="40">
               </rect>
               <rect fill="#D9E6E3" height="10" rx="5" width="30" x="160" y="10">
               </rect>
               <rect fill="#D9E6E3" height="15" rx="7.5" width="50" x="210" y="50">
               </rect>
               <rect fill="#D9E6E3" height="10" rx="5" width="20" x="280" y="20">
               </rect>
               <rect fill="#D9E6E3" height="15" rx="7.5" width="40" x="320" y="40">
               </rect>
               <rect fill="#D9E6E3" height="10" rx="5" width="20" x="370" y="10">
               </rect>
              </svg>
             </div>
             <div class="relative grid grid-cols-1 md:grid-cols-12 gap-6 p-8">
              <div class="md:col-span-7 space-y-6">
               <h2 class="text-2xl sm:text-3xl font-semibold text-[#1A1A1A] leading-tight">
                Visa types and eligibility
               </h2>
               <h3 class="text-xl sm:text-2xl font-semibold text-[#4B4B4B] leading-tight">
                assessment
               </h3>
               <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                 <div class="w-8 h-8 rounded-full bg-[#FF6B35] flex items-center justify-center mb-3">
                  <i class="fas fa-plane text-white text-sm">
                  </i>
                 </div>
                 <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                  Tourist Visa
                 </h4>
                 <p class="text-xs text-[#6B6B6B] leading-tight">
                  Visit new places to discover with a Tourist Visa. We deliver your documents ...
                 </p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                 <div class="w-8 h-8 rounded-full bg-[#7C6BC9] flex items-center justify-center mb-3">
                  <i class="fas fa-chart-line text-white text-sm">
                  </i>
                 </div>
                 <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                  Commercial Visa
                 </h4>
                 <p class="text-xs text-[#6B6B6B] leading-tight">
                  Developing your trade, setting up new sales channels Your visa is ready...
                 </p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                 <div class="w-8 h-8 rounded-full bg-[#00BFA6] flex items-center justify-center mb-3">
                  <i class="fas fa-graduation-cap text-white text-sm">
                  </i>
                 </div>
                 <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                  Student Visa
                 </h4>
                 <p class="text-xs text-[#6B6B6B] leading-tight">
                  Embarking on a journey of higher education in a foreign country opens doors to...
                 </p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                 <div class="w-8 h-8 rounded-full bg-[#0089FF] flex items-center justify-center mb-3">
                  <i class="fas fa-building text-white text-sm">
                  </i>
                 </div>
                 <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                  Residence Visa
                 </h4>
                 <p class="text-xs text-[#6B6B6B] leading-tight">
                  Expert Guidance for a Seamless Immigration Journey Expert Guidance...
                 </p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                 <div class="w-8 h-8 rounded-full bg-[#FFB800] flex items-center justify-center mb-3">
                  <i class="fas fa-box text-white text-sm">
                  </i>
                 </div>
                 <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                  Working Visa
                 </h4>
                 <p class="text-xs text-[#6B6B6B] leading-tight">
                  Get your Visa now for new business and earning opportunities. We deliver your...
                 </p>
                </div>
               </div>
              </div>
              <div class="md:col-span-5 flex justify-center md:justify-end">
               <img alt="Young woman holding two passports and celebrating with a fist pump, wearing a beige coat and black top, standing in front of a modern glass building, representing new fly visa" class="rounded-lg object-cover max-h-[400px] w-full max-w-[320px]" height="400" src="https://storage.googleapis.com/a1aa/image/5aa2d7ea-0209-4068-4b35-085aace924a8.jpg" width="320"/>
              </div>
             </div>
            </div>
           </div>

@endsection

{{-- @push('js')
    <script>



    </script>
@endpush --}}
