@extends('layouts.app')

@section('title', 'News & Announcements | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Stay Informed
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            News & Announcements
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Keep up with the latest activities, events and important
            member information from Urban Roads SACCO.
        </p>

    </div>

</section>


{{-- NEWS --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">


            {{-- NEWS 1 --}}
            <article class="bg-white border border-gray-200
                            hover:border-[#479F61]
                            hover:shadow-md transition">

                <div class="h-2 bg-[#479F61]"></div>

                <div class="p-7">

                    <p class="text-xs font-semibold uppercase text-[#479F61]">
                        Announcement
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        11 December 2025
                    </p>

                    <h2 class="mt-4 text-xl font-bold text-[#3F4145]">
                        Members Training Seminar
                    </h2>

                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Members Training Seminar held virtually from
                        9:30 AM to 12:30 PM.
                    </p>

                </div>

            </article>


            {{-- NEWS 2 --}}
            <article class="bg-white border border-gray-200
                            hover:border-[#D5595F]
                            hover:shadow-md transition">

                <div class="h-2 bg-[#D5595F]"></div>

                <div class="p-7">

                    <p class="text-xs font-semibold uppercase text-[#D5595F]">
                        Members
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        Member Notice
                    </p>

                    <h2 class="mt-4 text-xl font-bold text-[#3F4145]">
                        Important Member Information
                    </h2>

                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Stay informed about important notices,
                        communications and updates from the SACCO.
                    </p>

                </div>

            </article>


            {{-- NEWS 3 --}}
            <article class="bg-white border border-gray-200
                            hover:border-[#F7D928]
                            hover:shadow-md transition">

                <div class="h-2 bg-[#F7D928]"></div>

                <div class="p-7">

                    <p class="text-xs font-semibold uppercase text-[#A98C00]">
                        SACCO News
                    </p>

                    <p class="mt-2 text-sm text-gray-500">
                        Latest Activities
                    </p>

                    <h2 class="mt-4 text-xl font-bold text-[#3F4145]">
                        What's Happening at the SACCO?
                    </h2>

                    <p class="mt-4 text-gray-600 leading-relaxed">
                        Follow our latest activities, programmes,
                        events and developments.
                    </p>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">

        <h2 class="text-3xl font-bold text-white">
            Need More Information?
        </h2>

        <p class="mt-3 text-green-50">
            Contact our team for clarification or additional information.
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
