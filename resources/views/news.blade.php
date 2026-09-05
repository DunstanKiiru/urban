@extends('layouts.app')

@section('title', 'News & Announcements | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#003f7d]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#f4b400]">
            Stay Informed
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            News & Announcements
        </h1>

        <p class="mt-5 max-w-2xl text-blue-100 leading-relaxed">
            Keep up with the latest news, announcements, events and
            activities from Urban Roads SACCO.
        </p>

    </div>
</section>


{{-- NEWS LIST --}}
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            {{-- NEWS ITEM 1 --}}
            <article class="bg-white border border-gray-200
                            hover:shadow-lg transition">

                <div class="h-2 bg-[#0056a6]"></div>

                <div class="p-7">

                    <div class="flex items-center justify-between gap-3">

                        <span class="text-xs font-semibold uppercase
                                     tracking-wide text-[#168a45]">
                            Announcement
                        </span>

                        <span class="text-xs text-gray-500">
                            11 Dec 2025
                        </span>

                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#003f7d]">
                        Members Training Seminar
                    </h2>

                    <p class="mt-4 text-sm text-gray-600 leading-relaxed">
                        Members Training Seminar scheduled for 11th December
                        2025. Members are encouraged to participate and stay
                        informed.
                    </p>

                    <span class="inline-block mt-5 text-sm font-semibold
                                 text-[#0056a6]">
                        Read More →
                    </span>

                </div>

            </article>


            {{-- NEWS ITEM 2 --}}
            <article class="bg-white border border-gray-200
                            hover:shadow-lg transition">

                <div class="h-2 bg-[#168a45]"></div>

                <div class="p-7">

                    <div class="flex items-center justify-between gap-3">

                        <span class="text-xs font-semibold uppercase
                                     tracking-wide text-[#168a45]">
                            Members
                        </span>

                        <span class="text-xs text-gray-500">
                            Notice
                        </span>

                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#003f7d]">
                        Important Member Information
                    </h2>

                    <p class="mt-4 text-sm text-gray-600 leading-relaxed">
                        Members are encouraged to keep up to date with SACCO
                        communications, notices and important information.
                    </p>

                    <span class="inline-block mt-5 text-sm font-semibold
                                 text-[#0056a6]">
                        Read More →
                    </span>

                </div>

            </article>


            {{-- NEWS ITEM 3 --}}
            <article class="bg-white border border-gray-200
                            hover:shadow-lg transition">

                <div class="h-2 bg-[#f4b400]"></div>

                <div class="p-7">

                    <div class="flex items-center justify-between gap-3">

                        <span class="text-xs font-semibold uppercase
                                     tracking-wide text-[#168a45]">
                            SACCO News
                        </span>

                        <span class="text-xs text-gray-500">
                            Updates
                        </span>

                    </div>

                    <h2 class="mt-4 text-xl font-bold text-[#003f7d]">
                        Latest SACCO Activities
                    </h2>

                    <p class="mt-4 text-sm text-gray-600 leading-relaxed">
                        Find updates about activities, programmes and
                        developments taking place at Urban Roads SACCO.
                    </p>

                    <span class="inline-block mt-5 text-sm font-semibold
                                 text-[#0056a6]">
                        Read More →
                    </span>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- SUBSCRIBE / INFORMATION CTA --}}
<section class="py-16 bg-white">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#168a45]">
            Stay Connected
        </p>

        <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
            Don't Miss Important Updates
        </h2>

        <div class="w-12 h-1 bg-[#f4b400] mx-auto mt-4"></div>

        <p class="mt-5 text-gray-600 leading-relaxed">
            Check this page regularly for announcements, member notices,
            training programmes, events and other SACCO updates.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block mt-7 bg-[#0056a6] text-white
                  px-7 py-3 font-semibold rounded-sm
                  hover:bg-[#003f7d] transition">
            Contact the SACCO
        </a>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#003f7d]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="flex flex-col md:flex-row md:items-center
                    md:justify-between gap-6">

            <div class="text-white">

                <h2 class="text-2xl md:text-3xl font-bold">
                    Looking for SACCO documents?
                </h2>

                <p class="mt-2 text-blue-100">
                    Access forms, reports, notices and other useful
                    documents.
                </p>

            </div>

            <a href="#"
               class="inline-block bg-white text-[#003f7d]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">
                View Documents
            </a>

        </div>

    </div>

</section>

@endsection
