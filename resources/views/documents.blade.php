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
                Urban Roads SACCO services. More documents will be added
                as they become available.
            </p>

        </div>


        {{-- DOCUMENT GRID --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">


            {{-- MEMBERSHIP --}}
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
                    Membership Forms
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Forms and information required when joining
                    Urban Roads SACCO.
                </p>

                <div class="mt-6">

                    <span class="inline-flex items-center
                                 px-4 py-2
                                 bg-[#EAF5ED]
                                 text-[#2F7D47]
                                 text-sm font-semibold">
                        Available Soon
                    </span>

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
                    Application forms and supporting documents for
                    the various SACCO loan products.
                </p>

                <div class="mt-6">

                    <a href="{{ route('loans') }}"
                       class="inline-flex items-center
                              text-[#479F61]
                              font-semibold
                              text-sm
                              hover:text-[#2F7D47]">

                        View Loan Products

                        <span class="ml-2">→</span>

                    </a>

                </div>

            </div>


            {{-- BY-LAWS --}}
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
                    SACCO By-Laws
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Access the rules and regulations governing the
                    operations and membership of the SACCO.
                </p>

                <div class="mt-6">

                    <span class="inline-flex items-center
                                 px-4 py-2
                                 bg-[#FFFBEA]
                                 text-[#D8B900]
                                 text-sm font-semibold">
                        Available Soon
                    </span>

                </div>

            </div>


            {{-- ANNUAL REPORTS --}}
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
                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Annual Reports
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Annual reports and key information about the
                    SACCO's performance and activities.
                </p>

                <div class="mt-6">

                    <span class="inline-flex items-center
                                 px-4 py-2
                                 bg-[#EAF5ED]
                                 text-[#2F7D47]
                                 text-sm font-semibold">
                        Available Soon
                    </span>

                </div>

            </div>


            {{-- NOTICES --}}
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
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-[#252525]">
                    Member Notices
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Important notices, announcements and
                    communications intended for SACCO members.
                </p>

                <div class="mt-6">

                    <a href="{{ route('news') }}"
                       class="inline-flex items-center
                              text-[#479F61]
                              font-semibold
                              text-sm
                              hover:text-[#2F7D47]">

                        View News & Notices

                        <span class="ml-2">→</span>

                    </a>

                </div>

            </div>


            {{-- FINANCIAL INFORMATION --}}
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
                    Financial Information
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                    Financial reports and other relevant financial
                    information will be made available to members.
                </p>

                <div class="mt-6">

                    <span class="inline-flex items-center
                                 px-4 py-2
                                 bg-[#FFFBEA]
                                 text-[#D8B900]
                                 text-sm font-semibold">
                        Available Soon
                    </span>

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
