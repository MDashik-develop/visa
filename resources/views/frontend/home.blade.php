@extends('layouts.frontend.app')

@section('content')

    <body class="flex flex-col min-h-screen">

        <!-- Top Info Bar -->
        <div class="bg-red-500 text-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center py-3">
                    <!-- Contact Info -->
                    <div class="flex flex-col md:flex-row md:space-x-8 space-y-2 md:space-y-0">
                        <!-- Address -->
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span class="text-sm">492/20, City lights, Dhaka</span>
                        </div>

                        <!-- Email -->
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="text-sm">skyotelglobal@gmail.com</span>
                        </div>

                        <!-- Office Hours -->
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <span class="text-sm">Saturday-Thursday 10 a.m - 6 p.m</span>
                        </div>
                    </div>

                    <!-- Social Media & Appointment -->
                    <div class="flex items-center space-x-4">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                        <div class="bg-slate-800 text-white px-4 py-2 ml-2">
                            <a href="#" class="flex items-center text-sm font-medium">
                                APPOINTMENT
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo and Navigation -->
        <div class="bg-white py-5 shadow-sm">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Logo -->
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center">
                            <div class="relative">
                                <div class="bg-blue-500 w-12 h-12 rounded-full flex items-center justify-center">
                                    <div class="bg-white w-10 h-10 rounded-full flex items-center justify-center">
                                        <div class="bg-blue-500 w-8 h-8 rounded-full"></div>
                                    </div>
                                </div>
                                <div class="absolute -top-1 right-1 bg-orange-400 w-4 h-4 rounded-full"></div>
                            </div>
                            <div class="ml-2 font-bold text-2xl">
                                <span class="text-blue-600">SKY</span>
                                <span class="text-blue-500">OTEL</span>
                                <div class="text-xs text-gray-500">GLOBAL</div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Navigation -->
                    <nav class="flex flex-wrap justify-center">
                        <a href="#"
                            class="px-5 py-2 font-medium text-gray-800 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-colors">HOME</a>
                        <a href="#"
                            class="px-5 py-2 font-medium text-gray-800 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-colors">ABOUT
                            US</a>
                        <a href="#"
                            class="px-5 py-2 font-medium text-gray-800 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-colors">VISA
                            ASSISTANCE</a>
                        <a href="#"
                            class="px-5 py-2 font-medium text-gray-800 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-colors">SERVICES</a>
                        <a href="#"
                            class="px-5 py-2 font-medium text-gray-800 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-600 transition-colors">PAY
                            BILL</a>
                    </nav>

                    <!-- Enquiries -->
                    <div class="hidden md:flex items-center mt-4 md:mt-0">
                        <div class="bg-white rounded-full p-2 shadow-md">
                            <svg class="w-6 h-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-2">
                            <div class="text-xs text-red-500 font-medium">ENQUIRIES</div>
                            <div class="text-sm font-bold">+88 01733311644</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Updates Bar -->
        <div class="bg-gray-100 py-3 border-y border-gray-200">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center justify-center">
                    <div class="flex items-center text-red-500 font-medium mr-4">
                        <span class="bg-red-500 text-white px-2 py-1 text-xs mr-3 flex items-center">
                            <span class="inline-block mr-1">📚</span>UPDATES:
                        </span>
                        We process visa for 30+ countries
                    </div>
                    <a href="#" class="text-red-500 flex items-center mt-2 md:mt-0 font-medium">
                        VIEW DETAILS
                        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Hero Carousel Section -->
        <!-- Swiper -->
        <div class="swiper mySwiper">
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
        </div>


    </body>
    
@endsection
