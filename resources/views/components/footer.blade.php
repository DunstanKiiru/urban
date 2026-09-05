<footer class="bg-[#003f7d] text-white">

    {{-- =====================================================
         MAIN FOOTER
    ====================================================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">


            {{-- BRAND --}}
            <div>

                <a href="{{ route('home') }}"
                   class="flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full
                                bg-white text-[#0056a6]
                                flex items-center justify-center
                                font-bold text-lg">
                        UR
                    </div>

                    <div>

                        <div class="font-bold text-lg">
                            Urban Roads SACCO
                        </div>

                        <div class="text-xs text-blue-200">
                            Savings & Credit Co-operative Society
                        </div>

                    </div>

                </a>


                <p class="mt-5 text-sm text-blue-100
                          leading-relaxed">

                    Empowering members through savings,
                    affordable credit and quality financial
                    services.

                </p>


                <a href="{{ route('about') }}"
                   class="inline-block mt-5 text-sm
                          font-semibold text-[#f4b400]
                          hover:underline">

                    Learn More About Us →

                </a>

            </div>


            {{-- QUICK LINKS --}}
            <div>

                <h3 class="text-lg font-bold">
                    Quick Links
                </h3>

                <div class="w-8 h-1 bg-[#f4b400]
                            mt-3 mb-5">
                </div>

                <ul class="space-y-3 text-sm">

                    <li>
                        <a href="{{ route('home') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Our Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('membership') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Membership
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('news') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            News & Announcements
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>


            {{-- LOAN PRODUCTS --}}
            <div>

                <h3 class="text-lg font-bold">
                    Loan Products
                </h3>

                <div class="w-8 h-1 bg-[#f4b400]
                            mt-3 mb-5">
                </div>

                <ul class="space-y-3 text-sm">

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Normal Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Super ROUSA
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Super Development Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Emergency Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            School Fees Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Salary Advance Loan
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('loans') }}"
                           class="text-blue-100
                                  hover:text-white transition">
                            Motor Vehicle Insurance Loan
                        </a>
                    </li>

                </ul>

            </div>


            {{-- CONTACT --}}
            <div>

                <h3 class="text-lg font-bold">
                    Contact Us
                </h3>

                <div class="w-8 h-1 bg-[#f4b400]
                            mt-3 mb-5">
                </div>


                <div class="space-y-5 text-sm">

                    {{-- EMAIL --}}
                    <div>

                        <p class="text-blue-200 text-xs
                                  uppercase tracking-wide">
                            Email
                        </p>

                        <a href="mailto:sacco@kura.go.ke"
                           class="mt-1 inline-block
                                  text-white hover:text-[#f4b400]">

                            sacco@kura.go.ke

                        </a>

                    </div>


                    {{-- PHONE --}}
                    <div>

                        <p class="text-blue-200 text-xs
                                  uppercase tracking-wide">
                            Customer Care
                        </p>

                        <a href="tel:0793524349"
                           class="mt-1 inline-block
                                  text-white hover:text-[#f4b400]">

                            0793 524 349

                        </a>

                    </div>


                    {{-- HOURS --}}
                    <div>

                        <p class="text-blue-200 text-xs
                                  uppercase tracking-wide">
                            Working Hours
                        </p>

                        <p class="mt-1 text-white">
                            Monday - Friday
                        </p>

                        <p class="text-blue-100">
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
    <div class="border-t border-blue-800">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="py-5 flex flex-col md:flex-row
                        items-center justify-between
                        gap-3">

                <p class="text-sm text-blue-200
                          text-center md:text-left">

                    © {{ date('Y') }} Urban Roads SACCO.
                    All rights reserved.

                </p>


                <div class="flex items-center gap-5 text-sm">

                    <a href="#"
                       class="text-blue-200
                              hover:text-white transition">
                        Privacy Policy
                    </a>

                    <a href="#"
                       class="text-blue-200
                              hover:text-white transition">
                        Terms & Conditions
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>
