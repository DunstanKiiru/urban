<nav class="bg-white border-b border-gray-200">

    <div class="bg-[#2F7D47]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row
                        sm:items-center sm:justify-between
                        gap-1 py-2
                        text-sm text-white">

                {{-- EMAIL --}}
                <div>
                    Email:

                    <a href="mailto:sacco@kura.go.ke"
                       class="font-medium hover:text-[#F7D928]">

                        sacco@kura.go.ke

                    </a>
                </div>


                {{-- CUSTOMER CARE --}}
                <div>

                    Customer Care:

                    <a href="tel:0793524349"
                       class="font-medium hover:text-[#F7D928]">

                        0793 524 349

                    </a>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         MAIN NAVIGATION
    ====================================================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between
                    min-h-20 py-3">


            {{-- =================================================
                 LOGO / BRAND
            ================================================== --}}
            <a href="{{ route('home') }}"
               class="flex items-center gap-3
                      min-w-0">

                {{-- OFFICIAL CIRCULAR LOGO --}}
                <div class="shrink-0">

                    <img src="{{ asset('images/logo.png') }}"
                         alt="Urban Roads SACCO Logo"
                         class="w-14 h-14 sm:w-16 sm:h-16
                                object-contain">

                </div>


                {{-- ORGANIZATION NAME --}}
                <div class="min-w-0">

                    <div class="font-bold
                                text-[#2F7D47]
                                text-base sm:text-lg
                                leading-tight">

                        Urban Roads SACCO

                    </div>

                    <div class="text-[9px] sm:text-[10px]
                                text-gray-500
                                font-medium
                                uppercase
                                tracking-wide
                                leading-tight">

                        Savings & Credit
                        Co-operative Society Limited

                    </div>

                </div>

            </a>


            {{-- =================================================
                 DESKTOP NAVIGATION
            ================================================== --}}
            <div class="hidden lg:flex
                        items-center
                        gap-5 xl:gap-6">

                {{-- HOME --}}
                <a href="{{ route('home') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('home')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    Home

                </a>


                {{-- ABOUT --}}
                <a href="{{ route('about') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('about')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    About Us

                </a>


                {{-- SERVICES --}}
                <a href="{{ route('services') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('services')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    Services

                </a>


                {{-- LOANS --}}
                <a href="{{ route('loans') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('loans')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    Loan Products

                </a>


                {{-- MEMBERSHIP --}}
                <a href="{{ route('membership') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('membership')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    Membership

                </a>


                {{-- NEWS --}}
                <a href="{{ route('news') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('news')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    News

                </a>


                {{-- CONTACT --}}
                <a href="{{ route('contact') }}"
                   class="text-sm font-medium
                          text-gray-700
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('contact')
                             ? 'text-[#2F7D47] font-semibold'
                             : '' }}">

                    Contact

                </a>


                {{-- LOGIN --}}
                <a href="{{ route('login') }}"
                   class="bg-[#479F61]
                          text-white
                          px-5 py-2.5
                          text-sm font-semibold
                          rounded-sm
                          hover:bg-[#2F7D47]
                          hover:shadow-md">

                    Login

                </a>

            </div>


            {{-- =================================================
                 MOBILE MENU BUTTON
            ================================================== --}}
            <button type="button"
                    id="mobile-menu-button"
                    class="lg:hidden
                           p-2
                           text-[#2F7D47]
                           hover:bg-[#EAF5ED]
                           transition"
                    aria-label="Open navigation menu"
                    aria-expanded="false">

                <svg class="w-7 h-7"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>


        {{-- =====================================================
             MOBILE NAVIGATION
        ====================================================== --}}
        <div id="mobile-menu"
             class="hidden lg:hidden
                    border-t border-gray-100
                    py-4">

            <div class="flex flex-col space-y-1">


                {{-- HOME --}}
                <a href="{{ route('home') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('home')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    Home

                </a>


                {{-- ABOUT --}}
                <a href="{{ route('about') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('about')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    About Us

                </a>


                {{-- SERVICES --}}
                <a href="{{ route('services') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('services')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    Services

                </a>


                {{-- LOANS --}}
                <a href="{{ route('loans') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('loans')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    Loan Products

                </a>


                {{-- MEMBERSHIP --}}
                <a href="{{ route('membership') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('membership')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    Membership

                </a>


                {{-- NEWS --}}
                <a href="{{ route('news') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('news')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    News

                </a>


                {{-- CONTACT --}}
                <a href="{{ route('contact') }}"
                   class="px-3 py-3
                          text-gray-700
                          hover:bg-[#EAF5ED]
                          hover:text-[#2F7D47]
                          {{ request()->routeIs('contact')
                             ? 'bg-[#EAF5ED] text-[#2F7D47] font-semibold'
                             : '' }}">

                    Contact

                </a>


                {{-- LOGIN --}}
                <a href="{{ route('login') }}"
                   class="mt-2
                          bg-[#479F61]
                          text-white
                          px-3 py-3
                          text-center
                          font-semibold
                          hover:bg-[#2F7D47]">

                    Login

                </a>

            </div>

        </div>

    </div>

</nav>


{{-- =========================================================
     MOBILE MENU SCRIPT
========================================================= --}}
<script>

    document.addEventListener('DOMContentLoaded', function () {

        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if (!button || !menu) {
            return;
        }

        button.addEventListener('click', function () {

            menu.classList.toggle('hidden');

            const isOpen = !menu.classList.contains('hidden');

            button.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

        });

    });

</script>
