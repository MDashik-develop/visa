<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Website Content') }}
        </h2>
    </x-slot>

    <section class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <!-- Title -->
            <div>
                <label class="block font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title', $slider->title) }}" class="w-full border rounded p-2">
            </div>
        
            <!-- Description -->
            <div>
                <label class="block font-medium">Description</label>
                <textarea name="description" class="w-full border rounded p-2">{{ old('description', $slider->description) }}</textarea>
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select name="status" id="status"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="1" {{ $slider->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $slider->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        
            <!-- Image -->
            <div>
                <label class="block font-medium">Image</label>
                <input type="file" name="image" class="w-full border rounded p-2">
                <small class="text-gray-500 block mb-2">Recommended size: 1920 × 858px</small>
                @if ($slider->image)
                    <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" class="mt-2 w-32">
                @endif
            </div>
        
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Slider</button>
        </form>
    </section>
</x-app-layout>
