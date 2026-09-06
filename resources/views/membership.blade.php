@extends('layouts.app')

@section('title', 'Membership | Urban Roads SACCO')

@section('content')

{{-- =========================================================
     PAGE HEADER
========================================================= --}}
<section class="relative overflow-hidden bg-[#2F7D47]">

    <div class="absolute -top-20 -right-20
                w-64 h-64
                rounded-full
                bg-[#479F61]/30">
    </div>

    <div class="absolute -bottom-24 -left-20
                w-72 h-72
                rounded-full
                bg-[#F7D928]/10">
    </div>

    <div class="relative max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-16 lg:py-20">

        <p class="text-sm font-semibold uppercase
                  tracking-wider text-[#F7D928]">
            Join Us
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl
                   font-bold text-white">
            SACCO Membership
        </h1>

        <p class="mt-5 max-w-2xl
                  text-[#EAF5ED]
                  leading-relaxed">
            Become a member of Urban Roads SACCO and take advantage of
            savings, credit and other member-focused financial services.
        </p>

    </div>

</section>


{{-- =========================================================
     ELIGIBILITY
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2
                    gap-12 lg:gap-20
                    items-start">

            {{-- INTRODUCTION --}}
            <div>

                <p class="text-sm font-semibold
                          uppercase tracking-wider
                          text-[#479F61]">
                    Who Can Join?
                </p>

                <h2 class="mt-3 text-3xl sm:text-4xl
                           font-bold text-[#2F7D47]">
                    Membership Eligibility
                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-5">
                </div>

                <p class="mt-6 text-gray-600
                          leading-relaxed">
                    Membership is open to staff and eligible project staff
                    working within the road sector institutions served by
                    Urban Roads SACCO.
                </p>

                <div class="mt-8
                            bg-[#EAF5ED]
                            border-l-4
                            border-[#479F61]
                            p-5">

                    <p class="text-sm
                              font-semibold
                              text-[#2F7D47]">
                        Membership is open to:
                    </p>

                    <p class="mt-2 text-sm
                              text-gray-600
                              leading-relaxed">
                        Staff of Kenya Urban Roads Authority, Kenya National
                        Highways Authority, Kenya Rural Roads Authority,
                        Kenya Roads Board and Project Staff.
                    </p>

                </div>

            </div>


            {{-- ELIGIBLE MEMBERS --}}
            <div class="bg-[#F7F8F7]
                        border border-gray-200
                        p-7 md:p-8">

                <div class="flex items-center
                            justify-between gap-4">

                    <h3 class="text-xl font-bold
                               text-[#2F7D47]">
                        Eligible Members
                    </h3>

                    <div class="w-10 h-10
                                bg-[#F7D928]
                                text-[#252525]
                                flex items-center justify-center
                                font-bold">
                        ✓
                    </div>

                </div>

                <ul class="mt-7 space-y-4">

                    {{-- KURA --}}
                    <li class="flex items-start gap-3">

                        <span class="mt-0.5
                                     w-7 h-7 shrink-0
                                     bg-[#EAF5ED]
                                     text-[#2F7D47]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700 leading-relaxed">
                            Staff of Kenya Urban Roads Authority (KURA)
                        </span>

                    </li>

                    {{-- KENHA --}}
                    <li class="flex items-start gap-3">

                        <span class="mt-0.5
                                     w-7 h-7 shrink-0
                                     bg-[#EAF5ED]
                                     text-[#2F7D47]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700 leading-relaxed">
                            Staff of Kenya National Highways Authority (KeNHA)
                        </span>

                    </li>

                    {{-- KERRA --}}
                    <li class="flex items-start gap-3">

                        <span class="mt-0.5
                                     w-7 h-7 shrink-0
                                     bg-[#EAF5ED]
                                     text-[#2F7D47]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700 leading-relaxed">
                            Staff of Kenya Rural Roads Authority (KeRRA)
                        </span>

                    </li>

                    {{-- KRB --}}
                    <li class="flex items-start gap-3">

                        <span class="mt-0.5
                                     w-7 h-7 shrink-0
                                     bg-[#EAF5ED]
                                     text-[#2F7D47]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700 leading-relaxed">
                            Staff of Kenya Roads Board (KRB)
                        </span>

                    </li>

                    {{-- PROJECT STAFF --}}
                    <li class="flex items-start gap-3">

                        <span class="mt-0.5
                                     w-7 h-7 shrink-0
                                     bg-[#EAF5ED]
                                     text-[#2F7D47]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700 leading-relaxed">
                            Project Staff
                        </span>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     BENEFITS
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase tracking-wider
                      text-[#479F61]">
                Member Benefits
            </p>

            <h2 class="mt-3 text-3xl sm:text-4xl
                       font-bold text-[#2F7D47]">
                Why Become a Member?
            </h2>

            <div class="w-12 h-1
                        bg-[#F7D928]
                        mx-auto mt-4">
            </div>

        </div>


        <div class="grid md:grid-cols-2
                    lg:grid-cols-4
                    gap-6 mt-12">

            {{-- SAVINGS --}}
            <div class="bg-white
                        border border-gray-200
                        p-7
                        hover:border-[#479F61]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-12 h-12
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold">
                    S
                </div>

                <h3 class="mt-5 text-lg
                           font-bold text-[#2F7D47]">
                    Savings
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Build a culture of saving and strengthen your financial
                    security.
                </p>

            </div>


            {{-- LOANS --}}
            <div class="bg-white
                        border border-gray-200
                        p-7
                        hover:border-[#D5595F]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-12 h-12
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold">
                    L
                </div>

                <h3 class="mt-5 text-lg
                           font-bold text-[#2F7D47]">
                    Affordable Loans
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Access credit facilities designed to meet different
                    member financial needs.
                </p>

            </div>


            {{-- FINANCIAL SUPPORT --}}
            <div class="bg-white
                        border border-gray-200
                        p-7
                        hover:border-[#F7D928]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-12 h-12
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold">
                    F
                </div>

                <h3 class="mt-5 text-lg
                           font-bold text-[#2F7D47]">
                    Financial Support
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Get financial solutions that can support personal,
                    educational and development goals.
                </p>

            </div>


            {{-- MEMBER FOCUS --}}
            <div class="bg-white
                        border border-gray-200
                        p-7
                        hover:border-[#479F61]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-12 h-12
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold">
                    M
                </div>

                <h3 class="mt-5 text-lg
                           font-bold text-[#2F7D47]">
                    Member Focus
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Enjoy services structured around the needs and interests
                    of SACCO members.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     HOW TO JOIN
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-6xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase tracking-wider
                      text-[#479F61]">
                Get Started
            </p>

            <h2 class="mt-3 text-3xl sm:text-4xl
                       font-bold text-[#2F7D47]">
                How to Become a Member
            </h2>

            <div class="w-12 h-1
                        bg-[#F7D928]
                        mx-auto mt-4">
            </div>

        </div>


        <div class="grid md:grid-cols-3
                    gap-8 mt-12">


            {{-- STEP 1 --}}
            <div class="relative text-center">

                <div class="mx-auto w-14 h-14
                            rounded-full
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold text-lg
                            border-2 border-[#479F61]">
                    1
                </div>

                <h3 class="mt-6
                           font-bold text-xl
                           text-[#2F7D47]">
                    Confirm Eligibility
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Confirm that you fall within the SACCO's eligible
                    membership categories.
                </p>

            </div>


            {{-- STEP 2 --}}
            <div class="relative text-center">

                <div class="mx-auto w-14 h-14
                            rounded-full
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold text-lg
                            border-2 border-[#D5595F]">
                    2
                </div>

                <h3 class="mt-6
                           font-bold text-xl
                           text-[#2F7D47]">
                    Contact the SACCO
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Contact our office for membership requirements,
                    application forms and further guidance.
                </p>

            </div>


            {{-- STEP 3 --}}
            <div class="relative text-center">

                <div class="mx-auto w-14 h-14
                            rounded-full
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold text-lg
                            border-2 border-[#F7D928]">
                    3
                </div>

                <h3 class="mt-6
                           font-bold text-xl
                           text-[#2F7D47]">
                    Complete Registration
                </h3>

                <p class="mt-3 text-sm
                          text-gray-600
                          leading-relaxed">
                    Submit the required information and complete the
                    membership registration process.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP HIGHLIGHT
========================================================= --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-5xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="bg-white
                    border border-gray-200
                    p-8 md:p-10
                    text-center">

            <div class="mx-auto w-14 h-14
                        bg-[#EAF5ED]
                        flex items-center justify-center">

                <img src="{{ asset('images/logo.png') }}"
                     alt="Urban Roads SACCO Logo"
                     class="w-12 h-12 object-contain">

            </div>

            <h2 class="mt-6 text-2xl md:text-3xl
                       font-bold text-[#2F7D47]">
                Become Part of Urban Roads SACCO
            </h2>

            <p class="mt-4 max-w-2xl
                      mx-auto
                      text-gray-600
                      leading-relaxed">
                Join a member-focused cooperative committed to supporting
                savings, access to credit and financial growth.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      gap-2
                      mt-7
                      bg-[#479F61]
                      text-white
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#2F7D47]
                      hover:shadow-md
                      transition-all duration-200">

                Contact the SACCO
                <span>→</span>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}
<section class="bg-[#2F7D47]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase tracking-wider
                      text-[#F7D928]">
                Ready to Join?
            </p>

            <h2 class="mt-3 text-3xl md:text-4xl
                       font-bold text-white">
                Start Your Membership Journey
            </h2>

            <p class="mt-4 text-[#EAF5ED]
                      max-w-2xl mx-auto">
                Contact Urban Roads SACCO today to learn more about
                membership and the registration process.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      gap-2
                      mt-7
                      bg-white
                      text-[#2F7D47]
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#F7D928]
                      hover:text-[#252525]
                      transition-all duration-200">

                Contact Us
                <span>→</span>

            </a>

        </div>

    </div>

</section>

@endsection
