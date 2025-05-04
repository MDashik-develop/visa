<x-app-layout-frontend>
    @section('content')
        <section class="flex-grow max-w-6xl mx-auto px-4 sm:px-6 lg:px-6 py-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-900 mb-10 text-center tracking-tight">
                Pay Your Bill / Payments
            </h2>
            <p class="text-center text-base sm:text-lg text-gray-700 max-w-xl mx-auto mb-12 leading-relaxed">
                Pay your bill/payments by following methods:
            </p>
            <section
                class="mb-12 bg-white rounded-2xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-2xl sm:text-3xl font-bold text-purple-700 mb-5 flex items-center gap-3">
                    {{-- <i class="fab fa-btc text-3xl sm:text-4xl">
                    </i> --}}
                    <svg width="64px" height="64px" viewBox="-12 -12 72.00 72.00" xmlns="http://www.w3.org/2000/svg" fill=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke:#7e22ce;stroke-linecap:round;stroke-linejoin:round;}</style></defs><path class="a" d="M22.9814,8.6317s-4.1632,14.704-3.8089,14.704,16.4755,2.923,16.4755,2.923Z"></path><polyline class="a" points="22.981 8.632 6.329 6.152 19.172 23.336 21.387 33.522 35.648 26.259 39.368 17.445 30.393 18.946"></polyline><polyline class="a" points="37.929 20.855 43 20.855 39.368 17.445"></polyline><polyline class="a" points="21.387 33.522 21.741 35.427 13.725 41.848 19.172 23.336"></polyline><polyline class="a" points="35.648 26.259 35.117 29.138 22.848 32.778"></polyline><polyline class="a" points="8.455 8.997 5 8.997 16.044 19.15"></polyline></g></svg>
                    For Bkash payment:
                </h3>
                <div class="text-gray-800 text-base sm:text-lg leading-relaxed space-y-3">
                    <p>
                        Please send your payment to our official Bkash number:
                        <span class="font-semibold text-purple-700 text-lg sm:text-xl">
                            017XXXXXXXX
                        </span>
                        .
                    </p>
                    <p>
                        After payment, send your transaction ID and details to our support
                        via email or WhatsApp for confirmation.
                    </p>
                    <div class="mt-5 p-3 bg-purple-50 border border-purple-200 rounded-lg flex items-center gap-3 max-w-sm">
                        <img alt="Bkash logo in red and white colors, representing mobile financial service"
                            class="w-12 h-12 object-contain" height="48"
                            src="https://storage.googleapis.com/a1aa/image/0e220050-7dad-43c5-bb5d-9b4161c0d00e.jpg"
                            width="48" />
                        <div>
                            <p class="font-semibold text-purple-700 text-base sm:text-lg">
                                Bkash Number
                            </p>
                            <p class="text-gray-700 text-lg sm:text-xl tracking-wide">
                                017XXXXXXXX
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="mb-12 bg-white rounded-2xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-2xl sm:text-3xl font-bold text-green-700 mb-5 flex items-center gap-3">
                    <i class="fas fa-credit-card text-3xl sm:text-4xl">
                    </i>
                    For card/MFS payment:
                </h3>
                <div class="text-gray-800 text-base sm:text-lg leading-relaxed space-y-3">
                    <p>
                        We accept all major credit/debit cards and Mobile Financial Services
                        (MFS) payments.
                    </p>
                    <p>
                        Use our secure payment gateway on the website or app to complete your
                        payment quickly and safely.
                    </p>
                    <div class="mt-5 p-3 bg-green-50 border border-green-200 rounded-lg flex items-center gap-4 max-w-sm">
                        <img alt="Credit and debit cards icons in blue and green colors" class="w-16 h-10 object-contain"
                            height="40"
                            src="https://storage.googleapis.com/a1aa/image/ae6144a6-e16f-4de6-08dd-e6d6add9c95b.jpg"
                            width="48" />
                        <img alt="Mobile Financial Service icon with smartphone and currency symbol"
                            class="w-12 h-12 object-contain" height="48"
                            src="https://storage.googleapis.com/a1aa/image/eee759b0-bb6c-494d-6e88-916eac0af91d.jpg"
                            width="48" />
                    </div>
                </div>
            </section>
            <section
                class="mb-12 bg-white rounded-2xl shadow-lg p-8 border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-2xl sm:text-3xl font-bold text-indigo-700 mb-6 flex items-center gap-3">
                    <i class="fas fa-university text-3xl sm:text-4xl">
                    </i>
                    For charge free NPSB transfer
                    or Bank Deposit:
                </h3>
                <div class="overflow-x-auto rounded-lg border border-gray-300 shadow-sm">
                    <table class="min-w-full bg-white divide-y divide-gray-200 text-sm sm:text-base">
                        <thead class="bg-indigo-700 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold uppercase tracking-wider" scope="col">
                                    Bank Name
                                </th>
                                <th class="px-4 py-3 text-left font-semibold uppercase tracking-wider" scope="col">
                                    Account Name
                                </th>
                                <th class="px-4 py-3 text-left font-semibold uppercase tracking-wider" scope="col">
                                    Account Number
                                </th>
                                <th class="px-4 py-3 text-left font-semibold uppercase tracking-wider" scope="col">
                                    Branch
                                </th>
                                <th class="px-4 py-3 text-left font-semibold uppercase tracking-wider" scope="col">
                                    Routing Number
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-gray-900">
                            <tr class="hover:bg-indigo-50 transition-colors duration-200 cursor-default">
                                <td class="px-4 py-4 whitespace-nowrap font-medium">
                                    Brac Bank
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    Skyotel Global
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    2067445400001
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    Bashundhara
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    060260556
                                </td>
                            </tr>
                            <tr class="hover:bg-indigo-50 transition-colors duration-200 cursor-default">
                                <td class="px-4 py-4 whitespace-nowrap font-medium">
                                    EBL
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    Skyotel Global
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    1151070002605
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    Bashundhara
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    095260550
                                </td>
                            </tr>
                            <tr class="hover:bg-indigo-50 transition-colors duration-200 cursor-default">
                                <td class="px-4 py-4 whitespace-nowrap font-medium">
                                    United Commercial Bank
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    B2B Solutions
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    0012101000000721
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    Principal
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    245275353
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    @endsection
</x-app-layout-frontend>
