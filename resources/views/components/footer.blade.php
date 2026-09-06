<footer class="bg-[#2F7D47] text-white">

    {{-- =====================================================
         MAIN FOOTER
    ====================================================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- =================================================
                 BRAND
            ================================================== --}}
            <div>

                <a href="{{ route('home') }}"
                   class="flex items-center gap-3 group">

                    {{-- OFFICIAL CIRCULAR LOGO --}}
                    <div class="shrink-0">
                        <img src="{{ asset('images/logo.png') }}"
                             alt="Urban Roads SACCO Logo"
                             class="w-14 h-14 object-contain
                                    bg-white rounded-full
                                    p-0.5
                                    group-hover:scale-105
                                    transition-transform duration-200">
                    </div>

                    {{-- ORGANIZATION NAME --}}
                    <div class="min-w-0">
                        <div class="font-bold text-lg leading-tight">
                            Urban Roads SACCO
                        </div>

                        <div class="text-[10px] text-[#EAF5ED]
                                    uppercase tracking-wide
                                    leading-tight mt-0.5">
                            Savings & Credit Co-operative Society
                        </div>
                    </div>

                </a>


                {{-- DESCRIPTION --}}
                <p class="mt-5 text-sm text-[#EAF5ED]
                          leading-relaxed max-w-sm">
                    Empowering members through savings,
                    affordable credit and quality financial
                    services for a better financial future.
                </p>


                {{-- ABOUT LINK --}}
                <a href="{{ route('about') }}"
                   class="inline-flex items-center gap-2
                          mt-5 text-sm font-semibold
                          text-[#F7D928]
                          hover:text-white
                          transition-colors duration-200">

                    Learn More About Us

                    <span aria-hidden="true">→</span>

                </a>

            </div>


            {{-- =================================================
                 QUICK LINKS
            ================================================== --}}
            <div>

                <h3 class="text-lg font-bold">
                    Quick Links
                </h3>

                <div class="w-10 h-1
                            bg-[#F7D928]
                            mt-3 mb-5">
                </div>

                <ul class="space-y-3 text-sm">

                    <li>
                        <a href="{{ route('home') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Our Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Loan Products
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('membership') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Membership
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('news') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            News & Announcements
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                 LOAN PRODUCTS
            ================================================== --}}
            <div>

                <h3 class="text-lg font-bold">
                    Loan Products
                </h3>

                <div class="w-10 h-1
                            bg-[#F7D928]
                            mt-3 mb-5">
                </div>

                <ul class="space-y-3 text-sm">

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Normal Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Super ROUSA
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Super Development Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Emergency Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            School Fees Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Salary Advance Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-[#EAF5ED]
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            Motor Vehicle Insurance Loan
                        </a>
                    </li>

                </ul>

            </div>


            {{-- =================================================
                 CONTACT
            ================================================== --}}
            <div>

                <h3 class="text-lg font-bold">
                    Contact Us
                </h3>

                <div class="w-10 h-1
                            bg-[#F7D928]
                            mt-3 mb-5">
                </div>


                <div class="space-y-5 text-sm">

                    {{-- EMAIL --}}
                    <div>

                        <p class="text-[#EAF5ED]/70
                                  text-xs
                                  uppercase
                                  tracking-wide">
                            Email
                        </p>

                        <a href="mailto:sacco@kura.go.ke"
                           class="mt-1 inline-block
                                  text-white
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            sacco@kura.go.ke
                        </a>

                    </div>


                    {{-- PHONE --}}
                    <div>

                        <p class="text-[#EAF5ED]/70
                                  text-xs
                                  uppercase
                                  tracking-wide">
                            Customer Care
                        </p>

                        <a href="tel:0793524349"
                           class="mt-1 inline-block
                                  text-white
                                  hover:text-[#F7D928]
                                  transition-colors duration-200">
                            0793 524 349
                        </a>

                    </div>


                    {{-- HOURS --}}
                    <div>

                        <p class="text-[#EAF5ED]/70
                                  text-xs
                                  uppercase
                                  tracking-wide">
                            Working Hours
                        </p>

                        <p class="mt-1 text-white">
                            Monday - Friday
                        </p>

                        <p class="text-[#EAF5ED]">
                            9:00 AM - 5:00 PM
                        </p>

                    </div>


                    {{-- ADDRESS --}}
                    <div>

                        <p class="text-[#EAF5ED]/70
                                  text-xs
                                  uppercase
                                  tracking-wide">
                            Location
                        </p>

                        <p class="mt-1 text-white leading-relaxed">
                            Urban Roads SACCO Offices
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         FOOTER ACCENT
    ====================================================== --}}
    <div class="h-1 bg-[#F7D928]"></div>


    {{-- =====================================================
         BOTTOM FOOTER
    ====================================================== --}}
    <div class="bg-[#25663A]">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="py-5
                        flex flex-col md:flex-row
                        items-center justify-between
                        gap-3">

                {{-- COPYRIGHT --}}
                <p class="text-sm text-[#EAF5ED]/80
                          text-center md:text-left">
                    © {{ date('Y') }} Urban Roads SACCO.
                    All rights reserved.
                </p>


                {{-- LEGAL LINKS --}}
                <div class="flex items-center
                            gap-5 text-sm">

                    <a href="#"
                       class="text-[#EAF5ED]/80
                              hover:text-[#F7D928]
                              transition-colors duration-200">
                        Privacy Policy
                    </a>

                    <a href="#"
                       class="text-[#EAF5ED]/80
                              hover:text-[#F7D928]
                              transition-colors duration-200">
                        Terms & Conditions
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>
