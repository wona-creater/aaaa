<x-app-layout>
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <form action="https://template.codexshaper.com/admin/dashkit/all-course.html">
            <div class="grid grid-cols-12 gap-x-4">
                <!-- Start Course Information -->
                <div class="col-span-full lg:col-span-7 card">
                    <div class="p-1.5">
                        <h6 class="card-title">SMTP Details </h6>
                        <div class="mt-7 pt-0.5">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> From Address</label>
                                    <input type="text" id="courseTitle" placeholder="Enter Number" class="form-input"
                                        required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> UserName</label>
                                    <input type="text" id="courseTitle" placeholder="Enter Number" class="form-input"
                                        required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> Password</label>
                                    <input type="text" id="courseTitle" placeholder="Enter Number" class="form-input"
                                        required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> Port</label>
                                    <input type="text" id="courseTitle" placeholder="Enter Number" class="form-input"
                                        required>
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="courseTitle" class="form-label"> Encryption</label>
                                    <input type="text" id="courseTitle" placeholder="Enter Number" class="form-input"
                                        required>
                                </div>

                                <br>
                                <div class="flex-start !justify-end">
                                    <button type="submit"
                                        class="btn b-solid btn-primary-solid  dk-theme-card-square">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Main Content -->
      <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="card">
            <h2 class="card-title">Smtp Details </h2>
        </div>
        <div class="grid grid-cols-12">
            <!-- INFORMATION TABLE ONE -->
            <div class="col-span-full">
                <div class="card p-0">


                    <div class="p-6">

                        <!-- START INFORMATION TABLE -->
                        <div class="overflow-x-auto mt-5">
                            <table
                                class="table-auto border-collapse w-full whitespace-nowrap text-left text-gray-500 dark:text-dark-text font-medium">
                                <thead>
                                    <tr>

                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Form Address
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> User Name
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Password
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Port
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Encryprion
                                        </th>
                                        <th class="p-6 py-4 bg-[#F2F4F9] dark:bg-dark-card-two dk-border-one"> Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-dark-border-three">
                                    <tr>
                                        <td class="p-6 py-4 dk-border-one">User@gmail.com</td>
                                        <td class="p-6 py-4 dk-border-one">User@gmail.com</td>
                                        <td class="p-6 py-4 dk-border-one">Advfv3454</td>
                                        <td class="p-6 py-4 dk-border-one">465</td>
                                        <td class="p-6 py-4 dk-border-one">ssl</td>
                                        <td class="p-6 py-4 dk-border-one"><button
                                                class="btn b-light btn-danger-light rounded-full">Delete</button></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
