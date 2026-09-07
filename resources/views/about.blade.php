@extends('layouts.app')

@section('title', 'About Us | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            About Urban Roads SACCO
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            About Us
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Building a stronger financial future through savings,
            responsible lending and member-focused services.
        </p>

    </div>

</section>


{{-- WHO WE ARE --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div>

                <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                    Who We Are
                </p>

                <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">
                    Working Together for Financial Growth
                </h2>

                <div class="w-12 h-1 bg-[#D5595F] mt-5"></div>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Urban Roads SACCO is a member-focused Savings and Credit
                    Co-operative Society committed to providing quality
                    financial services to its members.
                </p>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Through a culture of saving, responsible borrowing and
                    financial empowerment, we strive to help our members
                    achieve their personal and financial goals.
                </p>

            </div>


            <div class="bg-[#EAF5ED] p-8 border-l-4 border-[#479F61]">

                <p class="text-sm font-semibold uppercase tracking-wide text-[#2F7D47]">
                    Our Commitment
                </p>

                <h3 class="mt-3 text-2xl font-bold text-[#3F4145]">
                    Member First
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    We believe that a strong SACCO is built around its members.
                    Our focus is therefore on providing accessible financial
                    solutions, dependable service and opportunities for members
                    to improve their financial wellbeing.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- VISION / MISSION --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 gap-8">

            <div class="bg-white p-8 border-t-4 border-[#479F61] shadow-sm">

                <p class="text-sm font-semibold uppercase tracking-wide text-[#479F61]">
                    Our Vision
                </p>

                <h2 class="mt-3 text-2xl font-bold text-[#3F4145]">
                    A Better Financial Future for Our Members
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    To be a trusted and progressive SACCO providing sustainable
                    financial opportunities and value to its members.
                </p>

            </div>


            <div class="bg-white p-8 border-t-4 border-[#D5595F] shadow-sm">

                <p class="text-sm font-semibold uppercase tracking-wide text-[#D5595F]">
                    Our Mission
                </p>

                <h2 class="mt-3 text-2xl font-bold text-[#3F4145]">
                    Empowering Members Through Financial Services
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    To provide quality savings, credit and related financial
                    services that promote the economic wellbeing of our members.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- VALUES --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                What Guides Us
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">
                Our Values
            </h2>

            <div class="w-12 h-1 bg-[#F7D928] mx-auto mt-4"></div>

        </div>


        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

            <div class="p-7 border border-gray-200 hover:border-[#479F61] hover:shadow-md transition">
                <div class="w-12 h-12 bg-[#EAF5ED] text-[#2F7D47] flex items-center justify-center font-bold">
                    I
                </div>
                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">
                    Integrity
                </h3>
                <p class="mt-3 text-sm text-gray-600">
                    We uphold honesty, transparency and accountability.
                </p>
            </div>

            <div class="p-7 border border-gray-200 hover:border-[#D5595F] hover:shadow-md transition">
                <div class="w-12 h-12 bg-[#FBECEE] text-[#B83F46] flex items-center justify-center font-bold">
                    M
                </div>
                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">
                    Member Focus
                </h3>
                <p class="mt-3 text-sm text-gray-600">
                    Our members remain at the centre of what we do.
                </p>
            </div>

            <div class="p-7 border border-gray-200 hover:border-[#F7D928] hover:shadow-md transition">
                <div class="w-12 h-12 bg-[#FFF9D9] text-[#A98C00] flex items-center justify-center font-bold">
                    R
                </div>
                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">
                    Responsibility
                </h3>
                <p class="mt-3 text-sm text-gray-600">
                    We promote responsible saving, borrowing and financial management.
                </p>
            </div>

            <div class="p-7 border border-gray-200 hover:border-[#479F61] hover:shadow-md transition">
                <div class="w-12 h-12 bg-[#EAF5ED] text-[#2F7D47] flex items-center justify-center font-bold">
                    E
                </div>
                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">
                    Excellence
                </h3>
                <p class="mt-3 text-sm text-gray-600">
                    We continuously strive to improve our services.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Join Us
        </p>

        <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white">
            Become Part of Urban Roads SACCO
        </h2>

        <p class="mt-4 text-green-50">
            Learn about eligibility and how you can become a member.
        </p>

        <a href="{{ route('membership') }}"
           class="inline-block mt-7 bg-white text-[#2F7D47]
                  px-7 py-3 font-semibold rounded-sm
                  hover:bg-[#F7D928] hover:text-[#252525] transition">
            Membership Information
        </a>

    </div>

</section>

@endsection
