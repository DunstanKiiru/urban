@extends('layouts.app')

@section('title', 'About Us | Urban Roads SACCO')

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

        <p class="text-sm font-semibold
                  uppercase
                  tracking-wider
                  text-[#F7D928]">

            About Urban Roads SACCO

        </p>

        <h1 class="mt-3
                   text-4xl md:text-5xl
                   font-bold
                   text-white">

            About Us

        </h1>

        <p class="mt-5
                  max-w-2xl
                  text-[#EAF5ED]
                  leading-relaxed">

            Empowering members through savings, affordable credit
            and quality financial services.

        </p>

    </div>

</section>


{{-- =========================================================
     WHO WE ARE
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2
                    gap-12 lg:gap-20
                    items-center">

            {{-- CONTENT --}}
            <div>

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#479F61]">

                    Who We Are

                </p>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-bold
                           text-[#2F7D47]
                           leading-tight">

                    A SACCO Built Around
                    <span class="block text-[#252525]">
                        Its Members
                    </span>

                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-5">
                </div>

                <p class="mt-6
                          text-gray-600
                          leading-relaxed">

                    Urban Roads SACCO is a member-focused Savings and Credit
                    Cooperative Society committed to providing quality
                    savings, credit and financial services to its members.

                </p>

                <p class="mt-4
                          text-gray-600
                          leading-relaxed">

                    We seek to create opportunities that enable our members
                    to save, access affordable credit and improve their
                    financial wellbeing.

                </p>

                <p class="mt-4
                          text-gray-600
                          leading-relaxed">

                    Through responsible financial services and member
                    engagement, the SACCO continues to support members in
                    achieving their personal and financial aspirations.

                </p>

            </div>


            {{-- COMMITMENT CARD --}}
            <div class="relative">

                <div class="bg-[#F7F8F7]
                            p-8 sm:p-10
                            border-l-4
                            border-[#479F61]">

                    <div class="w-14 h-1
                                bg-[#F7D928]
                                mb-7">
                    </div>

                    <div class="w-14 h-14
                                bg-[#EAF5ED]
                                flex items-center justify-center
                                mb-6">

                        <img src="{{ asset('images/logo.png') }}"
                             alt="Urban Roads SACCO Logo"
                             class="w-12 h-12 object-contain">

                    </div>

                    <h3 class="text-2xl
                               font-bold
                               text-[#2F7D47]">

                        Our Commitment

                    </h3>

                    <p class="mt-5
                              text-gray-600
                              leading-relaxed">

                        We are committed to putting our members at the centre
                        of what we do by providing reliable, accessible and
                        sustainable financial solutions.

                    </p>

                    <div class="mt-7
                                flex items-center gap-3">

                        <div class="w-10 h-1
                                    bg-[#479F61]">
                        </div>

                        <span class="text-sm
                                     font-semibold
                                     text-[#2F7D47]">

                            Member First

                        </span>

                    </div>

                </div>

                <div class="absolute
                            -bottom-3
                            -right-3
                            w-16 h-16
                            border-r-4
                            border-b-4
                            border-[#F7D928]">
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     MISSION VISION VALUES
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">

            <p class="text-sm font-semibold
                      uppercase
                      tracking-wider
                      text-[#479F61]">
                Our Foundation
            </p>

            <h2 class="mt-3
                       text-3xl sm:text-4xl
                       font-bold
                       text-[#2F7D47]">
                What Guides Us
            </h2>

            <div class="w-12 h-1
                        bg-[#F7D928]
                        mx-auto mt-4">
            </div>

        </div>


        <div class="grid md:grid-cols-3
                    gap-6">

            {{-- VISION --}}
            <div class="bg-white
                        border border-gray-200
                        p-8
                        hover:border-[#479F61]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-14 h-14
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold text-lg">

                    V

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">

                    Our Vision

                </h3>

                <p class="mt-4
                          text-gray-600
                          leading-relaxed">

                    To be a trusted and leading member-focused SACCO,
                    creating lasting financial opportunities for our
                    members.

                </p>

            </div>


            {{-- MISSION --}}
            <div class="bg-white
                        border border-gray-200
                        p-8
                        hover:border-[#479F61]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-14 h-14
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold text-lg">

                    M

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">

                    Our Mission

                </h3>

                <p class="mt-4
                          text-gray-600
                          leading-relaxed">

                    To provide quality savings, credit and financial
                    services that empower our members to achieve their
                    financial goals.

                </p>

            </div>


            {{-- VALUES --}}
            <div class="bg-white
                        border border-gray-200
                        p-8
                        hover:border-[#F7D928]
                        hover:shadow-lg
                        transition-all duration-200">

                <div class="w-14 h-14
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold text-lg">

                    V

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">

                    Our Values

                </h3>

                <ul class="mt-5
                           space-y-3
                           text-gray-600">

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#479F61]"></span>
                        Integrity
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#479F61]"></span>
                        Transparency
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#479F61]"></span>
                        Accountability
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#479F61]"></span>
                        Member Focus
                    </li>

                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-[#479F61]"></span>
                        Professionalism
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHAT WE DO
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-6xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase
                      tracking-wider
                      text-[#479F61]">

                What We Do

            </p>

            <h2 class="mt-3
                       text-3xl sm:text-4xl
                       font-bold
                       text-[#2F7D47]">

                Supporting Our Members

            </h2>

            <div class="w-12 h-1
                        bg-[#F7D928]
                        mx-auto mt-4">
            </div>

            <p class="mt-5
                      max-w-2xl
                      mx-auto
                      text-gray-600
                      leading-relaxed">

                Our services are designed to help members build financial
                stability and access opportunities when they need them.

            </p>

        </div>


        <div class="grid md:grid-cols-3
                    gap-6
                    mt-12">

            {{-- SAVINGS --}}
            <div class="text-center
                        p-8
                        border border-gray-100
                        hover:border-[#479F61]
                        hover:shadow-md
                        transition-all duration-200">

                <div class="mx-auto w-14 h-14
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold">

                    01

                </div>

                <h3 class="mt-6
                           text-lg font-bold
                           text-[#2F7D47]">

                    Encourage Savings

                </h3>

                <p class="mt-3
                          text-sm
                          text-gray-600
                          leading-relaxed">

                    We encourage members to develop a consistent savings
                    culture and build their financial security.

                </p>

            </div>


            {{-- CREDIT --}}
            <div class="text-center
                        p-8
                        border border-gray-100
                        hover:border-[#D5595F]
                        hover:shadow-md
                        transition-all duration-200">

                <div class="mx-auto w-14 h-14
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold">

                    02

                </div>

                <h3 class="mt-6
                           text-lg font-bold
                           text-[#2F7D47]">

                    Provide Credit

                </h3>

                <p class="mt-3
                          text-sm
                          text-gray-600
                          leading-relaxed">

                    We provide a range of loan products designed to support
                    different member financial needs.

                </p>

            </div>


            {{-- EMPOWERMENT --}}
            <div class="text-center
                        p-8
                        border border-gray-100
                        hover:border-[#F7D928]
                        hover:shadow-md
                        transition-all duration-200">

                <div class="mx-auto w-14 h-14
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold">

                    03

                </div>

                <h3 class="mt-6
                           text-lg font-bold
                           text-[#2F7D47]">

                    Empower Members

                </h3>

                <p class="mt-3
                          text-sm
                          text-gray-600
                          leading-relaxed">

                    We support members through financial services,
                    information and programmes that promote better
                    financial wellbeing.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP CTA
========================================================= --}}
<section class="bg-[#2F7D47]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-7">

            <div class="text-white">

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#F7D928]">

                    Membership

                </p>

                <h2 class="mt-2
                           text-2xl md:text-3xl
                           font-bold">

                    Interested in becoming a member?

                </h2>

                <p class="mt-2
                          text-[#EAF5ED]">

                    Find out if you qualify and learn how to join
                    Urban Roads SACCO.

                </p>

            </div>

            <a href="{{ route('membership') }}"
               class="shrink-0
                      inline-flex items-center justify-center gap-2
                      bg-white
                      text-[#2F7D47]
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#F7D928]
                      hover:text-[#252525]
                      transition-all duration-200">

                Membership Information
                <span>→</span>

            </a>

        </div>

    </div>

</section>

@endsection
