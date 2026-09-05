@extends('layouts.app')

@section('title', 'Urban Roads SACCO | Home')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="bg-[#0056a6]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12
                    items-center py-20 lg:py-24">

            {{-- HERO CONTENT --}}
            <div class="text-white">

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-blue-100">
                    Welcome to Urban Roads SACCO
                </p>

                <h1 class="mt-4 text-4xl md:text-5xl
                           font-bold leading-tight">

                    Empowering Members.

                    <span class="text-[#f4b400]">
                        Building Futures.
                    </span>

                </h1>

                <p class="mt-6 text-lg text-blue-100
                          leading-relaxed max-w-xl">

                    A member-focused Savings and Credit Cooperative Society
                    committed to providing quality savings, credit and
                    financial services.

                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    <a href="{{ route('membership') }}"
                       class="bg-white text-[#0056a6]
                              px-6 py-3 font-semibold rounded-sm
                              hover:bg-gray-100 transition">

                        Become a Member

                    </a>

                    <a href="{{ route('about') }}"
                       class="border border-white text-white
                              px-6 py-3 font-semibold rounded-sm
                              hover:bg-white
                              hover:text-[#0056a6]
                              transition">

                        Learn More

                    </a>

                </div>

            </div>


            {{-- HERO INFORMATION CARD --}}
            <div class="hidden lg:flex justify-end">

                <div class="bg-white p-8 w-full max-w-md shadow-xl">

                    <div class="w-14 h-1 bg-[#f4b400] mb-6"></div>

                    <h2 class="text-2xl font-bold text-[#003f7d]">

                        Your SACCO.
                        <br>
                        Your Financial Partner.

                    </h2>

                    <p class="text-gray-600 mt-4 leading-relaxed">

                        We provide members with opportunities to save,
                        access affordable credit and improve their
                        financial wellbeing.

                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-block mt-6
                              text-[#0056a6] font-semibold
                              hover:underline">

                        Explore Our Services →

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT SECTION
========================================================= --}}
<section class="py-16 bg-white">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#168a45]">
                About Us
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">

                Working Together for a Better
                Financial Future

            </h2>

            <div class="w-12 h-1 bg-[#f4b400]
                        mx-auto mt-5">
            </div>

            <p class="mt-6 text-gray-600 leading-relaxed">

                Urban Roads SACCO provides savings, credit and other
                financial services designed to support the needs and
                aspirations of its members.

            </p>

            <a href="{{ route('about') }}"
               class="inline-block mt-6
                      text-[#0056a6] font-semibold
                      hover:underline">

                Read More About Us →

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES SECTION
========================================================= --}}
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#168a45]">
                What We Offer
            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#003f7d]">
                Our Services
            </h2>

            <div class="w-12 h-1 bg-[#f4b400]
                        mx-auto mt-4">
            </div>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">

            {{-- SAVINGS --}}
            <a href="{{ route('services') }}"
               class="bg-white border border-gray-200
                      p-7 hover:border-[#0056a6]
                      hover:shadow-md transition group">

                <div class="w-12 h-12 bg-[#eaf3fb]
                            text-[#0056a6]
                            flex items-center justify-center
                            font-bold">
                    S
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Savings
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Save consistently and build a stronger financial
                    foundation for your future.

                </p>

                <span class="inline-block mt-5 text-sm
                             font-semibold text-[#0056a6]
                             group-hover:underline">

                    Learn More →

                </span>

            </a>


            {{-- LOANS --}}
            <a href="{{ route('loans') }}"
               class="bg-white border border-gray-200
                      p-7 hover:border-[#168a45]
                      hover:shadow-md transition group">

                <div class="w-12 h-12 bg-green-50
                            text-[#168a45]
                            flex items-center justify-center
                            font-bold">
                    L
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Loans & Credit
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Access flexible financing solutions designed
                    to meet different member needs.

                </p>

                <span class="inline-block mt-5 text-sm
                             font-semibold text-[#168a45]
                             group-hover:underline">

                    View Loan Products →

                </span>

            </a>


            {{-- MEMBERSHIP --}}
            <a href="{{ route('membership') }}"
               class="bg-white border border-gray-200
                      p-7 hover:border-[#f4b400]
                      hover:shadow-md transition group">

                <div class="w-12 h-12 bg-yellow-50
                            text-[#c58d00]
                            flex items-center justify-center
                            font-bold">
                    M
                </div>

                <h3 class="mt-5 text-xl font-bold text-[#003f7d]">
                    Membership
                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Join Urban Roads SACCO and become part of our
                    growing member community.

                </p>

                <span class="inline-block mt-5 text-sm
                             font-semibold text-[#c58d00]
                             group-hover:underline">

                    Become a Member →

                </span>

            </a>

        </div>


        <div class="text-center mt-10">

            <a href="{{ route('services') }}"
               class="inline-block text-[#0056a6]
                      font-semibold hover:underline">

                View All Services →

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP CTA
========================================================= --}}
<section class="py-16 bg-[#003f7d]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <p class="text-sm font-semibold uppercase
                  tracking-wider text-[#f4b400]">

            Join Urban Roads SACCO

        </p>

        <h2 class="mt-3 text-3xl md:text-4xl
                   font-bold text-white">

            Become Part of Our SACCO Family

        </h2>

        <p class="mt-5 text-blue-100 max-w-2xl
                  mx-auto leading-relaxed">

            Membership is open to eligible staff of Kenya Urban Roads
            Authority, Kenya National Highways Authority, Kenya Rural
            Roads Authority, Kenya Roads Board and Project Staff.

        </p>

        <a href="{{ route('membership') }}"
           class="inline-block mt-7 bg-white
                  text-[#003f7d] px-7 py-3
                  font-semibold rounded-sm
                  hover:bg-gray-100 transition">

            Membership Information

        </a>

    </div>

</section>


{{-- =========================================================
     LATEST NEWS
========================================================= --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row
                    md:items-end md:justify-between gap-4">

            <div>

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-[#168a45]">

                    Updates

                </p>

                <h2 class="mt-2 text-3xl font-bold text-[#003f7d]">

                    Latest News & Announcements

                </h2>

                <div class="w-12 h-1 bg-[#f4b400] mt-4"></div>

            </div>

            <a href="{{ route('news') }}"
               class="text-[#0056a6]
                      font-semibold hover:underline">

                View All Updates →

            </a>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">

            {{-- NEWS 1 --}}
            <article class="border border-gray-200 p-6
                            hover:shadow-md transition">

                <p class="text-xs font-semibold text-[#168a45]
                          uppercase">

                    Announcement

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#003f7d]">

                    Members Training Seminar

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Stay informed about SACCO activities,
                    programmes and member communications.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#0056a6] hover:underline">

                    Read More →

                </a>

            </article>


            {{-- NEWS 2 --}}
            <article class="border border-gray-200 p-6
                            hover:shadow-md transition">

                <p class="text-xs font-semibold text-[#168a45]
                          uppercase">

                    Members

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#003f7d]">

                    Important Member Information

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Access important information, notices and
                    updates from Urban Roads SACCO.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#0056a6] hover:underline">

                    Read More →

                </a>

            </article>


            {{-- NEWS 3 --}}
            <article class="border border-gray-200 p-6
                            hover:shadow-md transition">

                <p class="text-xs font-semibold text-[#168a45]
                          uppercase">

                    SACCO News

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#003f7d]">

                    What's Happening at the SACCO?

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Follow our latest activities, events and
                    developments.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#0056a6] hover:underline">

                    Read More →

                </a>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT CTA
========================================================= --}}
<section class="bg-[#0056a6]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="py-12 flex flex-col md:flex-row
                    items-center justify-between gap-6">

            <div class="text-white text-center md:text-left">

                <h2 class="text-2xl md:text-3xl font-bold">

                    Have a question?

                </h2>

                <p class="text-blue-100 mt-2">

                    Our team is ready to assist you.

                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="bg-white text-[#0056a6]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">

                Contact Us

            </a>

        </div>

    </div>

</section>

@endsection
