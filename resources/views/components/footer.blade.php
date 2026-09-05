<footer class="bg-[#003f7d] text-white">

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Brand --}}
            <div>

                <div class="flex items-center gap-3">

                    <div class="w-14 h-14 bg-white text-[#0056a6] flex items-center justify-center rounded-full font-bold text-xl">
                        UR
                    </div>

                    <div>
                        <h2 class="text-xl font-bold">
                            Urban Roads SACCO
                        </h2>

                        <p class="text-xs text-blue-200">
                            Savings & Credit Cooperative Society
                        </p>
                    </div>

                </div>

                <p class="text-blue-100 text-sm leading-relaxed mt-6">
                    Empowering members through quality savings,
                    affordable credit and reliable financial solutions.
                </p>

                <div class="w-12 h-1 bg-[#f4b400] mt-6"></div>

            </div>


            {{-- Quick Links --}}
            <div>

                <h3 class="text-lg font-bold">
                    Quick Links
                </h3>

                <div class="w-10 h-1 bg-[#f4b400] mt-3 mb-5"></div>

                <ul class="space-y-3 text-sm">

                    <li>
                        <a href="{{ route('home') }}"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#services"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            Our Services
                        </a>
                    </li>

                    <li>
                        <a href="#loans"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            Loan Products
                        </a>
                    </li>

                    <li>
                        <a href="#membership"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            Membership
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                           class="text-blue-100 hover:text-white hover:pl-1 transition">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>


            {{-- Products --}}
            <div>

                <h3 class="text-lg font-bold">
                    Loan Products
                </h3>

                <div class="w-10 h-1 bg-[#168a45] mt-3 mb-5"></div>

                <ul class="space-y-3 text-sm">

                    <li class="text-blue-100">
                        Normal / Main Loan
                    </li>

                    <li class="text-blue-100">
                        Super ROUSA Loan
                    </li>

                    <li class="text-blue-100">
                        Super Development Loan
                    </li>

                    <li class="text-blue-100">
                        Emergency Loan
                    </li>

                    <li class="text-blue-100">
                        School Fees Loan
                    </li>

                    <li class="text-blue-100">
                        Salary Advance Loan
                    </li>

                    <li class="text-blue-100">
                        Motor Vehicle Insurance Loan
                    </li>

                </ul>

            </div>


            {{-- Contact --}}
            <div>

                <h3 class="text-lg font-bold">
                    Contact Us
                </h3>

                <div class="w-10 h-1 bg-[#f4b400] mt-3 mb-5"></div>


                <div class="space-y-5 text-sm">

                    {{-- Email --}}
                    <div class="flex gap-3">

                        <div class="w-9 h-9 flex-shrink-0 bg-white/10 flex items-center justify-center rounded-sm">
                            @
                        </div>

                        <div>
                            <p class="text-blue-200 text-xs uppercase">
                                Email
                            </p>

                            <a href="mailto:sacco@kura.go.ke"
                               class="text-white hover:text-[#f4b400] transition">
                                sacco@kura.go.ke
                            </a>
                        </div>

                    </div>


                    {{-- Phone --}}
                    <div class="flex gap-3">

                        <div class="w-9 h-9 flex-shrink-0 bg-white/10 flex items-center justify-center rounded-sm">
                            ☎
                        </div>

                        <div>
                            <p class="text-blue-200 text-xs uppercase">
                                Customer Care
                            </p>

                            <a href="tel:0793524349"
                               class="text-white hover:text-[#f4b400] transition">
                                0793 524 349
                            </a>
                        </div>

                    </div>


                    {{-- Working Hours --}}
                    <div class="flex gap-3">

                        <div class="w-9 h-9 flex-shrink-0 bg-white/10 flex items-center justify-center rounded-sm">
                            ⏰
                        </div>

                        <div>
                            <p class="text-blue-200 text-xs uppercase">
                                Working Hours
                            </p>

                            <p class="text-white">
                                Mon - Fri: 9:00am - 5:00pm
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Footer Bottom --}}
    <div class="border-t border-white/10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="py-6 flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-sm text-blue-200 text-center md:text-left">
                    © {{ date('Y') }} Urban Roads SACCO.
                    All Rights Reserved.
                </p>

                <div class="flex items-center gap-5 text-sm">

                    <a href="#"
                       class="text-blue-200 hover:text-white transition">
                        Privacy Policy
                    </a>

                    <span class="text-blue-400">|</span>

                    <a href="#"
                       class="text-blue-200 hover:text-white transition">
                        Terms & Conditions
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>
