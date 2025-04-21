{{-- filepath: d:\projects\New folder\visa\resources\views\backend\visa\edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Visa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Edit Visa</h1>

                {{-- Display errors --}}
                @if ($errors->any())
                    <div class="mb-4 text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.visa.update', $visa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Visa Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Visa Name</label>
                        <input type="text" name="name" id="name" value="{{ $visa->name }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Countries -->
                    {{-- <div class="mb-4">
                        <label for="countries" class="block text-gray-700">Countries</label>
                        <select name="countries[]" id="countries" multiple
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            @foreach ($countries as $country)
                                <option value="{{ $country }}"
                                    {{ in_array($country, json_decode($visa->countries, true)) ? 'selected' : '' }}>
                                    {{ $country }}
                                </option>
                            @endforeach
                        </select>
                        <small class="text-gray-500">Hold Ctrl (Cmd on Mac) to select multiple countries.</small>
                    </div> --}}

                    <!-- Countries -->
                    <div class="mb-4">
                        <label for="countries" class="block text-gray-700">Countries</label>
                        <select name="countries" id="countries"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            required>
                            <option value="">Select a country</option>
                            @forelse ($countries as $country)
                                <option value="{{ $country->name }}" 
                                    {{ $visa->countries == $country->name ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @empty
                                <option disabled>No countries found</option>
                            @endforelse
                        </select>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" required
                            class="longDescription mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ $visa->description }}</textarea>
                    </div>

                    <!-- Eligibility -->
                    <div class="mb-4">
                        <label for="eligibility" class="block text-gray-700">Eligibility</label>
                        <textarea name="eligibility" id="eligibility" rows="4" required
                            class="longDescription mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ $visa->eligibility }}</textarea>
                    </div>

                    <!-- Processing Time -->
                    <div class="mb-4">
                        <label for="processing_time" class="block text-gray-700">Processing Time</label>
                        <input type="text" name="processing_time" id="processing_time"
                            value="{{ $visa->processing_time }}" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Update Visa
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
