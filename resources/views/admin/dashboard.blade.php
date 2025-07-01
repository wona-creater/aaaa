<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card">
            <div class="p-1.5">
                <div class="flex-center-between">
                    <div class="flex items-center gap-5">
                        <h6 class="leading-none text-[28px] font-semibold text-heading hidden md:block">All Users</h6>

                    </div>

                </div>
                <!-- Start All Course Tabel -->
                <div class="overflow-x-auto scrollbar-table">
                    <table
                        class="table-auto w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium leading-none mt-5">
                        <thead
                            class="font-semibold relative z-[1] before:absolute before:size-full before:bg-[#F4F4F4] dark:before:bg-dark-icon before:rounded-10 before:-z-[1] before:dk-theme-card-square">
                            <tr>
                                <th class="px-3.5 py-4">Name</th>
                                <th class="px-3.5 py-4">Email</th>
                                <th class="px-3.5 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody
                            class="divide-y divide-gray-200 dark:divide-dark-border-three text-heading dark:text-dark-text">
                            @foreach ($users as $user)
                                <tr>

                                    <td class="px-3.5 py-5"> {{ $user->name }}</td>
                                    <td class="px-3.5 py-5"> {{ $user->email }}</td>
                                    <td class="px-3.5 py-5">
                                        <form action="{{ route('admin.destroy', $user->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn b-light btn-danger-light rounded-full">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End All Course Tabel -->

                {{-- <!-- Start Pagination -->
                <div class="flex-center-between border-t-[0.5px] border-gray-200 dark:border-dark-border pt-4">
                    <div class="leading-none text-xs font-semibold text-gray-900 dark:text-dark-text">Showing 4 of 20
                        entries</div>
                    <ul class="flex items-center gap-1 5 *:text-xs *:text-gray-900 dark:text-dark-text">
                        <li>
                            <a href="#"
                                class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">01</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">02</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-6 border-[0.5px] border-gray-900/50 rounded-[5px] flex-center hover:border-none hover:bg-primary-500 hover:text-white">03</a>
                        </li>
                        <li>
                            <a href="#"
                                class="size-6 border-[0.5px] border-transparent hover:border-gray-900/50 rounded-[5px] flex-center bg-primary-500 hover:bg-transparent text-white hover:text-gray-900 dark:text-dark-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10"
                                    viewBox="0 0 12 10" fill="none">
                                    <path d="M10.9593 5L1 5" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.94254 1L10.9595 4.99967L6.94254 9" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Pagination --> --}}
            </div>
        </div>
    </div>
    <!-- End Main Content -->

</x-app-layout>
