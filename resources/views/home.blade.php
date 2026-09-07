@extends('layouts.app')

@section('title', 'Urban Roads SACCO | Home')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="bg-[#479F61]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-12
                    items-center py-20 lg:py-24">

            {{-- HERO CONTENT --}}
            <div class="text-white">

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-[#F7D928]">

                    Welcome to Urban Roads SACCO

                </p>

                <h1 class="mt-4 text-4xl md:text-5xl
                           font-bold leading-tight">

                    Empowering Members.
                    
                    <span class="text-[#F7D928]">
                        Building Futures.
                    </span>

                </h1>

                <p class="mt-6 text-lg text-green-50
                          leading-relaxed max-w-xl">

                    A member-focused Savings and Credit Cooperative Society
                    committed to providing quality savings, credit and
                    financial services.

                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    <a href="{{ route('membership') }}"
                       class="bg-white
                              text-[#2F7D47]
                              px-6 py-3
                              font-semibold
                              rounded-sm
                              hover:bg-[#F7D928]
                              hover:text-[#252525]
                              transition">

                        Become a Member

                    </a>

                    <a href="{{ route('about') }}"
                       class="border-2 border-white
                              text-white
                              px-6 py-3
                              font-semibold
                              rounded-sm
                              hover:bg-white
                              hover:text-[#2F7D47]
                              transition">

                        Learn More

                    </a>

                </div>

            </div>


            {{-- HERO INFORMATION CARD --}}
            <div class="hidden lg:flex justify-end">

                <div class="bg-white p-8 w-full max-w-md shadow-xl">

                    <div class="w-14 h-1 bg-[#D5595F] mb-6"></div>

                    <p class="text-sm font-semibold uppercase
                              tracking-wide text-[#479F61]">

                        Your SACCO

                    </p>

                    <h2 class="mt-2 text-2xl font-bold
                               text-[#3F4145]">

                        Your Financial Partner

                    </h2>

                    <p class="text-gray-600 mt-4 leading-relaxed">

                        We provide members with opportunities to save,
                        access affordable credit and improve their
                        financial wellbeing.

                    </p>

                    <a href="{{ route('services') }}"
                       class="inline-block mt-6
                              text-[#2F7D47]
                              font-semibold
                              hover:text-[#D5595F]
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
                      tracking-wider text-[#479F61]">

                About Us

            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">

                Working Together for a Better
                Financial Future

            </h2>

            <div class="w-12 h-1 bg-[#D5595F]
                        mx-auto mt-5">
            </div>

            <p class="mt-6 text-gray-600 leading-relaxed">

                Urban Roads SACCO provides savings, credit and other
                financial services designed to support the needs and
                aspirations of its members.

            </p>

            <a href="{{ route('about') }}"
               class="inline-block mt-6
                      text-[#2F7D47]
                      font-semibold
                      hover:text-[#D5595F]
                      hover:underline">

                Read More About Us →

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES SECTION
========================================================= --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#479F61]">

                What We Offer

            </p>

            <h2 class="mt-3 text-3xl font-bold text-[#3F4145]">

                Our Services

            </h2>

            <div class="w-12 h-1 bg-[#D5595F]
                        mx-auto mt-4">
            </div>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">


            {{-- SAVINGS --}}
            <a href="{{ route('services') }}"
               class="bg-white border border-gray-200
                      p-7
                      hover:border-[#479F61]
                      hover:shadow-md
                      transition group">

                <div class="w-12 h-12
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold">

                    S

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">

                    Savings

                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Save consistently and build a stronger financial
                    foundation for your future.

                </p>

                <span class="inline-block mt-5
                             text-sm font-semibold
                             text-[#2F7D47]
                             group-hover:text-[#D5595F]
                             group-hover:underline">

                    Learn More →

                </span>

            </a>


            {{-- LOANS --}}
            <a href="{{ route('loans') }}"
               class="bg-white border border-gray-200
                      p-7
                      hover:border-[#D5595F]
                      hover:shadow-md
                      transition group">

                <div class="w-12 h-12
                            bg-[#FBECEE]
                            text-[#B83F46]
                            flex items-center justify-center
                            font-bold">

                    L

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">

                    Loans & Credit

                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Access flexible financing solutions designed
                    to meet different member needs.

                </p>

                <span class="inline-block mt-5
                             text-sm font-semibold
                             text-[#B83F46]
                             group-hover:underline">

                    View Loan Products →

                </span>

            </a>


            {{-- MEMBERSHIP --}}
            <a href="{{ route('membership') }}"
               class="bg-white border border-gray-200
                      p-7
                      hover:border-[#D8B900]
                      hover:shadow-md
                      transition group">

                <div class="w-12 h-12
                            bg-[#FFF9D9]
                            text-[#A98C00]
                            flex items-center justify-center
                            font-bold">

                    M

                </div>

                <h3 class="mt-5 text-xl font-bold text-[#3F4145]">

                    Membership

                </h3>

                <p class="mt-3 text-gray-600 text-sm leading-relaxed">

                    Join Urban Roads SACCO and become part of our
                    growing member community.

                </p>

                <span class="inline-block mt-5
                             text-sm font-semibold
                             text-[#A98C00]
                             group-hover:underline">

                    Become a Member →

                </span>

            </a>

        </div>


        <div class="text-center mt-10">

            <a href="{{ route('services') }}"
               class="inline-block
                      text-[#2F7D47]
                      font-semibold
                      hover:text-[#D5595F]
                      hover:underline">

                View All Services →

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP CTA
========================================================= --}}
<section class="bg-[#3F4145]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8
                text-center">

        <div class="py-16">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#F7D928]">

                Join Urban Roads SACCO

            </p>

            <h2 class="mt-3 text-3xl md:text-4xl
                       font-bold text-white">

                Become Part of Our SACCO Family

            </h2>

            <p class="mt-5 text-gray-200
                      max-w-2xl mx-auto
                      leading-relaxed">

                Membership is open to eligible staff of Kenya Urban Roads
                Authority, Kenya National Highways Authority, Kenya Rural
                Roads Authority, Kenya Roads Board and Project Staff.

            </p>

            <a href="{{ route('membership') }}"
               class="inline-block mt-7
                      bg-[#479F61]
                      text-white
                      px-7 py-3
                      font-semibold
                      rounded-sm
                      hover:bg-[#2F7D47]
                      transition">

                Membership Information

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     LATEST NEWS
========================================================= --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <div class="flex flex-col md:flex-row
                    md:items-end
                    md:justify-between
                    gap-4">

            <div>

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-[#479F61]">

                    Updates

                </p>

                <h2 class="mt-2 text-3xl font-bold text-[#3F4145]">

                    Latest News & Announcements

                </h2>

                <div class="w-12 h-1 bg-[#D5595F] mt-4"></div>

            </div>


            <a href="{{ route('news') }}"
               class="text-[#2F7D47]
                      font-semibold
                      hover:text-[#D5595F]
                      hover:underline">

                View All Updates →

            </a>

        </div>


        <div class="grid md:grid-cols-3 gap-6 mt-10">


            {{-- NEWS 1 --}}
            <article class="border border-gray-200
                            p-6
                            hover:border-[#479F61]
                            hover:shadow-md
                            transition">

                <p class="text-xs font-semibold
                          text-[#479F61]
                          uppercase">

                    Announcement

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#3F4145]">

                    Members Training Seminar

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Stay informed about SACCO activities,
                    programmes and member communications.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#2F7D47]
                          hover:text-[#D5595F]
                          hover:underline">

                    Read More →

                </a>

            </article>


            {{-- NEWS 2 --}}
            <article class="border border-gray-200
                            p-6
                            hover:border-[#D5595F]
                            hover:shadow-md
                            transition">

                <p class="text-xs font-semibold
                          text-[#D5595F]
                          uppercase">

                    Members

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#3F4145]">

                    Important Member Information

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Access important information, notices and
                    updates from Urban Roads SACCO.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#B83F46]
                          hover:underline">

                    Read More →

                </a>

            </article>


            {{-- NEWS 3 --}}
            <article class="border border-gray-200
                            p-6
                            hover:border-[#F7D928]
                            hover:shadow-md
                            transition">

                <p class="text-xs font-semibold
                          text-[#A98C00]
                          uppercase">

                    SACCO News

                </p>

                <h3 class="mt-3 text-lg font-bold text-[#3F4145]">

                    What's Happening at the SACCO?

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Follow our latest activities, events and
                    developments.

                </p>

                <a href="{{ route('news') }}"
                   class="inline-block mt-5
                          text-sm font-semibold
                          text-[#A98C00]
                          hover:underline">

                    Read More →

                </a>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT CTA
========================================================= --}}
<section class="bg-[#479F61]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="py-12
                    flex flex-col md:flex-row
                    items-center
                    justify-between
                    gap-6">

            <div class="text-white
                        text-center
                        md:text-left">

                <h2 class="text-2xl md:text-3xl font-bold">

                    Have a question?

                </h2>

                <p class="text-green-50 mt-2">

                    Our team is ready to assist you.

                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="bg-white
                      text-[#2F7D47]
                      px-7 py-3
                      font-semibold
                      rounded-sm
                      hover:bg-[#F7D928]
                      hover:text-[#252525]
                      transition">

                Contact Us

            </a>

        </div>

    </div>

</section>

@endsection