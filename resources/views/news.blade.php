@extends('layouts.app')

@section('title', 'News & Announcements | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}

<section class="bg-[#2F7D47]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Stay Informed
        </p>

    <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
        News & Announcements
    </h1>

    <div class="w-14 h-1 bg-[#F7D928] mt-5"></div>

    <p class="mt-6 max-w-2xl text-lg text-[#EAF5ED] leading-relaxed">
        Stay up to date with important news, announcements, notices and
        updates from Urban Roads SACCO.
    </p>
</div>

</section>

{{-- NEWS SECTION --}}

<section class="py-16 bg-[#F7F8F7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- SECTION INTRO --}}
    <div class="max-w-2xl mb-10">
        <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
            Latest Updates
        </p>

        <h2 class="mt-2 text-3xl md:text-4xl font-bold text-[#2F7D47]">
            What's Happening
        </h2>

        <div class="w-12 h-1 bg-[#F7D928] mt-4"></div>

        <p class="mt-5 text-gray-600 leading-relaxed">
            Find the latest information and updates relevant to Urban
            Roads SACCO members.
        </p>
    </div>


    {{-- NEWS GRID --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

        {{-- NEWS ITEM 1 --}}
        <article class="bg-white border border-gray-200 hover:border-[#479F61] hover:shadow-lg transition duration-300 group">

            <div class="h-2 bg-[#479F61]"></div>

            <div class="p-7">

                <div class="flex items-center justify-between gap-4">

                    <span class="inline-flex items-center px-3 py-1 bg-[#EAF5ED] text-[#2F7D47] text-xs font-semibold uppercase tracking-wide">
                        Announcement
                    </span>

                    <span class="text-xs text-gray-500">
                        Latest
                    </span>

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#2F7D47] group-hover:text-[#479F61] transition">
                    SACCO News & Announcements
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Keep checking this section for important announcements,
                    notices and updates from Urban Roads SACCO.
                </p>

                <div class="mt-6 pt-5 border-t border-gray-100">

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-[#479F61] hover:text-[#2F7D47] transition">

                        Get More Information

                        <span aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </article>


        {{-- NEWS ITEM 2 --}}
        <article class="bg-white border border-gray-200 hover:border-[#2F7D47] hover:shadow-lg transition duration-300 group">

            <div class="h-2 bg-[#2F7D47]"></div>

            <div class="p-7">

                <div class="flex items-center justify-between gap-4">

                    <span class="inline-flex items-center px-3 py-1 bg-[#EAF5ED] text-[#2F7D47] text-xs font-semibold uppercase tracking-wide">
                        Member Notice
                    </span>

                    <span class="text-xs text-gray-500">
                        Members
                    </span>

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#2F7D47] group-hover:text-[#479F61] transition">
                    Member Information
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Important information affecting members will be shared
                    through the SACCO's official communication channels.
                </p>

                <div class="mt-6 pt-5 border-t border-gray-100">

                    <a href="{{ route('membership') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-[#479F61] hover:text-[#2F7D47] transition">

                        Membership Information

                        <span aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </article>


        {{-- NEWS ITEM 3 --}}
        <article class="bg-white border border-gray-200 hover:border-[#F7D928] hover:shadow-lg transition duration-300 group">

            <div class="h-2 bg-[#F7D928]"></div>

            <div class="p-7">

                <div class="flex items-center justify-between gap-4">

                    <span class="inline-flex items-center px-3 py-1 bg-[#F7F8F7] text-[#D8B900] text-xs font-semibold uppercase tracking-wide">
                        Updates
                    </span>

                    <span class="text-xs text-gray-500">
                        SACCO
                    </span>

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#2F7D47] group-hover:text-[#479F61] transition">
                    Services & Loan Updates
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Stay informed about available SACCO services and loan
                    products designed to support members' financial needs.
                </p>

                <div class="mt-6 pt-5 border-t border-gray-100">

                    <a href="{{ route('loans') }}"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-[#479F61] hover:text-[#2F7D47] transition">

                        View Loan Products

                        <span aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </article>

    </div>

</div>

</section>

{{-- INFORMATION CTA --}}

<section class="bg-[#2F7D47] border-b-2 border-white">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-7">

        <div>

            <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
                Need Assistance?
            </p>

            <h2 class="mt-2 text-2xl md:text-3xl font-bold text-white">
                Have a question about an announcement?
            </h2>

            <p class="mt-3 text-[#EAF5ED]">
                Contact Urban Roads SACCO for more information.
            </p>

        </div>


        <a href="{{ route('contact') }}"
           class="inline-flex items-center justify-center bg-white text-[#2F7D47] px-7 py-3 font-semibold rounded-sm hover:bg-[#F7D928] hover:text-[#2F7D47] transition duration-200">

            Contact Us

        </a>

    </div>

</div>
</section>

@endsection
