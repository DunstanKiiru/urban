@extends('layouts.app')

@section('title', 'Membership | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#003f7d]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#f4b400]">
            Join Us
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            SACCO Membership
        </h1>

        <p class="mt-5 max-w-2xl text-blue-100 leading-relaxed">
            Become a member of Urban Roads SACCO and take advantage of
            savings, credit and other member-focused financial services.
        </p>

    </div>
</section>


{{-- ELIGIBILITY --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <div>

                <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
                    Who Can Join?
                </p>

                <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                    Membership Eligibility
                </h2>

                <div class="w-12 h-1 bg-[#f4b400] mt-4"></div>

                <p class="mt-6 text-gray-600 leading-relaxed">
                    Membership is open to staff and eligible project staff
                    working within the road sector institutions served by
                    Urban Roads SACCO.
                </p>

            </div>


            <div class="bg-[#f5f7fa] border border-gray-200 p-7">

                <h3 class="text-xl font-bold text-[#003f7d]">
                    Eligible Members
                </h3>

                <ul class="mt-6 space-y-4">

                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-6 h-6 flex-shrink-0
                                     bg-green-50 text-[#168a45]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700">
                            Staff of Kenya Urban Roads Authority (KURA)
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-6 h-6 flex-shrink-0
                                     bg-green-50 text-[#168a45]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700">
                            Staff of Kenya National Highways Authority (KeNHA)
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-6 h-6 flex-shrink-0
                                     bg-green-50 text-[#168a45]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700">
                            Staff of Kenya Rural Roads Authority (KeRRA)
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-6 h-6 flex-shrink-0
                                     bg-green-50 text-[#168a45]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

                        <span class="text-gray-700">
                            Staff of Kenya Roads Board (KRB)
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span class="mt-1 w-6 h-6 flex-shrink-0
                                     bg-green-50 text-[#168a45]
                                     flex items-center justify-center
                                     font-bold text-sm">
                            ✓
                        </span>

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
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
                Member Benefits
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                Why Become a Member?
            </h2>

            <div class="w-12 h-1 bg-[#f4b400] mx-auto mt-4"></div>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

            <div class="bg-white border border-gray-200 p-6">
                <div class="w-12 h-12 bg-[#eaf3fb] text-[#0056a6]
                            flex items-center justify-center font-bold">
                    S
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Savings
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Build a culture of saving and strengthen your financial
                    security.
                </p>
            </div>


            <div class="bg-white border border-gray-200 p-6">
                <div class="w-12 h-12 bg-green-50 text-[#168a45]
                            flex items-center justify-center font-bold">
                    L
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Affordable Loans
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Access credit facilities designed to meet different
                    member financial needs.
                </p>
            </div>


            <div class="bg-white border border-gray-200 p-6">
                <div class="w-12 h-12 bg-yellow-50 text-[#c58d00]
                            flex items-center justify-center font-bold">
                    F
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Financial Support
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Get financial solutions that can support personal,
                    educational and development goals.
                </p>
            </div>


            <div class="bg-white border border-gray-200 p-6">
                <div class="w-12 h-12 bg-[#eaf3fb] text-[#0056a6]
                            flex items-center justify-center font-bold">
                    M
                </div>

                <h3 class="mt-5 text-lg font-bold text-[#003f7d]">
                    Member Focus
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Enjoy services structured around the needs and interests
                    of SACCO members.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- HOW TO JOIN --}}
<section class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
                Get Started
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                How to Become a Member
            </h2>

            <div class="w-12 h-1 bg-[#f4b400] mx-auto mt-4"></div>

        </div>


        <div class="grid md:grid-cols-3 gap-8 mt-12">

            <div class="text-center">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#0056a6] text-white
                            flex items-center justify-center
                            font-bold text-lg">
                    1
                </div>

                <h3 class="mt-5 font-bold text-xl text-[#003f7d]">
                    Confirm Eligibility
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Confirm that you fall within the SACCO's eligible
                    membership categories.
                </p>

            </div>


            <div class="text-center">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#168a45] text-white
                            flex items-center justify-center
                            font-bold text-lg">
                    2
                </div>

                <h3 class="mt-5 font-bold text-xl text-[#003f7d]">
                    Contact the SACCO
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Contact our office for membership requirements,
                    application forms and further guidance.
                </p>

            </div>


            <div class="text-center">

                <div class="mx-auto w-12 h-12 rounded-full
                            bg-[#f4b400] text-[#003f7d]
                            flex items-center justify-center
                            font-bold text-lg">
                    3
                </div>

                <h3 class="mt-5 font-bold text-xl text-[#003f7d]">
                    Complete Registration
                </h3>

                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Submit the required information and complete the
                    membership registration process.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#003f7d]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#f4b400]">
                Ready to Join?
            </p>

            <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white">
                Start Your Membership Journey
            </h2>

            <p class="mt-4 text-blue-100 max-w-2xl mx-auto">
                Contact Urban Roads SACCO today to learn more about
                membership and the registration process.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-block mt-7 bg-white text-[#003f7d]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection
