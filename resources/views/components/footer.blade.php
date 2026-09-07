<footer class="bg-[#3F4145] text-white">

    {{-- =====================================================
         MAIN FOOTER
    ====================================================== --}}
    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="grid md:grid-cols-2
                    lg:grid-cols-4
                    gap-10">


            {{-- =================================================
                 BRAND
            ================================================== --}}
            <div>

                <a href="{{ route('home') }}"
                   class="flex items-center gap-3">

                    {{-- OFFICIAL LOGO --}}
                    <div class="shrink-0">

                        <img src="{{ asset('images/logo.png') }}"
                             alt="Urban Roads SACCO Logo"
                             class="w-16 h-16 object-contain">

                    </div>


                    <div>

                        <div class="font-bold text-lg">

                            Urban Roads SACCO

                        </div>

                        <div class="text-xs text-gray-300">

                            Savings & Credit
                            Co-operative Society Limited

                        </div>

                    </div>

                </a>


                <p class="mt-5 text-sm text-gray-300
                          leading-relaxed">

                    Empowering members through savings,
                    affordable credit and quality financial
                    services.

                </p>


                <a href="{{ route('about') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#F7D928]
                          hover:text-white
                          hover:underline">

                    Learn More About Us →

                </a>

            </div>


            {{-- =================================================
                 QUICK LINKS
            ================================================== --}}
            <div>

                <h3 class="text-lg font-bold">

                    Quick Links

                </h3>

                <div class="w-8 h-1
                            bg-[#479F61]
                            mt-3 mb-5">
                </div>


                <ul class="space-y-3 text-sm">


                    <li>
                        <a href="{{ route('home') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Home
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('about') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            About Us
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('services') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Our Services
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('membership') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Membership
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('news') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            News & Announcements
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('contact') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
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

                <div class="w-8 h-1
                            bg-[#D5595F]
                            mt-3 mb-5">
                </div>


                <ul class="space-y-3 text-sm">


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Normal Loan
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Super ROUSA
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Super Development Loan
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Emergency Loan
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            School Fees Loan
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
                            Salary Advance Loan
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-gray-300
                                  hover:text-[#F7D928]">
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

                <div class="w-8 h-1
                            bg-[#F7D928]
                            mt-3 mb-5">
                </div>


                <div class="space-y-5 text-sm">


                    {{-- EMAIL --}}
                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-wide">

                            Email

                        </p>

                        <a href="mailto:sacco@kura.go.ke"
                           class="mt-1 inline-block
                                  text-white
                                  hover:text-[#F7D928]">

                            sacco@kura.go.ke

                        </a>

                    </div>


                    {{-- PHONE --}}
                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-wide">

                            Customer Care

                        </p>

                        <a href="tel:0793524349"
                           class="mt-1 inline-block
                                  text-white
                                  hover:text-[#F7D928]">

                            0793 524 349

                        </a>

                    </div>


                    {{-- WORKING HOURS --}}
                    <div>

                        <p class="text-gray-400
                                  text-xs
                                  uppercase
                                  tracking-wide">

                            Working Hours

                        </p>

                        <p class="mt-1 text-white">

                            Monday - Friday

                        </p>

                        <p class="text-gray-300">

                            9:00 AM - 5:00 PM

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         BOTTOM FOOTER
    ====================================================== --}}
    <div class="border-t border-gray-600">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">

            <div class="py-5
                        flex flex-col
                        md:flex-row
                        items-center
                        justify-between
                        gap-3">


                {{-- COPYRIGHT --}}
                <p class="text-sm text-gray-400
                          text-center
                          md:text-left">

                    © {{ date('Y') }}
                    Urban Roads SACCO.
                    All rights reserved.

                </p>


                {{-- LEGAL --}}
                <div class="flex items-center
                            gap-5 text-sm">

                    <a href="#"
                       class="text-gray-400
                              hover:text-white">

                        Privacy Policy

                    </a>

                    <a href="#"
                       class="text-gray-400
                              hover:text-white">

                        Terms & Conditions

                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>
