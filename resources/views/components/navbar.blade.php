
<div class="bg-[#003f7d] text-white text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-center py-2 gap-2">
            <div class="flex items-center gap-4">
                <span>Urban Roads SACCO</span>
                <span class="hidden sm:inline text-blue-200">|</span>
                <span class="text-blue-100">Empowering Members. Building Futures.</span>
            </div>

            <div class="flex items-center gap-4">
                <a href="mailto:sacco@kura.go.ke"
                   class="hover:text-yellow-300 transition">
                    sacco@kura.go.ke
                </a>

                <span class="text-blue-200">|</span>

                <a href="{{ route('contact') }}"
                   class="hover:text-yellow-300 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-24">

            <!-- Logo / Brand -->
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-14 h-14 rounded-full bg-[#0056a6] flex items-center justify-center">
                    <span class="text-white font-bold text-xl">UR</span>
                </div>

                <div>
                    <h1 class="text-xl font-bold text-[#003f7d] leading-tight">
                        Urban Roads SACCO
                    </h1>

                    <p class="text-xs text-gray-500">
                        Savings & Credit Cooperative Society
                    </p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-7">

                <a href="{{ route('home') }}"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    About Us
                </a>

                <a href="#services"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    Services
                </a>

                <a href="{{ route('loans') }}"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    Loan Products
                </>

                <a href="#membership"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    Membership
                </a>

                <a href="{{ route('contact') }}"
                   class="text-gray-700 hover:text-[#0056a6] font-medium transition">
                    Contact
                </a>

                <a href="#"
                   class="bg-[#0056a6] hover:bg-[#003f7d] text-white px-5 py-2.5 rounded-sm font-semibold transition">
                    Login
                </a>

            </nav>

            <!-- Mobile Button -->
            <button
                type="button"
                class="lg:hidden text-[#003f7d] text-2xl"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                ☰
            </button>

        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-200 py-4">

            <nav class="flex flex-col gap-1">

                <a href="{{ route('home') }}"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    Home
                </a>

                <a href="{{ route('about') }}"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    About Us
                </a>

                <a href="#services"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    Services
                </a>

                <a href="{{ route('loans') }}"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    Loan Products
                </a>

                <a href="#membership"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    Membership
                </a>

                <a href="{{ route('contact') }}"
                   class="px-4 py-3 hover:bg-[#eaf3fb] text-gray-700">
                    Contact
                </a>

                <a href="#"
                   class="mt-2 mx-4 text-center bg-[#0056a6] hover:bg-[#003f7d] text-white px-5 py-3 rounded-sm font-semibold">
                    Login
                </a>

            </nav>

        </div>

    </div>
</header>
