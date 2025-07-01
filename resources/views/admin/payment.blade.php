<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card">
            <h2 class="card-title">Payment Details</h2>
        </div>
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE ONE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Bank Details</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <a href="{{ route('addpayment') }}"><span class="shrink-0">Add Payment</span></a>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">

                        <!-- START INFORMATION TABLE -->
                        <div class="overflow-x-auto mt-5">
                            <table
                                class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Bank Name
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Account
                                            Name</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Account
                                            Number</th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">Actions
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    @foreach ($banks as $account)
                                        <tr>
                                            <td class="p-6 py-4 dk-border-one"> {{ $account->bank_name }}</td>
                                            <td class="p-6 py-4 dk-border-one"> {{ $account->account_name }}</td>
                                            <td class="p-6 py-4 dk-border-one"> {{ $account->account_number }}</td>
                                            <td class="p-6 py-4 dk-border-one">
                                                <form action="{{ route('bank-accounts.destroy', $account->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this bank account?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="btn b-light btn-danger-light rounded-full">Delete</button>
                                                </form>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        {{-- <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of
                                20 entries</div>
                            <nav class="dk-border-one rounded-[4px] overflow-hidden">
                                <ul class="divide-x divide-gray-200 dark:divide-dark-border-three flex items-center">
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-4 -rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500 active">2</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">
                                            <i class="ri-more-fill text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">10</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-4 rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Crypto Details</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <a href="{{ route('addpayment') }}"><span class="shrink-0">Add Payment</span></a>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">

                        <!-- START INFORMATION TABLE -->
                        <div class="overflow-x-auto mt-5">
                            <table
                                class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one">
                                            Cryptocurrency </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Network
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Address
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    @foreach ($cryptos as $wallet)
                                        <tr>
                                            <td class="p-6 py-4 dk-border-one"> {{ $wallet->cryptocurrency }}</td>
                                            <td class="p-6 py-4 dk-border-one"> {{ $wallet->network }}</td>
                                            <td class="p-6 py-4 dk-border-one">{{ $wallet->wallet_address }}</td>
                                            <td class="p-6 py-4 dk-border-one">
                                                <form action="{{ route('crypto-wallets.destroy', $wallet->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this wallet?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="btn b-light btn-danger-light rounded-full">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- START PAGINATION -->
                        {{-- <div class="flex-center-between mt-5">
                            <div class="font-spline_sans text-sm text-gray-900 dark:text-dark-text">Showing 1 to 8 of
                                20 entries</div>
                            <nav class="dk-border-one rounded-[4px] overflow-hidden">
                                <ul class="divide-x divide-gray-200 dark:divide-dark-border-three flex items-center">
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-4 -rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m19.5 19.5-15-15m0 0v11.25m0-11.25h11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500 active">2</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">
                                            <i class="ri-more-fill text-inherit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-icon hover:text-primary-500 [&.active]:text-primary-500">10</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="font-spline_sans font-medium flex-center size-8 text-gray-900 dark:text-dark-text bg-white dark:bg-dark-card-two hover:bg-primary-500 hover:text-white [&.active]:bg-primary-500 [&.active]:text-white active">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-4 rotate-45">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
