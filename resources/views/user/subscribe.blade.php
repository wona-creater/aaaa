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

            <div id="paymentModal"
                class="fixed inset-0 bg-black bg-opacity-60 hidden flex items-center justify-center z-50 px-4 sm:px-6 xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)]">
                <div
                    class="bg-white dark:bg-gray-900 p-4 sm:p-6 lg:p-8 rounded-2xl w-full max-w-md sm:max-w-lg lg:max-w-2xl mx-4 shadow-2xl transform transition-all duration-300">
                    <div class="flex justify-between items-center mb-5">
                        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white">Payment
                            Details</h2>
                        <button onclick="closeModal()"
                            class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white transition-colors">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h3
                                class="text-base sm:text-lg lg:text-xl font-semibold text-gray-900 dark:text-white mb-3">
                                Bank Details</h3>
                            <div class="space-y-3">
                                @foreach ($banks as $bank)
                                    <div class="bg-gray-100 dark:bg-gray-800 p-3 sm:p-4 rounded-xl">
                                        <p class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300">
                                            Bank: {{ $bank->bank_name }}</p>
                                        <p class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300">
                                            Name: {{ $bank->account_name }}</p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <p
                                                class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300 flex-1">
                                                Number: {{ $bank->account_number }}</p>
                                            <button onclick="copyToClipboard('{{ $bank->account_number }}')"
                                                class="text-primary-500 hover:text-primary-600 dark:text-primary-400 dark:hover:text-primary-300 transition-colors p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700"
                                                title="Copy">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-base sm:text-lg lg:text-xl font-semibold text-gray-900 dark:text-white mb-3">
                                Crypto Details</h3>
                            <div class="space-y-3">
                                @foreach ($cryptos as $crypto)
                                    <div class="bg-gray-100 dark:bg-gray-800 p-3 sm:p-4 rounded-xl">
                                        <p class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300">
                                            Name: {{ $crypto->cryptocurrency }}</p>
                                        <p class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300">
                                            Network: {{ $crypto->network }}</p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <p
                                                class="text-xs sm:text-sm lg:text-base text-gray-700 dark:text-gray-300 flex-1">
                                                Address: {{ $crypto->wallet_address }}</p>
                                            <button onclick="copyToClipboard('{{ $crypto->wallet_address }}')"
                                                class="text-primary-500 hover:text-primary-600 dark:text-primary-400 dark:hover:text-primary-300 transition-colors p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700"
                                                title="Copy">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button onclick="closeModal()"
                        class="mt-6 w-full py-2.5 sm:py-3 bg-primary-500 text-white rounded-full hover:bg-primary-600 dark:hover:bg-primary-400 transition-colors text-sm sm:text-base lg:text-lg font-medium">
                        Close
                    </button>
                </div>
            </div>

            <style>
                .ac-transition {
                    transition: all 0.3s ease;
                }

                .text-primary-500 {
                    color: #3b82f6;
                }

                .text-primary-600 {
                    color: #2563eb;
                }

                .bg-primary-500 {
                    background-color: #3b82f6;
                }

                .bg-primary-600 {
                    background-color: #2563eb;
                }

                .dark\:bg-gray-900 {
                    background-color: #111827;
                }

                .dark\:text-white {
                    color: #ffffff;
                }

                .dark\:text-gray-300 {
                    color: #d1d5db;
                }

                .dark\:bg-gray-800 {
                    background-color: #1f2937;
                }

                .dark\:text-primary-400 {
                    color: #60a5fa;
                }

                .dark\:hover\:text-primary-300:hover {
                    color: #93c5fd;
                }

                .dark\:hover\:bg-primary-400:hover {
                    background-color: #60a5fa;
                }

                @media (max-width: 639px) {
                    .max-w-md {
                        max-width: 100%;
                    }
                }

                @media (min-width: 640px) {
                    .sm\:px-6 {
                        padding-left: 1.5rem;
                        padding-right: 1.5rem;
                    }

                    .sm\:max-w-lg {
                        max-width: 32rem;
                    }

                    .sm\:p-6 {
                        padding: 1.5rem;
                    }

                    .sm\:text-2xl {
                        font-size: 1.5rem;
                    }

                    .sm\:text-base {
                        font-size: 1rem;
                    }

                    .sm\:text-sm {
                        font-size: 0.875rem;
                    }

                    .sm\:py-3 {
                        padding-top: 0.75rem;
                        padding-bottom: 0.75rem;
                    }

                    .sm\:w-6 {
                        width: 1.5rem;
                    }

                    .sm\:h-6 {
                        height: 1.5rem;
                    }
                }

                @media (min-width: 1024px) {
                    .lg\:p-8 {
                        padding: 2rem;
                    }

                    .lg\:text-3xl {
                        font-size: 1.875rem;
                    }

                    .lg\:text-xl {
                        font-size: 1.25rem;
                    }

                    .lg\:text-base {
                        font-size: 1rem;
                    }

                    .lg\:text-lg {
                        font-size: 1.125rem;
                    }

                    .lg\:max-w-2xl {
                        max-width: 42rem;
                    }
                }

                @media (min-width: 1280px) {
                    .xl\:ml-[calc(theme('spacing.app-menu')_+_16px)] {
                        margin-left: calc(256px + 16px);
                    }

                    .group-data-[sidebar-size=sm]\:xl\:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] {
                        margin-left: calc(64px + 16px);
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

                function copyToClipboard(text) {
                    navigator.clipboard.writeText(text).then(() => {
                        alert('Copied to clipboard!');
                    }).catch(err => {
                        console.error('Failed to copy: ', err);
                    });
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
                                    <input type="text" id="firstName" class="form-input" name="code"
                                        placeholder="Enter your payment code" required>
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
                                        <a href="#"
                                            class="hover:text-heading dark:hover:text-dark-text-two"><b>Code</b>:
                                            {{ $activeCode->code }}</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:text-heading dark:hover:text-dark-text-two"><b>Start Date</b>
                                            :{{ $activeCode->start_date->format('m / d') }}</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:text-heading dark:hover:text-dark-text-two"><b>End Date</b>
                                            :{{ $activeCode->end_date->format('m / d') }}</a>
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
