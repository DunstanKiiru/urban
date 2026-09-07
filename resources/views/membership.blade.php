@extends('layouts.app')

@section('title', 'Membership | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Join Our SACCO
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Membership
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Become part of a cooperative community focused on saving,
            responsible borrowing and financial growth.
        </p>

    </div>

</section>


{{-- ELIGIBILITY --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12">

            <div>

                <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                    Who Can Join?
                </p>

                <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">
                    Membership Eligibility
                </h2>

                <div class="w-12 h-1 bg-[#D5595F] mt-5"></div>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Membership is open to eligible staff working within
                    the roads sector and qualifying project staff.
                </p>

            </div>


            <div class="bg-[#EAF5ED] p-8">

                <ul class="space-y-4">

                    <li class="flex gap-3">
                        <span class="text-[#479F61] font-bold">✓</span>
                        <span class="text-gray-700">
                            Staff of Kenya Urban Roads Authority
                        </span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-[#479F61] font-bold">✓</span>
                        <span class="text-gray-700">
                            Staff of Kenya National Highways Authority
                        </span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-[#479F61] font-bold">✓</span>
                        <span class="text-gray-700">
                            Staff of Kenya Rural Roads Authority
                        </span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-[#479F61] font-bold">✓</span>
                        <span class="text-gray-700">
                            Staff of Kenya Roads Board
                        </span>
                    </li>

                    <li class="flex gap-3">
                        <span class="text-[#479F61] font-bold">✓</span>
                        <span class="text-gray-700">
                            Project Staff
                        </span>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>


{{-- BENEFITS --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                Member Benefits
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">
                Why Become a Member?
            </h2>

            <div class="w-12 h-1 bg-[#F7D928] mx-auto mt-4"></div>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

            <div class="bg-white p-7 border-t-4 border-[#479F61]">
                <h3 class="text-xl font-bold text-[#3F4145]">
                    Savings
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Develop a consistent saving culture and build financial security.
                </p>
            </div>

            <div class="bg-white p-7 border-t-4 border-[#D5595F]">
                <h3 class="text-xl font-bold text-[#3F4145]">
                    Affordable Loans
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Access credit facilities designed around different member needs.
                </p>
            </div>

            <div class="bg-white p-7 border-t-4 border-[#F7D928]">
                <h3 class="text-xl font-bold text-[#3F4145]">
                    Financial Support
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Receive information and support to help improve your financial wellbeing.
                </p>
            </div>

            <div class="bg-white p-7 border-t-4 border-[#479F61]">
                <h3 class="text-xl font-bold text-[#3F4145]">
                    Member Focus
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Be part of a cooperative built around the interests of its members.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- HOW TO JOIN --}}
<section class="py-16 bg-white">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                Getting Started
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">
                How to Become a Member
            </h2>

            <div class="w-12 h-1 bg-[#D5595F] mx-auto mt-4"></div>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">

            <div class="text-center p-7 border border-gray-200">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#479F61] text-white
                            flex items-center justify-center
                            font-bold">
                    1
                </div>

                <h3 class="mt-5 font-bold text-[#3F4145]">
                    Confirm Eligibility
                </h3>

                <p class="mt-3 text-sm text-gray-600">
                    Confirm that you meet the SACCO membership requirements.
                </p>

            </div>


            <div class="text-center p-7 border border-gray-200">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#D5595F] text-white
                            flex items-center justify-center
                            font-bold">
                    2
                </div>

                <h3 class="mt-5 font-bold text-[#3F4145]">
                    Contact SACCO
                </h3>

                <p class="mt-3 text-sm text-gray-600">
                    Contact our team for membership information and assistance.
                </p>

            </div>


            <div class="text-center p-7 border border-gray-200">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#F7D928] text-[#3F4145]
                            flex items-center justify-center
                            font-bold">
                    3
                </div>

                <h3 class="mt-5 font-bold text-[#3F4145]">
                    Complete Registration
                </h3>

                <p class="mt-3 text-sm text-gray-600">
                    Complete the required membership registration process.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">

        <h2 class="text-3xl font-bold text-white">
            Ready to Join?
        </h2>

        <p class="mt-3 text-green-50">
            Get in touch with Urban Roads SACCO for membership assistance.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block mt-6 bg-white text-[#2F7D47]
                  px-7 py-3 font-semibold rounded-sm
                  hover:bg-[#F7D928] hover:text-[#252525] transition">
            Contact Us
        </a>

    </div>

</section>

@endsection
