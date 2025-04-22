<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscribers All') }}
        </h2>
    </x-slot>

    <!-- Visa Types Table -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between">    
            <h2 class="text-xl font-semibold text-gray-800 mb-4">
                All Subscribers
            </h2>
            <button class="bg-green-500 text-white px-3 py-1 rounded font-semibold" onclick="window.location.href='{{ route('admin.export.subscribers') }}'">Export</button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                            Mail
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($subscribers as $subscriber)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                {{ $subscriber->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                @if ($subscriber->name)
                                    {{ $subscriber->name }}
                                @else
                                    <span class="text-red-500">Not User</span>    
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                {{ $subscriber->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                <form action="{{ route('admin.subscribe.delete', $subscriber->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this visa type?')"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                No Subscribers found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Flowbite Modal  -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Massage Details
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p id="modal-id" class="text-sm text-gray-700"></p>
                        <p id="modal-user-id" class="text-sm text-gray-700"></p>
                        <p id="modal-name" class="text-sm text-gray-700"></p>
                        <p id="modal-countries" class="text-sm text-gray-700"></p>
                        <p id="modal-message" class="text-sm text-gray-700"></p>
                    </div>
                    <!-- Modal footer -->
                </div>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.viewButton').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const userId = this.getAttribute('data-user-id');
                const name = this.getAttribute('data-name');
                const countries = this.getAttribute('data-countries');
                const message = this.getAttribute('data-message');

                // Inject data into the modal
                document.getElementById('modal-id').innerText = `ID: ${id}`;
                if (userId && userId !== "null" && userId !== "") {
                    document.getElementById('modal-user-id').innerHTML = `User ID: ${userId}`;
                } else {
                    document.getElementById('modal-user-id').innerHTML = `<span class="text-red-500">Not User</span>`;
                }
                document.getElementById('modal-name').innerText = `Name: ${name}`;
                document.getElementById('modal-countries').innerText = `Countries: ${countries}`;
                document.getElementById('modal-message').innerText = `Message: ${message}`;
            });
        });
    </script>
</x-app-layout>
