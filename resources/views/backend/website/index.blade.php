<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Website All') }}
        </h2>
    </x-slot>

    <!-- Visa Types Table -->
    <div class="bg-white rounded-lg shadow p-6">
        {{-- <h2 class="text-xl font-semibold text-gray-800 mb-4">
            All Visa Types
        </h2> --}}

        <form action="{{ route('admin.website.save') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf

            <div>
                <label class="block font-medium">Website Name</label>
                <input type="text" name="name" value="{{ old('name', $website->name ?? '') }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title', $website->title ?? '') }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Description</label>
                <textarea name="description" class="w-full border rounded p-2">{{ old('description', $website->description ?? '') }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Address</label>
                <textarea name="address" id="address" rows="4" required
                    class="longDescription mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('address', $website->address ?? '') }}</textarea>
            </div>

            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" value="{{ old('email', $website->email ?? '') }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $website->phone ?? '') }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-medium">Logo</label>
                <input type="file" name="logo" class="w-full border rounded p-2">
                @if(isset($website->logo))
                    <img src="{{ asset('storage/'.$website->logo) }}" alt="Logo" class="mt-2 w-32">
                @endif
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Settings</button>
        </form>

    </div>
</x-app-layout>
