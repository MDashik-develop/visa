<footer class="bg-gradient-to-r from-[#1a1a2e] via-[#16213e] to-[#0f3460] text-gray-200 relative select-none">
    <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12">
        <!-- Logo & Address -->
        <div class="flex flex-col space-y-6">
            <img alt="Skyotel Global logo with blue globe and orange swoosh airplane design"
                class="w-[160px] h-[100px] object-contain" loading="lazy"
                src="{{ asset('storage/' . $website->logo) }}" />
            <address class="not-italic text-gray-300 text-sm leading-relaxed space-y-4">
                <p>
                    <strong class="text-white">Dhaka Office:</strong><br />
                    {!! $website->address !!}
                </p>
                <p>
                    <strong class="text-white">Registered Office:</strong><br />
                    15 Senpara Parboto, Mirpur, Dhaka.
                </p>
                <p>
                    <strong class="text-white">London Office:</strong><br />
                    Suite 2000, 16 Wood Ford Road, E7 OHA<br />
                    Mobile:
                    <a class="text-[#00b4d8] hover:underline" href="tel:+447498003011">+44 07498003011</a>
                </p>
            </address>
            <div class="flex space-x-4 mt-4">
                {{-- <a aria-label="Facebook" class="text-gray-300 hover:text-[#00b4d8] transition-colors text-2xl"
                    href="https://www.facebook.com/skyotelglobal"><i class="fab fa-facebook-f"></i></a>
                <a aria-label="Email" class="text-gray-300 hover:text-[#00b4d8] transition-colors text-2xl"
                    href="mailto:skyotelglobal@gmail.com"><i class="fas fa-envelope"></i></a>
                 --}}
            </div>
        </div>
        <!-- Navigation Menu -->
        <div>
            <h3 class="font-semibold text-white mb-8 border-b-4 border-[#00b4d8] w-max pb-2 text-xl tracking-wide">
                Navigation
            </h3>
            <ul class="space-y-5 text-gray-300 text-base">
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="/about">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="/visa-assistance">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Visa Assistance</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="/study-abroad">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Study Abroad</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Our Services</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>FAQs</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Quick Links -->
        <div>
            <h3 class="font-semibold text-white mb-8 border-b-4 border-[#00b4d8] w-max pb-2 text-xl tracking-wide">
                Quick Links
            </h3>
            <ul class="space-y-5 text-gray-300 text-base">
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Book Your Ticket Now</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="/contact">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Contact Us</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Privacy Policy</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Refund and Returns Policy</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Terms and Conditions</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center space-x-3 hover:text-white transition-colors" href="#">
                        <svg class="w-5 h-5 text-[#00b4d8] flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                        <span>Careers</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Newsletter & Contact -->
        <div class="flex flex-col ">
            <h3 class="font-semibold text-white mb-8 border-b-4 border-[#00b4d8] w-max pb-2 text-xl tracking-wide">
                Stay Connected
            </h3>
            {{-- <p class="mb-6 text-gray-400 text-sm leading-relaxed">
                Subscribe to our newsletter to get the latest updates and offers.
            </p> --}}
                <div class="flex justify-evenly mb-2">
                    <a aria-label="Facebook" class="text-gray-300 hover:text-[#00b4d8] transition-colors text-2xl"
                    href="https://www.facebook.com/skyotelglobal"><i class="fab fa-facebook-f"></i></a>
                <a aria-label="Email" class="text-gray-300 hover:text-[#00b4d8] transition-colors text-2xl"
                    href="mailto:skyotelglobal@gmail.com"><i class="fas fa-envelope"></i></a>

                </div>
            <form class="flex flex-col gap-4" action="{{ route('subscribe') }}" method="POST">
              @csrf
                <input aria-label="Email address"
                    name="name"
                    class=" hidden"
                    type="text" />
                <input aria-label="Email address"
                    name="email"
                    class="flex-grow px-4 py-3 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-[#00b4d8]"
                    placeholder="Enter your email" required type="email" />
                <button
                    class="bg-[#00b4d8] hover:bg-[#0096c7] transition-colors text-white font-semibold px-6 py-3 rounded-md shadow-md"
                    type="submit">
                    Subscribe
                </button>
            </form>
            <div class="mt-10 space-y-4 text-gray-400 text-sm">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-phone-alt text-[#00b4d8] text-lg"></i>
                    <a class="hover:text-white transition-colors" href="tel:{{ $website->phone }}">{{ $website->phone }}</a>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fas fa-envelope text-[#00b4d8] text-lg"></i>
                    <a class="hover:text-white transition-colors"
                        href="mailto:{{ $website->email }}">{{ $website->email }}</a>
                </div>
                {{-- <div class="flex items-center space-x-3">
                    <i class="fas fa-map-marker-alt text-[#00b4d8] text-lg"></i>
                    <span>492/20, City Lights (1st Floor), Bashundhara Apollo Hospital Link Road,
                        Dhaka, Bangladesh</span>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Payment Methods -->
    <div class="bg-[#16213e] py-8">
        <div class="mx-auto flex flex-wrap justify-center gap-8 items-center">
            <img alt="Visa credit card logo in blue and white colors" class="object-contain rounded"
                loading="lazy"
                src="{{ asset('uploads/ssl.png') }}"
                width="auto"
                height="100px" />
        </div>
    </div>
    <!-- Bottom copyright -->
    <div class="bg-[#0a1128] text-gray-400 text-center text-xs py-4 select-none">
        © 2025 B2B Solutions. All Rights Reserved. Developed By
        <a class="text-[#00b4d8] font-semibold hover:underline" href="https://vida.com.bd/" target="_blank">Vida Technology</a>.
    </div>



    <!-- Scroll to top button -->
    <a  href="http://www.facebook.com/skyotelglobal" target="_blank" aria-label="Scroll to top"
        class="fixed bottom-24 right-8 bg-transparent"
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" title="Scroll to top" type="button">
        <i class="fab fa-facebook-messenger text-[#006AFF] text-[48px]"></i>
    </a>

    <a  href="https://wa.me/8801733311644?text=Hello%20I%20have%20a%20question" target="_blank" aria-label="Scroll to top"
        class="fixed bottom-6 right-6 bg-transparent"
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" title="Scroll to top" type="button">
        <svg width="64px" height="64px" viewBox="-1.92 -1.92 35.84 35.84" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"></path> <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"></path> <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"></path> <defs> <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse"> <stop stop-color="#5BD066"></stop> <stop offset="1" stop-color="#27B43E"></stop> </linearGradient> </defs> </g></svg>
    </a>
</footer>
