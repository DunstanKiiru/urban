@extends('layouts.app')

@section('title', 'About Us | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#003f7d]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#f4b400]">
            About Urban Roads SACCO
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            About Us
        </h1>

        <p class="mt-5 max-w-2xl text-blue-100 leading-relaxed">
            Empowering members through savings, affordable credit and
            quality financial services.
        </p>

    </div>
</section>


{{-- WHO WE ARE --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div>

                <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
                    Who We Are
                </p>

                <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                    A SACCO Built Around Its Members
                </h2>

                <div class="w-12 h-1 bg-[#f4b400] mt-4"></div>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Urban Roads SACCO is a member-focused Savings and Credit
                    Cooperative Society committed to providing quality
                    savings, credit and financial services to its members.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    We seek to create opportunities that enable our members
                    to save, access affordable credit and improve their
                    financial wellbeing.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Through responsible financial services and member
                    engagement, the SACCO continues to support members in
                    achieving their personal and financial aspirations.
                </p>

            </div>


            <div class="bg-[#f5f7fa] p-8 border-l-4 border-[#0056a6]">

                <div class="w-14 h-1 bg-[#f4b400] mb-6"></div>

                <h3 class="text-2xl font-bold text-[#003f7d]">
                    Our Commitment
                </h3>

                <p class="mt-5 text-gray-600 leading-relaxed">
                    We are committed to putting our members at the centre
                    of what we do by providing reliable, accessible and
                    sustainable financial solutions.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- MISSION VISION VALUES --}}
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-3 gap-7">

            {{-- VISION --}}
            <div class="bg-white border border-gray-200 p-7">

                <div class="w-12 h-12 bg-[#eaf3fb] text-[#0056a6]
                            flex items-center justify-center font-bold">
                    V
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Our Vision
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    To be a trusted and leading member-focused SACCO,
                    creating lasting financial opportunities for our
                    members.
                </p>

            </div>


            {{-- MISSION --}}
            <div class="bg-white border border-gray-200 p-7">

                <div class="w-12 h-12 bg-green-50 text-[#168a45]
                            flex items-center justify-center font-bold">
                    M
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Our Mission
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    To provide quality savings, credit and financial
                    services that empower our members to achieve their
                    financial goals.
                </p>

            </div>


            {{-- VALUES --}}
            <div class="bg-white border border-gray-200 p-7">

                <div class="w-12 h-12 bg-yellow-50 text-[#c58d00]
                            flex items-center justify-center font-bold">
                    V
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Our Values
                </h3>

                <ul class="mt-4 space-y-2 text-gray-600">

                    <li>✓ Integrity</li>
                    <li>✓ Transparency</li>
                    <li>✓ Accountability</li>
                    <li>✓ Member Focus</li>
                    <li>✓ Professionalism</li>

                </ul>

            </div>

        </div>

    </div>

</section>


{{-- WHAT WE DO --}}
<section class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
                What We Do
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                Supporting Our Members
            </h2>

            <div class="w-12 h-1 bg-[#f4b400] mx-auto mt-4"></div>

            <p class="mt-5 max-w-2xl mx-auto text-gray-600 leading-relaxed">
                Our services are designed to help members build financial
                stability and access opportunities when they need them.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">

            <div class="text-center p-6">

                <div class="mx-auto w-14 h-14 bg-[#eaf3fb]
                            text-[#0056a6] flex items-center justify-center
                            font-bold">
                    01
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Encourage Savings
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    We encourage members to develop a consistent savings
                    culture and build their financial security.
                </p>

            </div>


            <div class="text-center p-6">

                <div class="mx-auto w-14 h-14 bg-green-50
                            text-[#168a45] flex items-center justify-center
                            font-bold">
                    02
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Provide Credit
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    We provide a range of loan products designed to support
                    different member financial needs.
                </p>

            </div>


            <div class="text-center p-6">

                <div class="mx-auto w-14 h-14 bg-yellow-50
                            text-[#c58d00] flex items-center justify-center
                            font-bold">
                    03
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Empower Members
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    We support members through financial services,
                    information and programmes that promote better
                    financial wellbeing.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- MEMBERSHIP CTA --}}
<section class="bg-[#0056a6]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="flex flex-col md:flex-row md:items-center
                    md:justify-between gap-6">

            <div class="text-white">

                <h2 class="text-2xl md:text-3xl font-bold">
                    Interested in becoming a member?
                </h2>

                <p class="mt-2 text-blue-100">
                    Find out if you qualify and learn how to join Urban
                    Roads SACCO.
                </p>

            </div>

            <a href="{{ route('membership') }}"
               class="inline-block bg-white text-[#0056a6]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">
                Membership Information
            </a>

        </div>

    </div>

</section>

@endsection
