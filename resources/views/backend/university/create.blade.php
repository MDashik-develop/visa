<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create University') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Create New University</h1>

                <form action="{{ route('admin.university.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">University Name</label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="short_intro" class="block text-gray-700">Short Introduction</label>
                        <textarea name="short_intro" id="short_intro" rows="2"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="session_intake" class="block text-gray-700">Session Intake</label>
                        <input type="text" name="session_intake" id="session_intake"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="eligibility" class="block text-gray-700">Eligibility</label>
                        <input type="text" name="eligibility" id="eligibility"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="application_deadline" class="block text-gray-700">Application Deadline</label>
                        <input type="text" name="application_deadline" id="application_deadline"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="documents_required" class="block text-gray-700">Required Documents</label>
                        <input type="text" name="documents_required" id="documents_required"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="cost" class="block text-gray-700">Cost</label>
                        <input type="text" name="cost" id="cost"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">University Image</label>
                        <input type="file" name="image" id="image"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4"
                            class="longDescription mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-gray-700">Status</label>
                        <select name="status" id="status"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="countries" class="block text-gray-700">Country</label>
                        <select name="countries" id="countries"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Select Countrie</option>
                            @if ($countries->count() > 0)
                                @foreach ($countries as $countrie)
                                    <option value="{{ $countrie->name }}">{{ $countrie->name }}</option>
                                @endforeach
                            @else
                                <p class="text-gray-500">No countries found</p>
                            @endif
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Degrees</label>
                        <div class="space-y-2">
                            @if ($degrees->count() > 0)
                                @foreach ($degrees as $degree)
                                    <div class="flex items-center">
                                        <input type="checkbox" name="degrees[]" id="degree_{{ $degree->id }}" value="{{ $degree->id }}"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                        <label for="degree_{{ $degree->id }}" class="ml-2 text-gray-700">{{ $degree->name }}</label>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-gray-500">No degrees found</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Create University
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>