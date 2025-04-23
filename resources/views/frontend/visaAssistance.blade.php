<x-app-layout-frontend>
    @section('content')

         <!-- Hero Carousel Section -->
             <div class="w-full h-[50vh] bg-gradient-to-r from-cyan-50 to-cyan-50">
                <div class="max-w-7xl mx-auto">
                    <form action="" method="POST">
                        @csrf
                        <!-- Countries -->
                        <div class="flex gap-5">
                            <div class="mb-4">
                                <label for="countries" class="block text-gray-700">Countries</label>
                                <select name="countries" id="countries"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Select a country</option>
                                    @forelse ($countries as $countrie)
                                        <option value="{{ $countrie->name }}">{{ $countrie->name }}</option>
                                    @empty
                                        <option disabled>No countries found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="visa" class="block text-gray-700">Visa</label>
                                <select name="visa" id="visa"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    required>
                                    <option value="">Select a country</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
             </div>


             <script>
                // Listen for changes on the country dropdown
                $('#countries').on('change', function() {
                    var countries = $(this).val(); // Get the selected country

                    if(countries) {
                        // Make an AJAX request to fetch visa data for the selected country
                        $.ajax({
                            url: "{{ route('visa.assistance.get') }}", // URL to handle the request
                            method: 'GET',
                            data: { countries: countries },
                            success: function(response) {
                                // Clear the current visa dropdown options
                                $('#visa').empty();

                                // Append new options based on the returned data
                                $('#visa').append('<option value="">Select Visa</option>');
                                $.each(response, function(key, visa) {
                                    $('#visa').append('<option value="'+ visa.id +'">'+ visa.name +'</option>');
                                });
                            },
                            error: function() {
                                alert('Error fetching data!');
                            }
                        });
                    } else {
                        // If no country is selected, clear the visa dropdown
                        $('#visa').empty();
                        $('#visa').append('<option value="">Select Visa</option>');
                    }
                });
            </script>

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
                                         <input
                                             name="name"
                                             class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                             placeholder="Goladria Gomez" type="text" />
                                     </label>
                                     <label class="relative block">
                                         <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                             <i class="far fa-envelope">
                                             </i>
                                         </span>
                                         <input
                                             name="email"
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
                                         <input
                                             name="countrie"
                                             class="w-full rounded-xl border border-gray-300 py-4 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:border-[#00b386] focus:ring-2 focus:ring-[#00b386] focus:outline-none transition"
                                             placeholder="Countrie To Go" type="text" />
                                     </label>
                                     <label class="relative block">
                                         <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                                             <i class="fas fa-phone-alt">
                                             </i>
                                         </span>
                                         <input
                                             name="phone"
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
                                         name="message"
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
 </x-app-layout-frontend>