@extends('layouts.frontend.app')

@section('content')
    <!-- Hero Carousel Section -->
    <div class=" w-full relative">
        <button
            class="prev-arrow absolute bottom-[80px] right-6 transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
            <x-heroicon-o-arrow-small-left class="h-6 w-6 text-gray-800" />
        </button>
        <button
            class="next-arrow absolute bottom-[20px] right-6 transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
            <x-heroicon-o-arrow-small-right class="h-6 w-6 text-gray-800" />
        </button>
        <div class="slider w-full mx-auto mt-10  overflow-hidden">
            <img src="https://placehold.co/1200x400" alt="Slide 1" class="w-full shadow-lg" />
            <img src="https://placehold.co/1200x400" alt="Slide 2" class="w-full shadow-lg" />
            <img src="https://placehold.co/1200x400" alt="Slide 3" class="w-full shadow-lg" />
        </div>
    </div>
    <div class="marquee-wrapper-1">
        <div class="marquee" aria-label="Scrolling marquee with repeated country names and asterisk icons">
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Middle East</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>British</span>
            <i class="fas fa-asterisk mx-2"></i>
            <span>Zukto Ratto</span>
            <i class="fas fa-asterisk mx-2"></i>
        </div>
    </div>

    <!-- logos clients Section -->
    <section class="py-10 pt-20">
        <div class="flex items-center justify-center gap-4 mb-10">
            <div class="border-t border-gray-400 w-24">
            </div>
            <p class="text-gray-600 text-m font-normal font-poppins whitespace-nowrap">
                We're proud to work with our preferred partners
            </p>
            <div class="border-t border-gray-400 w-24">
            </div>
        </div>

        <div class="flex justify-center items-center my-10">
            <div class="slider-logos-list w-full max-w-7xl px-10">
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 1" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 2" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 3" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 4" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 5" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 6" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 7" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 8" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 9" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 10" class="w-full" />
                </div>
                <div class="logo-item px-2">
                    <img src="https://placehold.co/100x80" alt="Client Logo 1" class="w-full" />
                </div>


            </div>
        </div>
    </section>

    <!-- services section -->
        <section class="my-10 pb-24 relative h-[450px] bg-gradient-to-l from-cyan-50 to-white overflow-hidden" onmousemove="moveFlyIcon(event)"
            id="fly-icon-wrapper">
            <svg id="fly-icon" class="absolute left-[11%] top-3 w-16 h-16 transition-transform duration-200 ease-out"
                height="64px" width="64px" viewBox="-93.13 -93.13 477.28 477.28" fill="#000000"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path style="fill:#dedede;"
                        d="M233.515,102.634l28.914-40.896c7.816-11.047,13.919-25.863,13.63-33.091 c-0.294-7.234-6.402-13.326-13.658-13.63c-7.25-0.294-22.083,5.803-33.129,13.619L188.371,57.56L74.172,3.006 C61.967-2.824,45.911,0.194,38.318,9.767s-5.26,24.275,5.211,32.852l91.289,74.776l-68.249,75.614l-32.194-9.72 c-12.95-3.922-27.456-3.323-32.384,1.316c-4.933,4.645-0.381,15.278,10.166,23.758l29.213,23.486c0,0-1.099,5.107-2.464,11.411 c-1.36,6.298,2.633,10.28,8.926,8.887l11.389-2.529l23.47,29.202c8.485,10.546,19.124,15.104,23.769,10.182 c4.64-4.922,5.238-19.412,1.316-32.368L98.05,224.43l75.603-68.249l74.787,91.295c8.572,10.47,23.279,12.804,32.852,5.205 c9.567-7.593,12.597-23.654,6.761-35.865L233.515,102.634z">
                    </path>
                </g>
            </svg>

            <div class="heading text-center py-5">
                <h1 class="text-black text-[30px] font-bold my-3">Our Services</h1>
                <hr class="w-[130px] mx-auto border-t-[3px] rounded-lg border-red-400">
            </div>

            <div class="px-2 w-full relative">
                <button
                    class="prev-arrow-service absolute bottom-[-80px] left-[45%] transform -translate-y-1/2 -translate-x-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-left class="h-6 w-6 text-gray-800" />
                </button>
                <button
                    class="next-arrow-service absolute bottom-[-80px] right-[42%] transform -translate-y-1/2 z-10 bg-white text-gray-800 rounded-full p-2 shadow-lg">
                    <x-heroicon-o-arrow-small-right class="h-6 w-6 text-gray-800" />
                </button>
                <div class="slider-service w-full max-w-5xl mx-auto mt-10">
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 1" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 2" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" />
                    </div>
                    <div class="px-5">
                        <img src="https://placehold.co/600x400" alt="Slide 3" class="w-full rounded-xl" />
                    </div>
                </div>
            </div>
        </section>

    <!-- Categories section -->
    <section class="my-20">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="w-full relative bg-[#E6F0EF] rounded-lg overflow-hidden max-w-6xl mx-auto">
                <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">

                </div>
                <div class="relative grid grid-cols-1 md:grid-cols-12 gap-6 p-8">
                    <div class="md:col-span-7 space-y-6">
                        <h2 class="text-2xl sm:text-3xl mb-10 font-semibold text-[#1A1A1A] leading-tight">
                            Visa types and eligibility
                            <hr class="w-[200px] ml-1 mt-2 border-t-[3px] border-red-400">
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                                <div class="w-8 h-8 rounded-full bg-[#FF6B35] flex items-center justify-center mb-3">
                                    <x-heroicon-m-globe-americas class="w-6 h-6 text-white" />
                                </div>
                                <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                                    Tourist Visa
                                </h4>
                                <p class="text-xs text-[#6B6B6B] leading-tight">
                                    Visit new places to discover with a Tourist Visa. We deliver your documents ...
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                                <div class="w-8 h-8 rounded-full bg-[#20a72b] flex items-center justify-center mb-3">
                                    <svg fill="#fff" viewBox="-178.56 -178.56 933.12 933.12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M554.12 83.51L318.36 4.93a95.962 95.962 0 0 0-60.71 0L21.88 83.51A32.006 32.006 0 0 0 0 113.87v49.01l265.02-79.51c15.03-4.5 30.92-4.5 45.98 0l265 79.51v-49.01c0-13.77-8.81-26-21.88-30.36zm-279.9 30.52L0 196.3v228.38c0 15 10.42 27.98 25.06 31.24l242.12 53.8a95.937 95.937 0 0 0 41.65 0l242.12-53.8c14.64-3.25 25.06-16.24 25.06-31.24V196.29l-274.2-82.26c-9.04-2.72-18.59-2.72-27.59 0zM128 230.11c0 3.61-2.41 6.77-5.89 7.72l-80 21.82C37.02 261.03 32 257.2 32 251.93v-16.58c0-3.61 2.41-6.77 5.89-7.72l80-21.82c5.09-1.39 10.11 2.44 10.11 7.72v16.58zm144-39.28c0 3.61-2.41 6.77-5.89 7.72l-96 26.18c-5.09 1.39-10.11-2.44-10.11-7.72v-16.58c0-3.61 2.41-6.77 5.89-7.72l96-26.18c5.09-1.39 10.11 2.44 10.11 7.72v16.58zm176 22.7c0-5.28 5.02-9.11 10.11-7.72l80 21.82c3.48.95 5.89 4.11 5.89 7.72v16.58c0 5.28-5.02 9.11-10.11 7.72l-80-21.82a7.997 7.997 0 0 1-5.89-7.72v-16.58zm-144-39.27c0-5.28 5.02-9.11 10.11-7.72l96 26.18c3.48.95 5.89 4.11 5.89 7.72v16.58c0 5.28-5.02 9.11-10.11 7.72l-96-26.18a7.997 7.997 0 0 1-5.89-7.72v-16.58z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                                    Umrah Visa
                                </h4>
                                <p class="text-xs text-[#6B6B6B] leading-tight">
                                    We provide simple and reliable services for Umrah visas. Start your journey with us...
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                                <div class="w-8 h-8 rounded-full bg-[#7C6BC9] flex items-center justify-center mb-3">
                                    <svg width="24px" height="24px" viewBox="0 0 15 15" version="1.1"
                                        id="doctor" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"
                                        stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M5.5,7C4.1193,7,3,5.8807,3,4.5l0,0v-2C3,2.2239,3.2239,2,3.5,2H4c0.2761,0,0.5-0.2239,0.5-0.5S4.2761,1,4,1H3.5
                                                                                C2.6716,1,2,1.6716,2,2.5v2c0.0013,1.1466,0.5658,2.2195,1.51,2.87l0,0C4.4131,8.1662,4.9514,9.297,5,10.5C5,12.433,6.567,14,8.5,14
                                                                                s3.5-1.567,3.5-3.5V9.93c1.0695-0.2761,1.7126-1.367,1.4365-2.4365C13.1603,6.424,12.0695,5.7809,11,6.057
                                                                                C9.9305,6.3332,9.2874,7.424,9.5635,8.4935C9.7454,9.198,10.2955,9.7481,11,9.93v0.57c0,1.3807-1.1193,2.5-2.5,2.5S6,11.8807,6,10.5
                                                                                c0.0511-1.2045,0.5932-2.3356,1.5-3.13l0,0C8.4404,6.7172,9.001,5.6448,9,4.5v-2C9,1.6716,8.3284,1,7.5,1H7
                                                                                C6.7239,1,6.5,1.2239,6.5,1.5S6.7239,2,7,2h0.5C7.7761,2,8,2.2239,8,2.5v2l0,0C8,5.8807,6.8807,7,5.5,7 M11.5,9
                                                                                c-0.5523,0-1-0.4477-1-1s0.4477-1,1-1s1,0.4477,1,1S12.0523,9,11.5,9z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                                    Mediacal Visa
                                </h4>
                                <p class="text-xs text-[#6B6B6B] leading-tight">
                                    Facilitating your medical journey with ease and reliability. Your visa is ready...
                                </p>
                            </div>
                            <div class="bg-white rounded-lg p-5 shadow-sm max-w-xs">
                                <div class="w-8 h-8 rounded-full bg-[#00BFA6] flex items-center justify-center mb-3">
                                    <svg fill="#ffffff" width="24px" height="24px" viewBox="0 -64 640 640"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="text-sm font-semibold text-[#1A1A1A] mb-1">
                                    Student Visa
                                </h4>
                                <p class="text-xs text-[#6B6B6B] leading-tight">
                                    Embarking on a journey of higher education in a foreign country opens doors to...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-5 flex justify-center md:justify-end">
                        <img alt="Young woman holding two passports and celebrating with a fist pump, wearing a beige coat and black top, standing in front of a modern glass building, representing new fly visa"
                            class="rounded-lg object-cover max-h-[400px] w-full max-w-[320px]" height="400"
                            src="https://skyotelglobal.com/wp-content/uploads/2022/02/1.-Tourist-Visa.png"
                            width="320" />
                    </div>
                </div>
            </div>
        </div>


        <div class="marquee-wrapper">
            <div class="marquee" aria-label="Scrolling marquee with repeated text and asterisk icons">
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
                <span>Get Free Online Visa Assessment Today! - Apply Here</span>
                <i class="fas fa-asterisk mx-2"></i>
            </div>
        </div>
    </section>

    <!-- Study Abroad -->
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                <!-- Left side images grid with boys students images updated -->
                <div class="md:col-span-6 grid grid-cols-2 grid-rows-2 gap-4">
                    <img alt="Group of boys students studying outdoors, smiling and reading books"
                        class="w-full h-full object-cover rounded-lg shadow-md" height="320"
                        src="https://storage.googleapis.com/a1aa/image/9951d20a-029b-48a5-4eef-b541fb8d5271.jpg"
                        width="320" />
                    <div class="relative flex justify-center items-center bg-gray-50 rounded-lg shadow-inner">
                        <div class="absolute inset-0 grid grid-cols-10 grid-rows-10 gap-2 p-6 pointer-events-none">
                            <!-- Dots pattern -->
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                            <div class="col-span-1 row-span-1 rounded-full bg-gray-300 opacity-40"></div>
                        </div>
                        <div
                            class="relative z-10 flex flex-col items-center justify-center rounded-full bg-gray-100 w-32 h-32 shadow-lg">
                            <span class="text-6xl font-extrabold text-[#F45B5B] leading-none drop-shadow-md">
                                5
                            </span>
                            <span class="text-xs font-semibold text-gray-700 text-center leading-tight tracking-wide">
                                YEARS OF
                                <br />
                                EXPERIENCE
                            </span>
                        </div>
                    </div>
                    <img alt="Hands holding a red speech bubble sign with white bold text 'STUDY ABROAD'"
                        class="w-full h-full object-cover rounded-lg shadow-md" height="320"
                        src="https://storage.googleapis.com/a1aa/image/e824a659-2984-4ed0-bbb8-04d29ace35f1.jpg"
                        width="320" />
                    <img alt="Group of boys students studying together in a library with bookshelves behind them"
                        class="w-full h-full object-cover rounded-lg shadow-md" height="320"
                        src="https://storage.googleapis.com/a1aa/image/331b1936-ff62-40d7-74b1-1533e9213b50.jpg"
                        width="320" />
                </div>
                <!-- Right side advanced text content -->
                <div class="md:col-span-6 bg-gradient-to-r from-white via-gray-50 to-white p-10 rounded-xl shadow-xl">
                    <p
                        class="text-[#F45B5B] font-semibold text-xs uppercase border-b-2 border-[#F45B5B] inline-block mb-4 tracking-wider">
                        Discover your potential
                    </p>
                    <h2 class="text-4xl font-extrabold text-[#0B1E2D] mb-8 leading-tight drop-shadow-sm">
                        Study Abroad
                    </h2>
                    <div class="flex items-center mb-6">
                        <svg aria-hidden="true" class="w-8 h-8 text-[#0B1E2D] mr-4 flex-shrink-0" fill="none"
                            stroke="#0B1E2D" strokelinecap="round" strokelinejoin="round" strokewidth="2"
                            viewbox="0 0 24 24">
                            <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7"></path>
                            <path d="M16 3v4"></path>
                            <path d="M8 3v4"></path>
                            <path d="M3 7h18"></path>
                            <circle cx="12" cy="14" r="3"></circle>
                            <path d="M12 11v6"></path>
                        </svg>
                        <p class="text-[#0B1E2D] font-semibold text-xl leading-snug">
                            Unlock Limitless Horizons: Study Abroad and Redefine Your Success
                        </p>
                    </div>
                    <p class="text-gray-600 text-base mb-10 leading-relaxed tracking-wide">
                        Embark on a Global Education Adventure! Unlock new horizons, embrace diverse cultures, and gain
                        invaluable skills. Our comprehensive study abroad services offer personalized support, seamless
                        logistics, and transformative experiences. Dare to dream big, expand your worldview, and shape an
                        extraordinary future. Discover the world through education today!
                    </p>
                    <button aria-label="Learn more about study abroad"
                        class="inline-flex items-center gap-3 bg-[#F45B5B] text-white font-semibold text-sm px-8 py-3 rounded-lg shadow-lg hover:bg-[#d94a4a] transition-colors">
                        Learn More
                        <i class="fas fa-chevron-right text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
        <section>
            <div class="bg-gradient-to-r from-cyan-50 to-white min-h-screen flex items-center justify-center p-6">
                <div class="max-w-7xl w-full rounded-3xl overflow-hidden flex flex-col lg:flex-row shadow-2xl bg-white">
                    <div
                        class="lg:w-1/2 relative bg-gradient-to-br from-[#00b386] to-[#007a5e] p-12 flex flex-col justify-center text-white">
                        <h1 class="text-4xl font-extrabold mb-6 leading-tight drop-shadow-lg">
                            Have Questions?
                            <br />
                            We’re Here to Help!
                        </h1>
                        <p class="mb-8 text-lg font-medium drop-shadow-md max-w-lg">
                            Whether you want to know more about our visa services or need
                            assistance, just fill out the form and our experts will get back to
                            you promptly.
                        </p>
                        <div class="flex items-center space-x-6">
                            <img alt="Smiling man with headset, representing customer support"
                                class="rounded-full border-4 border-white shadow-lg" height="100"
                                src="https://storage.googleapis.com/a1aa/image/12c5922c-0e6d-4607-2b8e-fa3e0fb96988.jpg"
                                width="100" />
                            <div>
                                <p class="font-semibold text-xl drop-shadow-md">
                                    John Doe
                                </p>
                                <p class="text-sm opacity-90 drop-shadow-sm">
                                    Customer Support Lead
                                </p>
                            </div>
                        </div>
                        <div class="absolute bottom-6 right-6 opacity-20 select-none pointer-events-none">
                            <img alt="Vector art of a support agent with headset and laptop" class="rotate-12" height="250"
                                src="https://storage.googleapis.com/a1aa/image/28097367-cdaf-444d-25e9-74a254655790.jpg"
                                width="250" />
                        </div>
                    </div>
                    <div class="lg:w-1/2 p-12 bg-white">
                        <div class="mb-8">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grid grid-cols-3 grid-rows-3 gap-[6px]">
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                    <span class="w-3 h-3 rounded-full bg-[#00b386]">
                                    </span>
                                </div>
                                <span class="text-xs font-semibold text-[#00b386] tracking-wide">
                                    CONTACT US
                                </span>
                            </div>
                            <h2 class="text-3xl font-extrabold text-gray-900 leading-snug">
                                Do you have questions or want more information?
                            </h2>
                        </div>
                        <form class="space-y-8 max-w-lg">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="far fa-user">
                                        </i>
                                    </span>
                                    <input
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="Goladria Gomez" type="text" />
                                </label>
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="far fa-envelope">
                                        </i>
                                    </span>
                                    <input
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="example@evisa.com" type="email" />
                                </label>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="far fa-pen-nib">
                                        </i>
                                    </span>
                                    <select aria-label="Visa type"
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-10 text-gray-700 cursor-pointer focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition">
                                        <option selected="">
                                            Student Visa
                                        </option>
                                        <option>
                                            Tourist Visa
                                        </option>
                                        <option>
                                            Work Visa
                                        </option>
                                        <option>
                                            Business Visa
                                        </option>
                                    </select>
                                    <svg class="w-4 h-4 text-gray-400 absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none"
                                        fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </label>
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="fas fa-phone-alt">
                                        </i>
                                    </span>
                                    <input
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="+888 -8867 3333" type="tel" />
                                </label>
                            </div>
                            <label class="relative block">
                                <span class="absolute top-4 left-4 flex items-center text-gray-400">
                                    <i class="far fa-comment-dots">
                                    </i>
                                </span>
                                <textarea
                                    class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 resize-none focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                    placeholder="Write Your Message..." rows="5"></textarea>
                            </label>
                            <button
                                class="w-full bg-gradient-to-r from-[#00b386] to-[#007a5e] text-white font-extrabold text-lg rounded-2xl py-4 shadow-lg hover:from-[#009f75] hover:to-[#005a3f] transition"
                                type="submit">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection

{{-- @push('js')
    <script>



    </script>
@endpush --}}
