<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Degree') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Create New Degree</h1>

                <form action="{{ route('admin.degree.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Degree Name</label>
                        <input type="text" name="name" id="name" required
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

                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Create Degree
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>