<nav class="bg-[#3F4145] border-b border-white/10">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between h-16">

            {{-- BRAND --}}
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3">

                <img
                    src="{{ asset('images/urban-roads-logo.png') }}"
                    alt="Urban Roads SACCO"
                    class="w-10 h-10 object-contain"
                >

                <div class="hidden sm:block">

                    <p class="text-white font-bold leading-tight">
                        Urban Roads SACCO
                    </p>

                    <p class="text-xs text-gray-300">
                        CMS Administration
                    </p>

                </div>

            </a>


            {{-- DESKTOP NAVIGATION --}}
            <div class="hidden lg:flex items-center gap-1">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="px-4 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-[#479F61] text-white'
                        : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">

                    Dashboard

                </a>


                <a
                    href="{{ route('admin.news.index') }}"
                    class="px-4 py-2 text-sm font-medium
                    {{ request()->routeIs('admin.news.*')
                        ? 'bg-[#479F61] text-white'
                        : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">

                    News

                </a>


                <a
                    href="#"
                    class="px-4 py-2 text-sm font-medium
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Documents

                </a>


                <a
                    href="#"
                    class="px-4 py-2 text-sm font-medium
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Loan Products

                </a>


                <a
                    href="#"
                    class="px-4 py-2 text-sm font-medium
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Services

                </a>


                <a
                    href="#"
                    class="px-4 py-2 text-sm font-medium
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Membership

                </a>


                <a
                    href="#"
                    class="px-4 py-2 text-sm font-medium
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Admins

                </a>

            </div>


            {{-- RIGHT SIDE --}}
            <div class="flex items-center gap-3">

                {{-- PUBLIC WEBSITE --}}
                <a
                    href="{{ route('home') }}"
                    target="_blank"
                    class="hidden sm:inline-flex
                           items-center
                           px-4 py-2
                           text-sm
                           font-medium
                           text-gray-300
                           hover:text-white">

                    View Website ↗

                </a>


                {{-- USER --}}
                <div class="hidden md:block text-right">

                    <p class="text-sm font-semibold text-white">

                        {{ auth('admin')->user()->name }}

                    </p>

                    <p class="text-xs text-gray-400">

                        Administrator

                    </p>

                </div>


                {{-- LOGOUT --}}
                <form
                    method="POST"
                    action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2
                               text-sm
                               font-semibold
                               bg-[#D5595F]
                               text-white
                               hover:bg-[#B83F46]
                               transition">

                        Logout

                    </button>

                </form>


                {{-- MOBILE MENU BUTTON --}}
                <button
                    type="button"
                    onclick="document.getElementById('admin-mobile-menu').classList.toggle('hidden')"
                    class="lg:hidden
                           p-2
                           text-gray-300
                           hover:text-white
                           hover:bg-white/10">

                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>

                    </svg>

                </button>

            </div>

        </div>


        {{-- MOBILE NAVIGATION --}}
        <div
            id="admin-mobile-menu"
            class="hidden lg:hidden pb-4">

            <div class="space-y-1 pt-2">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="block px-4 py-3 text-sm font-medium
                    {{ request()->routeIs('admin.dashboard')
                        ? 'bg-[#479F61] text-white'
                        : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">

                    Dashboard

                </a>


                <a
                    href="{{ route('admin.news.index') }}"
                    class="block px-4 py-3 text-sm font-medium
                    {{ request()->routeIs('admin.news.*')
                        ? 'bg-[#479F61] text-white'
                        : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">

                    News

                </a>


                <a
                    href="#"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Documents

                </a>


                <a
                    href="#"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Loan Products

                </a>


                <a
                    href="#"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Services

                </a>


                <a
                    href="#"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Membership

                </a>


                <a
                    href="#"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    Administrators

                </a>


                <a
                    href="{{ route('home') }}"
                    target="_blank"
                    class="block px-4 py-3 text-sm
                           text-gray-300
                           hover:bg-white/10
                           hover:text-white">

                    View Public Website ↗

                </a>

            </div>

        </div>

    </div>

</nav>
