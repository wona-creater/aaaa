<div>
    <!-- Start App Menu -->
    <div id="app-menu-drawer"
        class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:bottom-4 z-backdrop xl:group-data-[theme-width=box]:left-auto dk-theme-card-square ac-transition"
        tabindex="-1">
        <div
            class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
            <a href="index-2.html" class="group-data-[sidebar-size=lg]:block hidden">
                <img src="/assets/images/logo/logo-text.svg" alt="logo" class="group-[.dark]:hidden" />
                <img src="/assets/images/logo/logo-text-dark.svg" alt="logo" class="group-[.light]:hidden" />
            </a>
            <a href="index-2.html" class="group-data-[sidebar-size=lg]:hidden block">
                <img src="dashboard/images/logo/logo-icon.svg" alt="logo" />
            </a>
        </div>
        <div id="app-menu-scrollbar" data-scrollbar
            class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                <ul id="navbar-nav"
                    class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">


                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route ('dashboard')}}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16 18" fill="none">
                                    <path
                                        d="M14.388 14.048H1.6184C1.50665 14.0473 1.39704 14.0173 1.30051 13.961C1.20398 13.9047 1.12393 13.824 1.06834 13.7271C1.01276 13.6301 0.983596 13.5203 0.983765 13.4085C0.983935 13.2968 1.01343 13.187 1.06931 13.0903C1.59526 12.1804 2.25688 10.5212 2.25688 7.66319C2.25688 6.13917 2.8623 4.67757 3.93994 3.59993C5.01758 2.52228 6.47918 1.91687 8.0032 1.91687C9.52722 1.91687 10.9888 2.52228 12.0665 3.59993C13.1441 4.67757 13.7495 6.13917 13.7495 7.66319C13.7495 10.522 14.4119 12.1804 14.9387 13.0903C14.9946 13.1872 15.0241 13.2971 15.0242 13.4089C15.0243 13.5208 14.995 13.6308 14.9392 13.7278C14.8835 13.8248 14.8032 13.9054 14.7064 13.9616C14.6097 14.0178 14.4999 14.0476 14.388 14.048Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_5)] group-[.active]/menu-link:fill-[url(#g_5)] dark:fill-none" />
                                    <path
                                        d="M11.1955 16.6019C11.1955 16.7712 11.1283 16.9337 11.0085 17.0534C10.8888 17.1731 10.7264 17.2404 10.5571 17.2404H5.44922C5.27989 17.2404 5.11749 17.1731 4.99775 17.0534C4.87801 16.9337 4.81074 16.7712 4.81074 16.6019C4.81074 16.4326 4.87801 16.2702 4.99775 16.1504C5.11749 16.0307 5.27989 15.9634 5.44922 15.9634H10.5571C10.7264 15.9634 10.8888 16.0307 11.0085 16.1504C11.1283 16.2702 11.1955 16.4326 11.1955 16.6019ZM15.9355 3.53862C15.2179 2.13609 14.1403 0.949501 12.8133 0.10041C12.7424 0.0551165 12.6632 0.0242842 12.5804 0.00968503C12.4975 -0.0049141 12.4126 -0.00299197 12.3305 0.0153408C12.2483 0.0336736 12.1707 0.0680555 12.1019 0.11651C12.0331 0.164965 11.9746 0.226537 11.9297 0.297686C11.8847 0.368836 11.8543 0.44816 11.8402 0.531098C11.826 0.614037 11.8284 0.698955 11.8472 0.78097C11.866 0.862985 11.9008 0.94048 11.9496 1.009C11.9984 1.07752 12.0603 1.13572 12.1317 1.18024C13.2703 1.90451 14.1927 2.92208 14.8021 4.12602C14.8827 4.27155 15.0168 4.3799 15.176 4.42803C15.3352 4.47616 15.5069 4.46026 15.6546 4.38373C15.8023 4.30719 15.9142 4.17605 15.9667 4.01822C16.0191 3.86039 16.0079 3.68832 15.9355 3.53862ZM0.63748 4.4708C0.754452 4.47075 0.869162 4.43857 0.96909 4.37777C1.06902 4.31697 1.15032 4.22989 1.20413 4.12602C1.81356 2.92208 2.73602 1.90451 3.87457 1.18024C3.94596 1.13572 4.00785 1.07752 4.05668 1.009C4.1055 0.94048 4.14031 0.862985 4.15908 0.78097C4.17786 0.698955 4.18024 0.614037 4.16609 0.531098C4.15194 0.44816 4.12154 0.368836 4.07663 0.297686C4.03172 0.226537 3.97319 0.164965 3.90441 0.11651C3.83562 0.0680555 3.75794 0.0336736 3.67582 0.0153408C3.59371 -0.00299197 3.50878 -0.0049141 3.42592 0.00968503C3.34306 0.0242842 3.2639 0.0551165 3.19299 0.10041C1.86593 0.949501 0.788422 2.13609 0.0708293 3.53862C0.0204195 3.63593 -0.00409717 3.74457 -0.000361225 3.85409C0.00337472 3.96361 0.0352375 4.07033 0.0921606 4.16397C0.149084 4.25761 0.229151 4.33503 0.324657 4.38877C0.420164 4.44251 0.527893 4.47076 0.63748 4.4708ZM15.4901 12.7662C15.6032 12.9602 15.6632 13.1806 15.664 13.4051C15.6647 13.6297 15.6063 13.8505 15.4945 14.0452C15.3827 14.2399 15.2216 14.4018 15.0273 14.5144C14.833 14.6269 14.6125 14.6863 14.3879 14.6865H1.61834C1.39394 14.686 1.17361 14.6265 0.979551 14.5138C0.785495 14.4011 0.624566 14.2392 0.512976 14.0445C0.401385 13.8498 0.343073 13.6291 0.343914 13.4047C0.344755 13.1803 0.404718 12.9601 0.517765 12.7662C1.23685 11.5252 1.61834 9.76061 1.61834 7.6632C1.61834 5.96985 2.29103 4.34585 3.48841 3.14847C4.68579 1.95109 6.30979 1.2784 8.00314 1.2784C9.69649 1.2784 11.3205 1.95109 12.5179 3.14847C13.7153 4.34585 14.3879 5.96985 14.3879 7.6632C14.3879 9.75981 14.7694 11.5244 15.4901 12.7662ZM14.3879 13.4095C13.5388 11.9514 13.111 10.0184 13.111 7.6632C13.111 6.30852 12.5728 5.00932 11.6149 4.05141C10.657 3.09351 9.35782 2.55536 8.00314 2.55536C6.64846 2.55536 5.34926 3.09351 4.39135 4.05141C3.43345 5.00932 2.8953 6.30852 2.8953 7.6632C2.8953 10.0192 2.46593 11.9522 1.61834 13.4095H14.3879Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_5" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{route('mail')}}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                    viewBox="0 0 16 13" fill="none">
                                    <path
                                        d="M12.6887 1.65521V2.75865H11.0335C10.7409 2.75865 10.4602 2.87491 10.2533 3.08185C10.0463 3.28878 9.93009 3.56945 9.93009 3.8621V9.37934H1.65423C1.36158 9.37934 1.08091 9.26309 0.873974 9.05615C0.667037 8.84921 0.550781 8.56855 0.550781 8.2759V1.65521C0.550781 1.36255 0.667037 1.08189 0.873974 0.87495C1.08091 0.668014 1.36158 0.551758 1.65423 0.551758H11.5853C11.8779 0.551758 12.1586 0.668014 12.3655 0.87495C12.5725 1.08189 12.6887 1.36255 12.6887 1.65521Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_6)] group-[.active]/menu-link:fill-[url(#g_6)] dark:fill-none" />
                                    <path
                                        d="M14.3448 2.2069H13.2414V1.65517C13.2414 1.21619 13.067 0.795194 12.7566 0.484789C12.4462 0.174384 12.0252 0 11.5862 0H1.65517C1.21619 0 0.795194 0.174384 0.484789 0.484789C0.174384 0.795194 0 1.21619 0 1.65517V8.27586C0 8.71484 0.174384 9.13584 0.484789 9.44625C0.795194 9.75665 1.21619 9.93103 1.65517 9.93103H9.37931V10.4828C9.37931 10.9217 9.55369 11.3427 9.8641 11.6531C10.1745 11.9635 10.5955 12.1379 11.0345 12.1379H14.3448C14.7838 12.1379 15.2048 11.9635 15.5152 11.6531C15.8256 11.3427 16 10.9217 16 10.4828V3.86207C16 3.42309 15.8256 3.00209 15.5152 2.69168C15.2048 2.38128 14.7838 2.2069 14.3448 2.2069ZM1.65517 8.82759C1.50885 8.82759 1.36851 8.76946 1.26504 8.66599C1.16158 8.56252 1.10345 8.42219 1.10345 8.27586V1.65517C1.10345 1.50885 1.16158 1.36851 1.26504 1.26504C1.36851 1.16158 1.50885 1.10345 1.65517 1.10345H11.5862C11.7325 1.10345 11.8729 1.16158 11.9763 1.26504C12.0798 1.36851 12.1379 1.50885 12.1379 1.65517V2.2069H11.0345C10.5955 2.2069 10.1745 2.38128 9.8641 2.69168C9.55369 3.00209 9.37931 3.42309 9.37931 3.86207V8.82759H1.65517ZM14.8966 10.4828C14.8966 10.6291 14.8384 10.7694 14.735 10.8729C14.6315 10.9764 14.4912 11.0345 14.3448 11.0345H11.0345C10.8882 11.0345 10.7478 10.9764 10.6444 10.8729C10.5409 10.7694 10.4828 10.6291 10.4828 10.4828V3.86207C10.4828 3.71574 10.5409 3.57541 10.6444 3.47194C10.7478 3.36847 10.8882 3.31034 11.0345 3.31034H14.3448C14.4912 3.31034 14.6315 3.36847 14.735 3.47194C14.8384 3.57541 14.8966 3.71574 14.8966 3.86207V10.4828ZM8.27586 11.5862C8.27586 11.7325 8.21773 11.8729 8.11427 11.9763C8.0108 12.0798 7.87046 12.1379 7.72414 12.1379H4.96552C4.81919 12.1379 4.67886 12.0798 4.57539 11.9763C4.47192 11.8729 4.41379 11.7325 4.41379 11.5862C4.41379 11.4399 4.47192 11.2995 4.57539 11.1961C4.67886 11.0926 4.81919 11.0345 4.96552 11.0345H7.72414C7.87046 11.0345 8.0108 11.0926 8.11427 11.1961C8.21773 11.2995 8.27586 11.4399 8.27586 11.5862ZM13.7931 4.96552C13.7931 5.11184 13.735 5.25218 13.6315 5.35564C13.528 5.45911 13.3877 5.51724 13.2414 5.51724H12.1379C11.9916 5.51724 11.8513 5.45911 11.7478 5.35564C11.6443 5.25218 11.5862 5.11184 11.5862 4.96552C11.5862 4.81919 11.6443 4.67886 11.7478 4.57539C11.8513 4.47192 11.9916 4.41379 12.1379 4.41379H13.2414C13.3877 4.41379 13.528 4.47192 13.6315 4.57539C13.735 4.67886 13.7931 4.81919 13.7931 4.96552Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_6" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Send Mail
                            </span>
                        </a>
                    </li>
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route ('subscribe')}}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                    viewBox="0 0 16 13" fill="none">
                                    <path
                                        d="M12.6887 1.65521V2.75865H11.0335C10.7409 2.75865 10.4602 2.87491 10.2533 3.08185C10.0463 3.28878 9.93009 3.56945 9.93009 3.8621V9.37934H1.65423C1.36158 9.37934 1.08091 9.26309 0.873974 9.05615C0.667037 8.84921 0.550781 8.56855 0.550781 8.2759V1.65521C0.550781 1.36255 0.667037 1.08189 0.873974 0.87495C1.08091 0.668014 1.36158 0.551758 1.65423 0.551758H11.5853C11.8779 0.551758 12.1586 0.668014 12.3655 0.87495C12.5725 1.08189 12.6887 1.36255 12.6887 1.65521Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_6)] group-[.active]/menu-link:fill-[url(#g_6)] dark:fill-none" />
                                    <path
                                        d="M14.3448 2.2069H13.2414V1.65517C13.2414 1.21619 13.067 0.795194 12.7566 0.484789C12.4462 0.174384 12.0252 0 11.5862 0H1.65517C1.21619 0 0.795194 0.174384 0.484789 0.484789C0.174384 0.795194 0 1.21619 0 1.65517V8.27586C0 8.71484 0.174384 9.13584 0.484789 9.44625C0.795194 9.75665 1.21619 9.93103 1.65517 9.93103H9.37931V10.4828C9.37931 10.9217 9.55369 11.3427 9.8641 11.6531C10.1745 11.9635 10.5955 12.1379 11.0345 12.1379H14.3448C14.7838 12.1379 15.2048 11.9635 15.5152 11.6531C15.8256 11.3427 16 10.9217 16 10.4828V3.86207C16 3.42309 15.8256 3.00209 15.5152 2.69168C15.2048 2.38128 14.7838 2.2069 14.3448 2.2069ZM1.65517 8.82759C1.50885 8.82759 1.36851 8.76946 1.26504 8.66599C1.16158 8.56252 1.10345 8.42219 1.10345 8.27586V1.65517C1.10345 1.50885 1.16158 1.36851 1.26504 1.26504C1.36851 1.16158 1.50885 1.10345 1.65517 1.10345H11.5862C11.7325 1.10345 11.8729 1.16158 11.9763 1.26504C12.0798 1.36851 12.1379 1.50885 12.1379 1.65517V2.2069H11.0345C10.5955 2.2069 10.1745 2.38128 9.8641 2.69168C9.55369 3.00209 9.37931 3.42309 9.37931 3.86207V8.82759H1.65517ZM14.8966 10.4828C14.8966 10.6291 14.8384 10.7694 14.735 10.8729C14.6315 10.9764 14.4912 11.0345 14.3448 11.0345H11.0345C10.8882 11.0345 10.7478 10.9764 10.6444 10.8729C10.5409 10.7694 10.4828 10.6291 10.4828 10.4828V3.86207C10.4828 3.71574 10.5409 3.57541 10.6444 3.47194C10.7478 3.36847 10.8882 3.31034 11.0345 3.31034H14.3448C14.4912 3.31034 14.6315 3.36847 14.735 3.47194C14.8384 3.57541 14.8966 3.71574 14.8966 3.86207V10.4828ZM8.27586 11.5862C8.27586 11.7325 8.21773 11.8729 8.11427 11.9763C8.0108 12.0798 7.87046 12.1379 7.72414 12.1379H4.96552C4.81919 12.1379 4.67886 12.0798 4.57539 11.9763C4.47192 11.8729 4.41379 11.7325 4.41379 11.5862C4.41379 11.4399 4.47192 11.2995 4.57539 11.1961C4.67886 11.0926 4.81919 11.0345 4.96552 11.0345H7.72414C7.87046 11.0345 8.0108 11.0926 8.11427 11.1961C8.21773 11.2995 8.27586 11.4399 8.27586 11.5862ZM13.7931 4.96552C13.7931 5.11184 13.735 5.25218 13.6315 5.35564C13.528 5.45911 13.3877 5.51724 13.2414 5.51724H12.1379C11.9916 5.51724 11.8513 5.45911 11.7478 5.35564C11.6443 5.25218 11.5862 5.11184 11.5862 4.96552C11.5862 4.81919 11.6443 4.67886 11.7478 4.57539C11.8513 4.47192 11.9916 4.41379 12.1379 4.41379H13.2414C13.3877 4.41379 13.528 4.47192 13.6315 4.57539C13.735 4.67886 13.7931 4.81919 13.7931 4.96552Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_6" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Subscribe
                            </span>
                        </a>
                    </li>
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route ('raids')}}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                    viewBox="0 0 16 13" fill="none">
                                    <path
                                        d="M12.6887 1.65521V2.75865H11.0335C10.7409 2.75865 10.4602 2.87491 10.2533 3.08185C10.0463 3.28878 9.93009 3.56945 9.93009 3.8621V9.37934H1.65423C1.36158 9.37934 1.08091 9.26309 0.873974 9.05615C0.667037 8.84921 0.550781 8.56855 0.550781 8.2759V1.65521C0.550781 1.36255 0.667037 1.08189 0.873974 0.87495C1.08091 0.668014 1.36158 0.551758 1.65423 0.551758H11.5853C11.8779 0.551758 12.1586 0.668014 12.3655 0.87495C12.5725 1.08189 12.6887 1.36255 12.6887 1.65521Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_6)] group-[.active]/menu-link:fill-[url(#g_6)] dark:fill-none" />
                                    <path
                                        d="M14.3448 2.2069H13.2414V1.65517C13.2414 1.21619 13.067 0.795194 12.7566 0.484789C12.4462 0.174384 12.0252 0 11.5862 0H1.65517C1.21619 0 0.795194 0.174384 0.484789 0.484789C0.174384 0.795194 0 1.21619 0 1.65517V8.27586C0 8.71484 0.174384 9.13584 0.484789 9.44625C0.795194 9.75665 1.21619 9.93103 1.65517 9.93103H9.37931V10.4828C9.37931 10.9217 9.55369 11.3427 9.8641 11.6531C10.1745 11.9635 10.5955 12.1379 11.0345 12.1379H14.3448C14.7838 12.1379 15.2048 11.9635 15.5152 11.6531C15.8256 11.3427 16 10.9217 16 10.4828V3.86207C16 3.42309 15.8256 3.00209 15.5152 2.69168C15.2048 2.38128 14.7838 2.2069 14.3448 2.2069ZM1.65517 8.82759C1.50885 8.82759 1.36851 8.76946 1.26504 8.66599C1.16158 8.56252 1.10345 8.42219 1.10345 8.27586V1.65517C1.10345 1.50885 1.16158 1.36851 1.26504 1.26504C1.36851 1.16158 1.50885 1.10345 1.65517 1.10345H11.5862C11.7325 1.10345 11.8729 1.16158 11.9763 1.26504C12.0798 1.36851 12.1379 1.50885 12.1379 1.65517V2.2069H11.0345C10.5955 2.2069 10.1745 2.38128 9.8641 2.69168C9.55369 3.00209 9.37931 3.42309 9.37931 3.86207V8.82759H1.65517ZM14.8966 10.4828C14.8966 10.6291 14.8384 10.7694 14.735 10.8729C14.6315 10.9764 14.4912 11.0345 14.3448 11.0345H11.0345C10.8882 11.0345 10.7478 10.9764 10.6444 10.8729C10.5409 10.7694 10.4828 10.6291 10.4828 10.4828V3.86207C10.4828 3.71574 10.5409 3.57541 10.6444 3.47194C10.7478 3.36847 10.8882 3.31034 11.0345 3.31034H14.3448C14.4912 3.31034 14.6315 3.36847 14.735 3.47194C14.8384 3.57541 14.8966 3.71574 14.8966 3.86207V10.4828ZM8.27586 11.5862C8.27586 11.7325 8.21773 11.8729 8.11427 11.9763C8.0108 12.0798 7.87046 12.1379 7.72414 12.1379H4.96552C4.81919 12.1379 4.67886 12.0798 4.57539 11.9763C4.47192 11.8729 4.41379 11.7325 4.41379 11.5862C4.41379 11.4399 4.47192 11.2995 4.57539 11.1961C4.67886 11.0926 4.81919 11.0345 4.96552 11.0345H7.72414C7.87046 11.0345 8.0108 11.0926 8.11427 11.1961C8.21773 11.2995 8.27586 11.4399 8.27586 11.5862ZM13.7931 4.96552C13.7931 5.11184 13.735 5.25218 13.6315 5.35564C13.528 5.45911 13.3877 5.51724 13.2414 5.51724H12.1379C11.9916 5.51724 11.8513 5.45911 11.7478 5.35564C11.6443 5.25218 11.5862 5.11184 11.5862 4.96552C11.5862 4.81919 11.6443 4.67886 11.7478 4.57539C11.8513 4.47192 11.9916 4.41379 12.1379 4.41379H13.2414C13.3877 4.41379 13.528 4.47192 13.6315 4.57539C13.735 4.67886 13.7931 4.81919 13.7931 4.96552Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_6" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Raids
                            </span>
                        </a>
                    </li>
                    <li
                        class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                        <a href="{{ route ('profile.edit')}}"
                            class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full">
                            <span
                                class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                    viewBox="0 0 16 13" fill="none">
                                    <path
                                        d="M12.6887 1.65521V2.75865H11.0335C10.7409 2.75865 10.4602 2.87491 10.2533 3.08185C10.0463 3.28878 9.93009 3.56945 9.93009 3.8621V9.37934H1.65423C1.36158 9.37934 1.08091 9.26309 0.873974 9.05615C0.667037 8.84921 0.550781 8.56855 0.550781 8.2759V1.65521C0.550781 1.36255 0.667037 1.08189 0.873974 0.87495C1.08091 0.668014 1.36158 0.551758 1.65423 0.551758H11.5853C11.8779 0.551758 12.1586 0.668014 12.3655 0.87495C12.5725 1.08189 12.6887 1.36255 12.6887 1.65521Z"
                                        fill="#EEEEEE"
                                        class="group-hover/menu-link:fill-[url(#g_6)] group-[.active]/menu-link:fill-[url(#g_6)] dark:fill-none" />
                                    <path
                                        d="M14.3448 2.2069H13.2414V1.65517C13.2414 1.21619 13.067 0.795194 12.7566 0.484789C12.4462 0.174384 12.0252 0 11.5862 0H1.65517C1.21619 0 0.795194 0.174384 0.484789 0.484789C0.174384 0.795194 0 1.21619 0 1.65517V8.27586C0 8.71484 0.174384 9.13584 0.484789 9.44625C0.795194 9.75665 1.21619 9.93103 1.65517 9.93103H9.37931V10.4828C9.37931 10.9217 9.55369 11.3427 9.8641 11.6531C10.1745 11.9635 10.5955 12.1379 11.0345 12.1379H14.3448C14.7838 12.1379 15.2048 11.9635 15.5152 11.6531C15.8256 11.3427 16 10.9217 16 10.4828V3.86207C16 3.42309 15.8256 3.00209 15.5152 2.69168C15.2048 2.38128 14.7838 2.2069 14.3448 2.2069ZM1.65517 8.82759C1.50885 8.82759 1.36851 8.76946 1.26504 8.66599C1.16158 8.56252 1.10345 8.42219 1.10345 8.27586V1.65517C1.10345 1.50885 1.16158 1.36851 1.26504 1.26504C1.36851 1.16158 1.50885 1.10345 1.65517 1.10345H11.5862C11.7325 1.10345 11.8729 1.16158 11.9763 1.26504C12.0798 1.36851 12.1379 1.50885 12.1379 1.65517V2.2069H11.0345C10.5955 2.2069 10.1745 2.38128 9.8641 2.69168C9.55369 3.00209 9.37931 3.42309 9.37931 3.86207V8.82759H1.65517ZM14.8966 10.4828C14.8966 10.6291 14.8384 10.7694 14.735 10.8729C14.6315 10.9764 14.4912 11.0345 14.3448 11.0345H11.0345C10.8882 11.0345 10.7478 10.9764 10.6444 10.8729C10.5409 10.7694 10.4828 10.6291 10.4828 10.4828V3.86207C10.4828 3.71574 10.5409 3.57541 10.6444 3.47194C10.7478 3.36847 10.8882 3.31034 11.0345 3.31034H14.3448C14.4912 3.31034 14.6315 3.36847 14.735 3.47194C14.8384 3.57541 14.8966 3.71574 14.8966 3.86207V10.4828ZM8.27586 11.5862C8.27586 11.7325 8.21773 11.8729 8.11427 11.9763C8.0108 12.0798 7.87046 12.1379 7.72414 12.1379H4.96552C4.81919 12.1379 4.67886 12.0798 4.57539 11.9763C4.47192 11.8729 4.41379 11.7325 4.41379 11.5862C4.41379 11.4399 4.47192 11.2995 4.57539 11.1961C4.67886 11.0926 4.81919 11.0345 4.96552 11.0345H7.72414C7.87046 11.0345 8.0108 11.0926 8.11427 11.1961C8.21773 11.2995 8.27586 11.4399 8.27586 11.5862ZM13.7931 4.96552C13.7931 5.11184 13.735 5.25218 13.6315 5.35564C13.528 5.45911 13.3877 5.51724 13.2414 5.51724H12.1379C11.9916 5.51724 11.8513 5.45911 11.7478 5.35564C11.6443 5.25218 11.5862 5.11184 11.5862 4.96552C11.5862 4.81919 11.6443 4.67886 11.7478 4.57539C11.8513 4.47192 11.9916 4.41379 12.1379 4.41379H13.2414C13.3877 4.41379 13.528 4.47192 13.6315 4.57539C13.735 4.67886 13.7931 4.81919 13.7931 4.96552Z"
                                        fill="#999999"
                                        class="group-hover/menu-link:fill-white group-[.active]/menu-link:fill-white" />
                                    <defs>
                                        <linearGradient id="g_6" x1="2.18655" y1="3.46529" x2="8.18057"
                                            y2="12.9769" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#795DED" />
                                            <stop offset="0.0001" stop-color="#7D5DFE" />
                                            <stop offset="1" stop-color="#76D466" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span
                                class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                Profile
                            </span>
                        </a>
                    </li>





                </ul>
            </div>
        </div>
        <!-- Logout Link -->
        <div class="mt-auto px-7 py-6 group-data-[sidebar-size=sm]:px-2">
            {{-- <form action=""></form> --}}
            <a href="{{ route ('logout')}}"
                class="flex-center-between text-gray-500 dark:text-dark-text font-semibold leading-none bg-gray-200 dark:bg-[#090927] dark:group-data-[sidebar-size=sm]:bg-dark-card-shade rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square">
                <span class="group-data-[sidebar-size=sm]:hidden block">Logout</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                    fill="none">
                    <path
                        d="M6.66645 15.3328C6.66645 15.5096 6.59621 15.6792 6.47119 15.8042C6.34617 15.9292 6.17661 15.9995 5.9998 15.9995H1.33329C0.979679 15.9995 0.640552 15.859 0.390511 15.609C0.140471 15.3589 0 15.0198 0 14.6662V1.33329C0 0.979679 0.140471 0.640552 0.390511 0.390511C0.640552 0.140471 0.979679 0 1.33329 0H5.9998C6.17661 0 6.34617 0.0702357 6.47119 0.195256C6.59621 0.320276 6.66645 0.48984 6.66645 0.666645C6.66645 0.84345 6.59621 1.01301 6.47119 1.13803C6.34617 1.26305 6.17661 1.33329 5.9998 1.33329H1.33329V14.6662H5.9998C6.17661 14.6662 6.34617 14.7364 6.47119 14.8614C6.59621 14.9865 6.66645 15.156 6.66645 15.3328ZM15.8045 8.47139L12.4713 11.8046C12.378 11.898 12.2592 11.9615 12.1298 11.9873C12.0004 12.0131 11.8663 11.9999 11.7444 11.9494C11.6225 11.8989 11.5184 11.8133 11.4451 11.7036C11.3719 11.5939 11.3329 11.4649 11.333 11.333V8.66638H5.9998C5.823 8.66638 5.65343 8.59615 5.52841 8.47113C5.40339 8.34611 5.33316 8.17654 5.33316 7.99974C5.33316 7.82293 5.40339 7.65337 5.52841 7.52835C5.65343 7.40333 5.823 7.33309 5.9998 7.33309H11.333V4.66651C11.3329 4.53459 11.3719 4.4056 11.4451 4.29587C11.5184 4.18615 11.6225 4.10062 11.7444 4.05012C11.8663 3.99962 12.0004 3.98642 12.1298 4.01218C12.2592 4.03795 12.378 4.10152 12.4713 4.19486L15.8045 7.52809C15.8665 7.59 15.9156 7.66352 15.9492 7.74445C15.9827 7.82538 16 7.91213 16 7.99974C16 8.08735 15.9827 8.17409 15.9492 8.25502C15.9156 8.33595 15.8665 8.40948 15.8045 8.47139ZM14.3879 7.99974L12.6663 6.27563V9.72385L14.3879 7.99974Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>
    <!-- End App Menu -->
</div>
