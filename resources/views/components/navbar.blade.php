<nav class="bg-white border-b border-gray-200">

    {{-- TOP CONTACT BAR --}}
    <div class="bg-[#003f7d]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-center
                        sm:justify-between gap-1 py-2
                        text-sm text-white">

                <div>
                    Email:
                    <a href="mailto:sacco@kura.go.ke"
                       class="hover:text-[#f4b400] transition">
                        sacco@kura.go.ke
                    </a>
                </div>

                <div>
                    Customer Care:
                    <a href="tel:0793524349"
                       class="hover:text-[#f4b400] transition">
                        0793 524 349
                    </a>
                </div>

            </div>

        </div>
    </div>


    {{-- MAIN NAVIGATION --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-20">

            {{-- LOGO / BRAND --}}
            <a href="{{ route('home') }}"
               class="flex items-center gap-3">

                <div class="w-12 h-12 rounded-full
                            bg-[#0056a6] text-white
                            flex items-center justify-center
                            font-bold text-lg">
                    UR
                </div>

                <div>
                    <div class="font-bold text-[#003f7d] text-lg leading-tight">
                        Urban Roads SACCO
                    </div>

                    <div class="text-[10px] sm:text-xs text-gray-500
                                font-medium tracking-wide">
                        SAVINGS & CREDIT CO-OPERATIVE SOCIETY
                    </div>
                </div>

            </a>


            {{-- DESKTOP NAVIGATION --}}
            <div class="hidden lg:flex items-center gap-6">

                <a href="{{ route('home') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    About Us
                </a>

                <a href="{{ route('services') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    Services
                </a>

                <a href="{{ route('loans') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    Loan Products
                </a>

                <a href="{{ route('membership') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    Membership
                </a>

                <a href="{{ route('news') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    News
                </a>

                <a href="{{ route('contact') }}"
                   class="text-sm font-medium text-gray-700
                          hover:text-[#0056a6] transition">
                    Contact
                </a>

                <a href="{{ route('login') }}"
                   class="bg-[#0056a6] text-white
                          px-5 py-2.5 text-sm font-semibold
                          rounded-sm hover:bg-[#003f7d]
                          transition">
                    Login
                </a>

            </div>


            {{-- MOBILE MENU BUTTON --}}
            <button type="button"
                    id="mobile-menu-button"
                    class="lg:hidden text-[#003f7d]
                           hover:text-[#0056a6] transition"
                    aria-label="Open navigation menu">

                <svg class="w-7 h-7"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>

        </div>


        {{-- MOBILE NAVIGATION --}}
        <div id="mobile-menu"
             class="hidden lg:hidden border-t border-gray-100 py-4">

            <div class="flex flex-col space-y-1">

                <a href="{{ route('home') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    About Us
                </a>

                <a href="{{ route('services') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    Services
                </a>

                <a href="{{ route('loans') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    Loan Products
                </a>

                <a href="{{ route('membership') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    Membership
                </a>

                <a href="{{ route('news') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    News
                </a>

                <a href="{{ route('contact') }}"
                   class="px-3 py-3 text-gray-700
                          hover:bg-[#eaf3fb]
                          hover:text-[#0056a6] transition">
                    Contact
                </a>

                <a href="{{ route('login') }}"
                   class="mt-2 bg-[#0056a6] text-white
                          px-3 py-3 text-center font-semibold
                          hover:bg-[#003f7d] transition">
                    Login
                </a>

            </div>

        </div>

    </div>

</nav>


{{-- MOBILE MENU SCRIPT --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if (button && menu) {

            button.addEventListener('click', function () {
                menu.classList.toggle('hidden');
            });

        }

    });
</script>
