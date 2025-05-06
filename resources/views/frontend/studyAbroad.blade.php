<x-app-layout-frontend>
    @section('content')
        <!-- Hero Carousel Section -->
        <section class="relative overflow-x-hidden">
            <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col-reverse lg:flex-row items-center gap-16 relative z-10">
                <!-- Left content -->
                <section class="lg:w-1/2 max-w-lg">
                    <h1 class="text-5xl sm:text-6xl font-extrabold leading-tight mb-6 text-gray-800 fade-in-up delay-1">
                        <span class="text-[#7AC37A] font-semibold">Visa typically</span><br />
                        <span class="font-semibold">issued by a<br />country’s</span>
                    </h1>
                    <p class="text-gray-600 mb-10 leading-relaxed font-light fade-in-up delay-2">
                        A visa is an official document that permits entry into a specific country. It indicates the holder's
                        permission to stay either temporarily.
                    </p>
                    <form class="flex flex-col sm:flex-row gap-8 mb-12 fade-in-up delay-3">
                        <div class="flex flex-col w-full sm:w-1/2">
                            <label for="countries" class="font-semibold text-gray-800 mb-2">Which Country?</label>
                            <select id="countries" name="countries"
                                class="rounded-full border border-gray-300 px-8 py-3 text-gray-600 text-base focus:outline-none focus:ring-2 focus:ring-[#7AC37A]">
                                <option value="">Select a country</option>
                                @forelse ($countries as $countrie)
                                    <option value="{{ $countrie->name }}">{{ $countrie->name }}</option>
                                @empty
                                    <option disabled>No countries found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="flex flex-col w-full sm:w-1/2">
                            <label for="degree" class="font-semibold text-gray-800 mb-2">Which Degree?</label>
                            <select id="degree" name="degree"
                                class="rounded-full border border-gray-300 px-8 py-3 text-gray-600 text-base focus:outline-none focus:ring-2 focus:ring-[#7AC37A]">
                                <option value="">Select a degree</option>
                            </select>
                        </div>
                    </form>
                    <button id="search-visa-btn"
                        class="bg-[#0A1128] text-white font-semibold rounded-full px-10 py-4 flex items-center gap-3 btn-hover transition-shadow shadow-md"
                        type="submit">
                        Search Visa <i class="fas fa-arrow-right"></i>
                    </button>
                </section>

                <!-- Right image and badges -->
                <section class="relative lg:w-full flex justify-end items-center fade-in-up delay-3">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=400&q=80"
                        alt="Smiling man with curly hair holding passport and ticket, wearing floral shirt"
                        class="relative z-10 rounded-full shadow-lg transform transition-transform duration-500 hover:scale-105"
                        width="400" height="400" />
                    <!-- Swiss flag badge -->
                    <div
                        class="absolute top-[25%] right-[320px] w-12 h-12 rounded-full bg-[#FFF7D1] flex justify-center items-center shadow-md z-20 animate-pulse">
                        <img src="https://flagcdn.com/w40/ch.png" alt="Swiss flag emoji icon" class="w-6 h-6" width="24"
                            height="24" />
                    </div>
                    <!-- Canadian flag badge -->
                    <div
                        class="absolute top-[33%] right-[-10px] w-12 h-12 rounded-full bg-[#F9D9E8] flex justify-center items-center shadow-md z-20 animate-pulse delay-150">
                        <img src="https://flagcdn.com/w40/ca.png" alt="Canadian flag emoji icon" class="w-6 h-6"
                            width="24" height="24" />
                    </div>

                    <!-- Trust score box -->
                    <div
                        class="absolute bottom-[15px] right-[120px] bg-[#F0F5E9] rounded-xl p-6 w-60 shadow-md z-30 transform transition-transform duration-300 hover:scale-105">
                        <p class="text-3xl font-extrabold text-[#0A1128] flex items-center gap-3">
                            4.9/5 <i class="fas fa-star text-yellow-400"></i>
                        </p>
                        <p class="text-gray-700 mt-2 text-base font-light">
                            Explore our trust score customer’s reviews
                        </p>
                    </div>
                </section>
            </div>
        </section>
        <!-- Visa result Section -->
        <section class="university-result-section-main">
            <div
                class="bg-gradient-to-tr from-indigo-100 via-white to-indigo-100 min-h-screen flex items-center justify-center p-6">
                <div class="universities-list  space-y-14 w-full max-w-7xl" id="universities-list">

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
                        {{-- <div class="flex items-center space-x-6">
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
                             </div> --}}
                        <div class="absolute bottom-6 right-6 opacity-20 select-none pointer-events-none">
                            <img alt="Vector art of a support agent with headset and laptop" class="rotate-12"
                                height="250"
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
                        <form class="space-y-8 max-w-lg" action="{{ route('message') }}" method="POST">
                            @csrf
                            @if (session('success'))
                                <div class="mb-4 text-green-600 font-medium">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                @auth
                                    <input class=" hidden" type="number" name="user_id" value="{{ auth()->id() }}">
                                @endauth
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="far fa-user">
                                        </i>
                                    </span>
                                    <input name="name"
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="Goladria Gomez" type="text" />
                                </label>
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="far fa-envelope">
                                        </i>
                                    </span>
                                    <input name="email"
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="example@evisa.com" type="email" />
                                </label>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="fas fa-phone-alt">
                                        </i>
                                    </span>
                                    <input name="countrie"
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="Countrie To Go" type="text" />
                                </label>
                                <label class="relative block">
                                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                        <i class="fas fa-phone-alt">
                                        </i>
                                    </span>
                                    <input name="phone"
                                        class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                        placeholder="+888 -8867 3333" type="tel" />
                                </label>
                            </div>
                            <label class="relative block">
                                <span class="absolute top-4 left-4 flex items-center text-gray-400">
                                    <i class="far fa-comment-dots">
                                    </i>
                                </span>
                                <textarea name="message"
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

        <style>
            .university-result-section-main {
                display: none;
            }

            .eligibility,
            .cost {
                ul {
                    list-style-type: disc;
                    list-style-position: inside;
                    color: #4a5568;
                    font-size: 1.125rem;
                }

                ul>li {
                    /* margin-bottom: 0.75rem; */
                    /* Converts space-y-3 (0.75rem is usually the spacing for space-y-3 in Tailwind) */
                }
            }

            /* Button shine animation */
            @keyframes shine {
                0% {
                    background-position: -200% 0;
                }

                100% {
                    background-position: 200% 0;
                }
            }

            .btn-shine {
                background: linear-gradient(90deg,
                        #4f46e5 25%,
                        #a5b4fc 50%,
                        #4f46e5 75%);
                background-size: 200% 100%;
                animation: shine 3s linear infinite;
            }
        </style>

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @endpush
        <script>
           $('#countries').on('change', function() {
    var countries = $(this).val();

    if (countries) {
        $.ajax({
            url: "{{ route('visa.assistance.get.by.countries') }}",
            method: 'GET',
            data: {
                countries: countries
            },
            success: function(response) {
                $('#degree').empty();
                $('#degree').append('<option value="">Select Degree</option>');

                if (response.degrees && response.degrees.length > 0) {
                    $.each(response.degrees, function(key, degree) {
                        $('#degree').append('<option value="' + degree.id + '">' + degree.name + '</option>');
                    });
                } else {
                    $('#degree').append('<option value="">No degrees available</option>');
                }

                //=========== Fetch universities ============
                $('.university-result-section-main').show();

                console.log(response.universities);

                // Clear any existing university listings before adding new ones
                $('#universities-list').empty();

                response.universities.forEach(function(university) {
                    var degreeNames = '';
                    if (university.degree_names && Array.isArray(university.degree_names)) {
                        degreeNames = university.degree_names.join(', ');
                    } else {
                        degreeNames = 'No degrees listed';
                    }

                    var imageUrl = '{{ asset('storage/') }}' + '/' + university.image;
                    var universityHtml = `
                        <article class="flex flex-col sm:flex-row items-center sm:items-start bg-white rounded-3xl glow-indigo border border-indigo-300 p-8 gap-8 hover:shadow-indigo-600 transition-shadow duration-400 relative overflow-hidden">
                            <div class="absolute -left-10 top-1/2 -translate-y-1/2 w-40 h-40 rounded-full bg-gradient-to-tr from-indigo-400 to-indigo-200 opacity-30 blur-3xl pointer-events-none sm:-left-16"></div>
                            <div class="flex-shrink-0 w-36 h-36 rounded-full bg-indigo-50 border-8 border-indigo-300 shadow-lg flex items-center justify-center transition-transform duration-500 hover:scale-110 z-10">
                                <img src="${imageUrl}" alt="Logo of ${university.name}" class="w-28 h-28 rounded-full object-contain drop-shadow-md" />
                            </div>
                            <div class="flex flex-col flex-grow max-w-xl z-10 min-h-[144px] justify-between">
                                <div>
                                    <h3 class="text-4xl font-extrabold text-indigo-900 mb-3 drop-shadow-md tracking-wide">${university.name}</h3>
                                    <p class="text-indigo-700 font-semibold mb-2 flex items-center space-x-3 text-lg">
                                        <i class="fas fa-globe-americas text-indigo-500 text-xl"></i>
                                        <span>Country: ${university.countries}</span>
                                    </p>
                                    <p class="text-indigo-600 mb-4 flex items-center space-x-3 text-lg">
                                        <i class="fas fa-graduation-cap text-indigo-400 text-xl"></i>
                                        <span>Degrees: ${degreeNames}</span>
                                    </p>
                                    <p class="text-gray-800 leading-relaxed text-lg drop-shadow-sm">
                                        ${university.short_intro || 'No description available.'}
                                    </p>
                                </div>
                                <button class="mt-6 self-start relative overflow-hidden rounded-full px-8 py-3 font-semibold text-white shadow-lg bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-400 focus:ring-offset-2 transition-colors duration-300 btn-shine" aria-label="View details about ${university.name}">
                                    View Details
                                    <i class="fas fa-arrow-right ml-1 text-white opacity-80 transition-transform duration-300"></i>
                                </button>
                            </div>
                        </article>
                    `;
                    $('#universities-list').append(universityHtml);
                });

                // Show the result section
                // $('.university-result-section-main').show();

            },
            error: function() {
                alert('Error fetching data!');
            }
        });
    } else {
        $('#degree').empty();
        $('#degree').append('<option value="">Select Degree</option>');
    }
});



            $('#search-visa-btn').on('click', function(e) {
                e.preventDefault();

                var countries = $('#countries').val();
                var degree = $('#degree').val();

                if (countries && degree) {
                    $.ajax({
                        url: "{{ route('study.abroad.result') }}",
                        method: 'GET',
                        data: {
                            degree: degree,
                            countries: countries
                        },
                        success: function(universities) {
                            console.log(universities);

                            if (universities.length > 0) {
                                $('#universities-list').empty(); // Clear previous results

                                universities.forEach(function(university) {
                                    var degreeNames = university.degree_names.join(
                                        ', ');

                                    var imageUrl = '{{ asset('storage/') }}' + '/' + university
                                        .image;
                                    var universityHtml =
                                        `
                                    <article class="flex flex-col sm:flex-row items-center sm:items-start bg-white rounded-3xl glow-indigo border border-indigo-300 p-8 gap-8 hover:shadow-indigo-600 transition-shadow duration-400 relative overflow-hidden">
                                        <div class="absolute -left-10 top-1/2 -translate-y-1/2 w-40 h-40 rounded-full bg-gradient-to-tr from-indigo-400 to-indigo-200 opacity-30 blur-3xl pointer-events-none sm:-left-16"></div>
                                        <div class="flex-shrink-0 w-36 h-36 rounded-full bg-indigo-50 border-8 border-indigo-300 shadow-lg flex items-center justify-center transition-transform duration-500 hover:scale-110 z-10">
                                            <img src="${imageUrl}" alt="Logo of ${university.name}" class="w-28 h-28 rounded-full object-contain drop-shadow-md" />
                                        </div>
                                        <div class="flex flex-col flex-grow max-w-xl z-10 min-h-[144px] justify-between">
                                            <div>
                                                <h3 class="text-4xl font-extrabold text-indigo-900 mb-3 drop-shadow-md tracking-wide">${university.name}</h3>
                                                <p class="text-indigo-700 font-semibold mb-2 flex items-center space-x-3 text-lg">
                                                    <i class="fas fa-globe-americas text-indigo-500 text-xl"></i>
                                                    <span>Country: ${university.countries}</span>
                                                </p>
                                                <p class="text-indigo-600 mb-4 flex items-center space-x-3 text-lg">
                                                    <i class="fas fa-graduation-cap text-indigo-400 text-xl"></i>
                                                    <span>Degrees: ${degreeNames}</span>
                                                </p>
                                                <p class="text-gray-800 leading-relaxed text-lg drop-shadow-sm">
                                                    ${university.short_intro || 'No description available.'}
                                                </p>
                                            </div>
                                            <button class="mt-6 self-start relative overflow-hidden rounded-full px-8 py-3 font-semibold text-white shadow-lg bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-400 focus:ring-offset-2 transition-colors duration-300 btn-shine" aria-label="View details about ${university.name}">
                                                View Details
                                                <i class="fas fa-arrow-right ml-1 text-white opacity-80 transition-transform duration-300"></i>
                                            </button>
                                        </div>
                                    </article>
                                `;

                                    // Append the generated HTML to the universities list
                                    $('#universities-list').append(universityHtml);
                                });

                                // Show the result section
                                $('.university-result-section-main').show();
                            } else {
                                alert("No universities found or invalid response!");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            alert('Error fetching degree result! ' + error);
                        }
                    });
                }
            });
        </script>
    @endsection
</x-app-layout-frontend>
