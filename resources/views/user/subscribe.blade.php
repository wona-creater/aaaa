<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card p-0 overflow-hidden">
            <div
                class="flex flex-col gap-2 sm:flex-center-between sm:flex-row px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                <div>
                    <h6 class="card-title">Plans & Pricing</h6>
                </div>
                <select class="form-input form-select self-end sm:self-auto">
                    <option value="monthly">Monthly</option>

                </select>
            </div>
            <div class="p-7 xl:p-15">
                <div class="grid grid-cols-3 gap-5">
                    <div
                        class="col-span-full sm:col-auto dk-border-one p-5 xl:p-10 rounded-20 h-max hover:border-primary-500 group/pc dk-theme-card-square ac-transition">
                        <div
                            class="sm:text-lg !leading-none text-primary-500 dark:text-dark-text font-semibold bg-primary-200 dark:bg-dark-icon px-5 py-1.5 rounded-full w-max mb-5 dk-theme-card-square">
                            Popular
                        </div>
                        <div class="text-[42px] leading-none text-heading dark:text-dark-text font-extrabold mt-3 mb-8">
                            35k
                            <sub
                                class="text-base leading-none font-medium text-gray-900 dark:text-dark-text relative bottom-1">/
                                Month</sub>
                        </div>
                        <button onclick="openModal()"
                            class="dk-border-one text-heading dark:text-dark-text flex items-center justify-center w-full py-3.5 rounded-full hover:!bg-primary-500 group-hover/pc:text-white group-hover/pc:bg-primary-400 group-hover/pc:translate-y-[44px] xl:group-hover/pc:translate-y-[64px] dk-theme-card-square ac-transition">
                            Choose Plan
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="paymentModal"
                class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl max-w-md w-full mx-4">
                    <h2 class="text-2xl font-bold text-heading dark:text-dark-text mb-4">Payment Details</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text">Bank Details</h3>
                            @foreach ($banks as $bank)
                                <p class="text-gray-700 dark:text-gray-300">Bank: {{ $bank->bank_name }} </p>
                                <p class="text-gray-700 dark:text-gray-300">Name: {{ $bank->account_name }} </p>
                                <p class="text-gray-700 dark:text-gray-300">Number: {{ $bank->account_number }} </p>
                            @endforeach

                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-dark-text">Crypto Details</h3>
                            @foreach ($cryptos as $crypto)
                                <p class="text-gray-700 dark:text-gray-300">Name: {{ $crypto->cryptocurrency }} <br>
                                    Network: {{ $crypto->network }} <br> Address: {{ $crypto->wallet_address }}
                                </p>
                                <br>
                            @endforeach

                        </div>
                    </div>
                    <button onclick="closeModal()"
                        class="mt-6 w-full py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600">Close</button>
                </div>
            </div>

            <style>
                .dk-border-one {
                    border: 1px solid #e5e7eb;
                }

                .rounded-20 {
                    border-radius: 20px;
                }

                .text-heading {
                    color: #1f2937;
                }

                .text-primary-500 {
                    color: #3b82f6;
                }

                .bg-primary-500 {
                    background-color: #3b82f6;
                }

                .bg-primary-200 {
                    background-color: #bfdbfe;
                }

                .hover\:bg-primary-600:hover {
                    background-color: #2563eb;
                }

                .dark\:bg-gray-800 {
                    background-color: #1f2937;
                }

                .dark\:text-dark-text {
                    color: #f3f4f6;
                }

                .dark\:bg-dark-icon {
                    background-color: #374151;
                }

                .dark\:text-gray-300 {
                    color: #d1d5db;
                }

                .flex-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .ac-transition {
                    transition: all 0.3s ease;
                }

                @media (min-width: 640px) {
                    .sm\:col-auto {
                        grid-column: auto;
                    }

                    .sm\:text-lg {
                        font-size: 1.125rem;
                    }
                }

                @media (min-width: 1280px) {
                    .xl\:p-15 {
                        padding: 3.75rem;
                    }

                    .xl\:p-10 {
                        padding: 2.5rem;
                    }
                }
            </style>

            <script>
                function openModal() {
                    document.getElementById('paymentModal').classList.remove('hidden');
                }

                function closeModal() {
                    document.getElementById('paymentModal').classList.add('hidden');
                }
            </script>


        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Account Setting Form -->
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">Activate Subscription</h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="{{ route('codes.use') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">Subscription Code</label>
                                    <input type="text" id="firstName"  class="form-input"
                                        name="code" placeholder="Enter your payment code" required>
                                </div>
                            </div>
                            @error('code')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Activate</span>
                                </button>
                            </div>
                        </form> <br>

                        @if (session('success'))
                            <div class="mt-4 text-green-600 text-sm">{{ session('success') }}</div>
                        @elseif (session('error'))
                            <div class="mt-4 text-red-600 text-sm">{{ session('error') }}</div>
                        @endif

                        @if (auth()->user()->codes()->where('status', 'active')->exists())
                            @php
                                $activeCode = auth()->user()->codes()->where('status', 'active')->first();
                            @endphp
                            <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left">
                                <div class="flex-center-between">
                                    <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">
                                        Subscription
                                        Details</h6>

                                </div>
                                <ul
                                    class="flex flex-col gap-y-3 *:flex *:items-center *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4">
                                    <li>
                                        <a href="#" class="hover:text-heading dark:hover:text-dark-text-two"><b>Code</b>: {{ $activeCode->code }}</a>
                                    </li>
                                    <li>
                                        <a href="#"  class="hover:text-heading dark:hover:text-dark-text-two"><b>Start Date</b> :{{ $activeCode->start_date->format('m / d') }}</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:text-heading dark:hover:text-dark-text-two"><b>End Date</b> :{{ $activeCode->end_date->format('m / d') }}</a>
                                    </li>

                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Account Setting Form -->


        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
