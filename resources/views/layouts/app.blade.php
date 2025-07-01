<!DOCTYPE html>
<html lang="en" class="group dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Hac Wallet - </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="web development agency" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/dashboard/images/favicon.ico" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/output.css" />
    <link rel="stylesheet" href="/assets/css/vendor/select/select2.min.css">
   <link rel="stylesheet" href="/assets/css/vendor/summernote.min.css">
</head>

<body
    class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">

    <header
        class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square z-10 ac-transition">
        <div class="flex-center-between grow">
            <!-- Header Left -->
            <div class="flex items-center gap-4">
                <div class="menu-hamburger-container flex-center">
                    <button type="button" id="app-menu-hamburger" class="menu-hamburger hidden xl:block"></button>
                    <button type="button" class="menu-hamburger block xl:hidden" data-drawer-target="app-menu-drawer"
                        data-drawer-show="app-menu-drawer" aria-controls="app-menu-drawer"></button>
                </div>

            </div>
            <!-- Header Right -->
            <div class="flex items-center gap-1 sm:gap-3">
                <!-- Dark Light Button -->
                <button type="button"
                    class="themeMode size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                    onclick="toggleThemeMode()">
                    <i
                        class="ri-contrast-2-line text-[22px] dark:text-dark-text-two dark:before:!content-['\f1bf']"></i>
                </button>
                <!-- Settings Button -->
                <button type="button" class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md"
                    data-drawer-target="app-setting-drawer" data-drawer-show="app-setting-drawer"
                    data-drawer-placement="right" aria-controls="app-setting-drawer">
                    <i class="ri-settings-3-line text-[22px] dark:text-dark-text-two animate-spin-slow"></i>
                </button>


                <!-- Border -->
                <div
                    class="w-[1px] h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-[#EEE] dark:bg-dark-border hidden sm:block">
                </div>
                <!-- User Profile Button -->
                <div class="relative">
                    <button type="button" data-popover-target="dropdownProfile" data-popover-trigger="click"
                        data-popover-placement="bottom-end"
                        class="text-gray-500 dark:text-dark-text flex items-center gap-2 sm:pr-4 relative after:absolute after:right-0 after:font-remix after:content-['\ea4e'] after:text-[18px] after:hidden sm:after:block">
                        <img src="/assets/images/user/profile-img.png" alt="user-img"
                            class="size-7 sm:size-9 rounded-50 dk-theme-card-square" />
                        <span
                            class="font-semibold leading-none text-lg capitalize hidden sm:block">{{ Auth::user()->name }}</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownProfile"
                        class="invisible z-backdrop bg-white text-left divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-dark-card-shade dark:divide-dark-border-four">
                        <div class="px-4 py-3 text-sm text-gray-500 dark:text-white">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="truncate">
                                <a href="https://template.codexshaper.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="bbdad7dec3898f898efbdcd6dad2d795d8d4d6">[email&#160;protected]</a>
                            </div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="{{ route ('dashboard')}}"
                                    class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route ('profile.edit')}}"
                                    class="flex font-medium px-4 py-2 hover:bg-gray-200 dark:hover:bg-dark-icon dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="{{ route ('logout')}}"
                                class="flex font-medium px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:hover:bg-dark-icon dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    @if (Auth::user()->role == 'user')
        <x-user></x-user>
    @elseif(Auth::user()->role == 'admin')
        <x-admin></x-admin>
    @endif
    {{ $slot }}


    <!-- Start App Settings Sidebar -->
    <div id="app-setting-drawer"
        class="flex flex-col fixed z-modal transition-transform bg-white font-spline_sans dark:bg-dark-card-two right-0 h-screen translate-x-full duration-300 overflow-y-auto w-80 sm:w-96"
        tabindex="-1">
        <button type="button" data-drawer-hide="app-setting-drawer" aria-controls="app-setting-drawer"
            class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg absolute top-2.5 right-2.5 dk-theme-card-square">
            <i class="ri-close-line text-gray-500 dark:text-dark-text"></i>
        </button>
        <div class="p-6 py-3 border-b border-gray-200 dark:border-dark-border-four">
            <h6 class="text-lg font-medium text-gray-500 dark:text-dark-text">
                Adjust Configurations
            </h6>
            <p class="text-sm text-gray-500 dark:text-dark-text mt-1">
                Transform your space to reflect your personality!
            </p>
        </div>
        <!-- Customizatin Options -->
        <div data-scrollbar class="p-6 pt-3 divide-y divide-input-border/50 dark:divide-dark-border-four space-y-10">
            <!-- Theme Mode -->
            <div class="mt-8 first:mt-0">
                <h6 class="card-title text-base font-medium">Theme Mode</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Light</label>
                        <label for="radioThemeLight"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-sun-line text-inherit text-xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeLight" hidden checked
                                onchange="toggleThemeMode()" />
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Dark</label>
                        <label for="radioThemeDark"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-moon-clear-line text-inherit text-xl"></i>
                            <input name="radioThemeMode" type="radio" id="radioThemeDark" hidden
                                onchange="toggleThemeMode()" />
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Card Style -->
            <div class="mt-8 first:mt-0">
                <h6 class="card-title text-base font-medium">Theme Card Style</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Round</label>
                        <label for="radioThemeCardRound"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-rounded-corner text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle" type="radio" id="radioThemeCardRound" hidden checked
                                onchange="toggleCardStyle()" />
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Square</label>
                        <label for="radioThemeCardSquare"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-square-line text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle" type="radio" id="radioThemeCardSquare" hidden
                                onchange="toggleCardStyle()" />
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Width -->
            <div class="mt-8 first:mt-0">
                <h6 class="card-title text-base font-medium">Theme Layout Width</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Full
                            Width</label>
                        <label for="radioThemeWidthFluid"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-fullscreen-fill text-inherit text-xl"></i>
                            <input name="radioThemeWidth" type="radio" id="radioThemeWidthFluid" hidden checked
                                onchange="settingThemeWidth()" />
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                            class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Container</label>
                        <label for="radioThemeWidthBox"
                            class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 group-data-[card-style=square]:has-[:checked]:rounded-sm leading-none dk-theme-card-square">
                            <i class="ri-exchange-box-line text-inherit text-xl"></i>
                            <input name="radioThemeWidth" type="radio" id="radioThemeWidthBox" hidden
                                onchange="settingThemeWidth()" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset All Customization -->
        <div class="flex items-center justify-end p-3 bg-gray-200 dark:bg-dark-icon mt-auto">
            <button type="reset" class="btn b-solid btn-danger-solid btn-sm" onclick="resetThemeConfig()">
                Reset
            </button>
        </div>
    </div>
    <!-- End App Settings Sidebar -->



    {{-- <script data-cfasync="false" src="/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="//file/js/vendor/jquery.min.js"></script>
    <script src="/assets/js/vendor/apexcharts.min.js"></script>
    <script src="/assets/js/vendor/flowbite.min.js"></script>
    <script src="/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
    <script src="/assets/js/layout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="/assets/js/component/app-menu-bar.js"></script>
    <script src="/assets/js/component/tab.js"></script>
    <script src="/assets/js/pages/dashboard-lms.js"></script>
    <script src="/assets/js/switcher.js"></script> --}}

    <script data-cfasync="false" src="/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.min.js"></script>
    <script src="/assets/js/vendor/jquery.min.js"></script>
    <script src="/assets/js/vendor/apexcharts.min.js"></script>
    <script src="/assets/js/vendor/flowbite.min.js"></script>
    <script src="/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/assets/js/layout.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/component/app-menu-bar.js"></script>
    <script src="/assets/js/component/tab.js"></script>
    <script src="/assets/js/pages/dashboard-lms.js"></script>
    <script src="/assets/js/switcher.js"></script>

</body>

</html>
