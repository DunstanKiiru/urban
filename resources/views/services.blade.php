@extends('layouts.app')

@section('title', 'Our Services | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            What We Offer
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Our Services
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Financial services designed to help our members save,
            access credit and achieve their financial goals.
        </p>

    </div>

</section>


{{-- SERVICES --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">


            {{-- SAVINGS --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#479F61] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#EAF5ED] text-[#2F7D47]
                            flex items-center justify-center font-bold text-xl">
                    S
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Savings
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Build a strong financial foundation through consistent
                    saving and member-focused savings opportunities.
                </p>

            </div>


            {{-- LOANS --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#D5595F] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#FBECEE] text-[#B83F46]
                            flex items-center justify-center font-bold text-xl">
                    L
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Loans & Credit
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Access a range of credit facilities designed around
                    different member financial needs.
                </p>

                <a href="{{ route('loans') }}"
                   class="inline-block mt-5 text-[#B83F46] font-semibold hover:underline">
                    View Loan Products →
                </a>

            </div>


            {{-- MEMBERSHIP --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#F7D928] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#FFF9D9] text-[#A98C00]
                            flex items-center justify-center font-bold text-xl">
                    M
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Membership
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Join a cooperative community focused on financial
                    growth, savings and mutual support.
                </p>

                <a href="{{ route('membership') }}"
                   class="inline-block mt-5 text-[#A98C00] font-semibold hover:underline">
                    Membership Information →
                </a>

            </div>


            {{-- FINANCIAL EDUCATION --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#479F61] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#EAF5ED] text-[#2F7D47]
                            flex items-center justify-center font-bold text-xl">
                    F
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Financial Education
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Access information and guidance that can help members
                    make informed financial decisions.
                </p>

            </div>


            {{-- MEMBER SUPPORT --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#D5595F] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#FBECEE] text-[#B83F46]
                            flex items-center justify-center font-bold text-xl">
                    M
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Member Support
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Get assistance and information regarding SACCO services,
                    membership and member needs.
                </p>

                <a href="{{ route('contact') }}"
                   class="inline-block mt-5 text-[#B83F46] font-semibold hover:underline">
                    Contact Us →
                </a>

            </div>


            {{-- MEMBER INFORMATION --}}
            <div class="bg-white border border-gray-200 p-8
                        hover:border-[#F7D928] hover:shadow-md transition">

                <div class="w-14 h-14 bg-[#FFF9D9] text-[#A98C00]
                            flex items-center justify-center font-bold text-xl">
                    I
                </div>

                <h2 class="mt-6 text-xl font-bold text-[#3F4145]">
                    Member Information
                </h2>

                <p class="mt-3 text-gray-600 leading-relaxed">
                    Stay informed about SACCO activities, announcements,
                    programmes and important member notices.
                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5 text-[#A98C00] font-semibold hover:underline">
                    Latest Updates →
                </a>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">

        <h2 class="text-3xl font-bold text-white">
            Need Assistance?
        </h2>

        <p class="mt-3 text-green-50">
            Our team is ready to help you with your SACCO needs.
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
