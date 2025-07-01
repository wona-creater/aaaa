<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 xl:px-4 ac-transition">
        <div class="grid grid-cols-12 gap-x-4">
            <!-- Start Account Setting Form -->
            <div class="col-span-full sm:col-span-6 xl:col-span-8">
                <div class="card p-0 overflow-hidden">
                    <div class="px-4 py-5 sm:p-7 bg-gray-200/30 dark:bg-dark-card-two">
                        <h6 class="card-title">Account Settings</h6>
                    </div>
                    <div class="p-3 sm:p-7">
                        <form action="#" method="post">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-5">
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" id="firstName" value="Jonathon" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" id="lastName" value="Smith" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" value="debra.holt@example.com"
                                        class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="poneNumber" class="form-label">Phone No</label>
                                    <input type="tel" id="poneNumber" value="(907) 555-0101" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" id="location" value="1901 Thornridge" class="form-input">
                                </div>
                                <div class="col-span-full xl:col-auto leading-none">
                                    <label class="form-label">Country</label>
                                    <select class="singleSelect">
                                        <option selected disabled>Select Country</option>
                                        <option value="us">United States</option>
                                        <option value="ca">Canada</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="au">Australia</option>
                                        <option value="de">Germany</option>
                                        <option value="jp">Japan</option>
                                        <option value="fr">France</option>
                                    </select>
                                </div>

                            </div>
                            <div class="flex gap-3 mt-5">
                                <button type="submit" class="btn b-solid btn-primary-solid dk-theme-card-square">
                                    <i class="ri-checkbox-circle-line text-inherit hidden sm:block"></i>
                                    <span>Save Changes</span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Account Setting Form -->

            <!-- Start Student Profile View -->
            <div class="col-span-full sm:col-span-6 xl:col-span-4 card p-0">
                <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                    <div class="relative w-full h-[150px]">
                        <img src="assets/images/profile/cover.png" alt="cover-image" class="w-full h-full">
                        <label for="thumbnailsrc"
                            class="file-container bg-[url('../../assets/images/profile/profile.png')] bg-no-repeat bg-cover absolute left-1/2 -translate-x-1/2 -bottom-[calc(theme('spacing.ins-pro-img')_/_2)] w-[calc(theme('spacing.ins-pro-img')_+_5px)] h-[theme('spacing.ins-pro-img')] border-2 border-white dark:border-dark-border-two rounded-20 dk-theme-card-square">

                        </label>
                    </div>
                    <div class="mt-7 px-6 text-center">
                        <div class="py-5">
                            <div class="flex-center">
                                <h4 class="text-[22px] leading-none text-heading font-semibold relative">
                                    {{ Auth::user()->name}}
                                    <img src="assets/images/icons/verified-icon-green.svg" alt="verified-icon"
                                        class="absolute -top-1.5 -right-3.5 hidden [&.verified]:block unverified">
                                </h4>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- End Student Profile View -->
        </div>
    </div>
    <!-- End Main Content -->
</x-app-layout>
