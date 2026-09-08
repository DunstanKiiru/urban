@extends('layouts.app')

@section('title', 'Documents | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#479F61]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="max-w-3xl">

            <p class="text-[#F7D928] font-semibold uppercase tracking-wider text-sm">
                Member Resources
            </p>

            <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
                Documents
            </h1>

            <p class="mt-5 text-lg text-white/90 leading-relaxed">
                Access important Urban Roads SACCO forms, notices,
                reports and other member resources.
            </p>

        </div>

    </div>

</section>


{{-- DOCUMENTS --}}
<section class="bg-white py-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- INTRODUCTION --}}
        <div class="max-w-3xl mb-12">

            <p class="text-[#479F61] font-semibold uppercase tracking-wide text-sm">
                Resources
            </p>

            <h2 class="mt-2 text-3xl font-bold text-[#252525]">
                Important SACCO Documents
            </h2>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Find forms and information you may need when accessing
                Urban Roads SACCO services. Select the relevant document
                below to download it.
            </p>

        </div>


        {{-- DOCUMENT GRID --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">


            {{-- MEMBERSHIP FORMS --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Membership Forms
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Forms relating to joining, maintaining and
                    withdrawing SACCO membership.
                </p>


                <div class="mt-6 space-y-3">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Membership%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Membership Form
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Membership%20withdrawal%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Membership Withdrawal Form
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Nominee%20Form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Nominee Form
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>

                </div>

            </div>



            {{-- LOAN FORMS --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#FBECEE]
                            text-[#B83F46]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 8c-2.21 0-4 1.343-4 3s1.79 3 4 3 4 1.343 4 3-1.79 3-4 3m0-14V4m0 16v-2M5 12H3m18 0h-2"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Loan Application Forms
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Application forms and documents for members
                    applying for SACCO loans.
                </p>


                <div class="mt-6 space-y-3">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Loan%20Form%20ammended.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Loan Form Ammended
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Loan%20Form%20ammended_1.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Loan Form Ammended 1
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    <a href="https://urbanroadssacco.co.ke/resaccoforms/NEW%20LOAN%20APPLICATION%20FORM%202025.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            New Loan Application Form 2025
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>

                </div>

            </div>



            {{-- SAVINGS & SHARES --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#FFFBEA]
                            text-[#D8B900]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V4m0 16v-2m9-6a9 9 0 11-18 0 9 9 0 0118 0z"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Savings & Shares
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Forms relating to member savings, shares and
                    related SACCO transactions.
                </p>


                <div class="mt-6 space-y-3">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Share%20variation.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Share Variation
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    {{-- NO URL WAS PROVIDED --}}
                    <div class="flex items-center justify-between
                                gap-3
                                text-sm">

                        <span class="text-gray-600">
                            Transfer of Savings
                        </span>

                        <span class="text-xs
                                     font-semibold
                                     text-gray-400
                                     shrink-0">
                            Not Available
                        </span>

                    </div>

                </div>

            </div>



            {{-- BENEVOLENT FUND --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#FBECEE]
                            text-[#B83F46]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Benevolent Fund
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Document relating to membership and participation
                    in the SACCO Benevolent Fund.
                </p>


                <div class="mt-6 space-y-3">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Benevolent%20Fund%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Benevolent Fund Form
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>

                </div>

            </div>



            {{-- MEMBER ADMINISTRATION --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Member Administration
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Forms supporting member administration and
                    SACCO-related employment processes.
                </p>


                <div class="mt-6 space-y-3">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Authority%20to%20make%20deductions.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              border-b border-gray-100
                              pb-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Authority to Make Deductions
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>


                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Leave%20form%20sacco.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="flex items-center justify-between
                              gap-3
                              text-sm
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        <span>
                            Leave Form SACCO
                        </span>

                        <span class="font-semibold shrink-0">
                            Download →
                        </span>

                    </a>

                </div>

            </div>



            {{-- OTHER MEMBER DOCUMENTS --}}
            <div class="border border-gray-200
                        bg-white
                        p-7
                        hover:shadow-lg
                        transition">

                <div class="w-12 h-12
                            bg-[#FFFBEA]
                            text-[#D8B900]
                            flex items-center justify-center
                            mb-5">

                    <svg class="w-6 h-6"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Other Member Documents
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Additional documents and forms available to
                    Urban Roads SACCO members.
                </p>


                <div class="mt-6">

                    <p class="text-sm text-gray-500">
                        More member documents will be added here
                        as they become available.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-6">

            <div>

                <p class="text-[#F7D928]
                          font-semibold
                          uppercase
                          tracking-wide
                          text-sm">
                    Need Assistance?
                </p>

                <h2 class="mt-2 text-2xl
                           md:text-3xl
                           font-bold
                           text-white">
                    Can't find the document you need?
                </h2>

                <p class="mt-3 text-gray-300">
                    Get in touch with the SACCO team for assistance.
                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center
                      justify-center
                      bg-[#479F61]
                      text-white
                      px-7 py-3
                      font-semibold
                      hover:bg-[#2F7D47]
                      transition">

                Contact Us

                <span class="ml-2">→</span>

            </a>

        </div>

    </div>

</section>

@endsection
