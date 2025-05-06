<x-app-layout-frontend>
    @section('content')

        <div class="bg-gradient-to-b from-indigo-50 to-white min-h-screen py-12">
            <div class="container mx-auto px-4">
                <!-- University Header -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-8">
                    <div class="relative h-64 bg-indigo-600">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-indigo-400"></div>
                        <div class="absolute bottom-0 left-0 w-full p-8 flex items-end">
                            <div class="flex items-center space-x-6">
                                <div class="w-32 h-32 bg-white rounded-xl shadow-lg p-2">
                                    <img src="{{ asset('storage/' . $university->image) }}" alt="{{ $university->name }}"
                                        class="w-full h-full object-contain">
                                </div>
                                <div>
                                    <h1 class="text-4xl font-bold text-white mb-2">{{ $university->name }}</h1>
                                    <p class="text-indigo-100 flex items-center">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        {{ $university->countries }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- University Content -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- About Section -->
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h2 class="text-2xl font-bold text-indigo-900 mb-4">About University</h2>
                            <div class="prose max-w-none text-gray-600">
                                {!! $university->description !!}
                            </div>
                        </div>

                        <!-- Programs Section -->
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h2 class="text-2xl font-bold text-indigo-900 mb-4">Available Programs</h2>
                            <div class="space-y-4">
                                {{-- @php
                                    $degreeIds = explode(',', $university->degrees);
                                    $degrees = \App\Models\Degree::whereIn('id', $degreeIds)->get();
                                @endphp --}}

                                @foreach($degrees as $degree)
                                    <div class="flex items-center space-x-3 text-gray-700">
                                        <i class="fas fa-graduation-cap text-indigo-500"></i>
                                        <span>{{ $degree->name }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="bg-white rounded-2xl shadow-lg p-8">
                            <h2 class="text-2xl font-bold text-indigo-900 mb-6">Additional Information</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-info-circle text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Short Intro</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->short_intro }}</p>
                                </div>
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-calendar-alt text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Session Intake</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->session_intake }}</p>
                                </div>
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-check-circle text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Eligibility</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->eligibility }}</p>
                                </div>
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-clock text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Application Deadline</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->application_deadline }}</p>
                                </div>
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-file-alt text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Documents Required</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->documents_required }}</p>
                                </div>
                                <div class="bg-indigo-50 rounded-xl p-6 transition-all duration-300 hover:shadow-md">
                                    <div class="flex items-center space-x-3 text-indigo-700 mb-3">
                                        <i class="fas fa-dollar-sign text-2xl"></i>
                                        <h3 class="font-semibold text-lg">Cost</h3>
                                    </div>
                                    <p class="text-gray-700">{{ $university->cost }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-8">
                        <!-- Quick Info -->
                            <!-- <div class="bg-white rounded-2xl shadow-lg p-6">
                                <h3 class="text-xl font-bold text-indigo-900 mb-4">Quick Information</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center space-x-3 text-gray-600">
                                        <i class="fas fa-globe text-indigo-500 w-6"></i>
                                        <span>{{ $university->website }}</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-gray-600">
                                        <i class="fas fa-envelope text-indigo-500 w-6"></i>
                                        <span>{{ $university->email }}</span>
                                    </div>
                                    <div class="flex items-center space-x-3 text-gray-600">
                                        <i class="fas fa-phone text-indigo-500 w-6"></i>
                                        <span>{{ $university->phone }}</span>
                                    </div>
                                </div>
                            </div> -->

                        <!-- Contact Form -->
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="text-xl font-bold text-indigo-900 mb-4">Contact Us</h3>
                            <form action="{{ route('message') }}" method="POST" class="space-y-4">
                                @csrf
                                <input type="hidden" name="countrie" value="{{ $university->countries }}">

                                <div>
                                    <label class="block text-gray-700 mb-2">Name</label>
                                    <input type="text" name="name" required
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Email</label>
                                    <input type="email" name="email" required
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Phone</label>
                                    <input type="tel" name="phone" required
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Message</label>
                                    <textarea name="message" rows="4"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-400 focus:border-transparent"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                                    Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
            .prose {
                max-width: none;
            }
            .prose p {
                margin-bottom: 1rem;
            }
        </style>
    @endsection
</x-app-layout-frontend>
