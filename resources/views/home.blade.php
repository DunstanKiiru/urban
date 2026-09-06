@extends('layouts.app')

@section('title', 'Urban Roads SACCO | Home')

@section('content')

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="relative overflow-hidden bg-[#2F7D47]">

    {{-- Decorative background elements --}}
    <div class="absolute -top-24 -right-24 w-72 h-72
                rounded-full bg-[#479F61]/30">
    </div>

    <div class="absolute -bottom-32 -left-20 w-80 h-80
                rounded-full bg-[#F7D928]/10">
    </div>

    <div class="relative max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2
                    gap-12 lg:gap-16
                    items-center
                    min-h-[560px]
                    py-16 lg:py-20">

            {{-- HERO CONTENT --}}
            <div class="text-white">

                <div class="inline-flex items-center gap-2
                            px-3 py-1.5
                            bg-white/10
                            border border-white/20
                            text-sm font-medium">

                    <span class="w-2 h-2 rounded-full bg-[#F7D928]"></span>

                    Welcome to Urban Roads SACCO
                </div>

                <h1 class="mt-6
                           text-4xl sm:text-5xl lg:text-6xl
                           font-bold
                           leading-[1.08]
                           tracking-tight">

                    Empowering Members.
                    <span class="block text-[#F7D928]">
                        Building Futures.
                    </span>

                </h1>

                <p class="mt-6
                          max-w-xl
                          text-base sm:text-lg
                          text-[#EAF5ED]
                          leading-relaxed">

                    A member-focused Savings and Credit Cooperative Society
                    committed to providing quality savings, affordable credit
                    and financial services that help members achieve their goals.

                </p>

                <div class="mt-8 flex flex-wrap gap-4">

                    {{-- PRIMARY CTA --}}
                    <a href="{{ route('membership') }}"
                       class="inline-flex items-center justify-center
                              gap-2
                              bg-white
                              text-[#2F7D47]
                              px-6 py-3.5
                              font-semibold
                              shadow-sm
                              hover:bg-[#F7D928]
                              hover:text-[#252525]
                              hover:-translate-y-0.5
                              transition-all duration-200">

                        Become a Member

                        <span aria-hidden="true">→</span>

                    </a>

                    {{-- SECONDARY CTA --}}
                    <a href="{{ route('loans') }}"
                       class="inline-flex items-center justify-center
                              gap-2
                              border border-white/70
                              text-white
                              px-6 py-3.5
                              font-semibold
                              hover:bg-white
                              hover:text-[#2F7D47]
                              transition-all duration-200">

                        Explore Loans

                    </a>

                </div>

            </div>


            {{-- HERO INFORMATION CARD --}}
            <div class="hidden lg:block">

                <div class="relative max-w-md ml-auto">

                    {{-- Yellow accent --}}
                    <div class="absolute -top-3 -left-3
                                w-20 h-20
                                border-t-4 border-l-4
                                border-[#F7D928]">
                    </div>

                    <div class="relative
                                bg-white
                                p-8
                                shadow-2xl">

                        <div class="flex items-center gap-4">

                            <div class="w-14 h-14
                                        rounded-full
                                        bg-[#EAF5ED]
                                        flex items-center justify-center
                                        shrink-0">

                                <img src="{{ asset('images/logo.png') }}"
                                     alt="Urban Roads SACCO"
                                     class="w-12 h-12 object-contain">

                            </div>

                            <div>

                                <p class="text-xs
                                          uppercase
                                          tracking-wider
                                          font-semibold
                                          text-[#479F61]">
                                    Your SACCO
                                </p>

                                <h2 class="mt-1
                                           text-xl
                                           font-bold
                                           text-[#2F7D47]">
                                    Your Financial Partner
                                </h2>

                            </div>

                        </div>

                        <div class="w-12 h-1
                                    bg-[#F7D928]
                                    mt-7">
                        </div>

                        <p class="mt-5
                                  text-gray-600
                                  leading-relaxed">

                            We provide members with opportunities to save,
                            access affordable credit and improve their
                            financial wellbeing.

                        </p>


                        {{-- CARD FEATURES --}}
                        <div class="mt-7
                                    grid grid-cols-2
                                    gap-3">

                            <div class="p-4 bg-[#EAF5ED]">

                                <p class="text-2xl font-bold
                                          text-[#2F7D47]">
                                    Save
                                </p>

                                <p class="mt-1 text-xs text-gray-600">
                                    Build your financial future
                                </p>

                            </div>

                            <div class="p-4 bg-[#F7F8F7]">

                                <p class="text-2xl font-bold
                                          text-[#D5595F]">
                                    Grow
                                </p>

                                <p class="mt-1 text-xs text-gray-600">
                                    Access member solutions
                                </p>

                            </div>

                        </div>


                        <a href="{{ route('services') }}"
                           class="inline-flex items-center gap-2
                                  mt-7
                                  text-[#2F7D47]
                                  font-semibold
                                  hover:text-[#479F61]
                                  transition-colors">

                            Explore Our Services

                            <span aria-hidden="true">→</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     QUICK BENEFITS STRIP
========================================================= --}}
<section class="bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid sm:grid-cols-3">

            <div class="flex items-center gap-4
                        py-6 sm:px-6
                        border-b sm:border-b-0
                        sm:border-r border-gray-100">

                <div class="w-11 h-11
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold shrink-0">
                    01
                </div>

                <div>
                    <h3 class="font-bold text-[#252525]">
                        Member Focused
                    </h3>

                    <p class="text-sm text-gray-500 mt-0.5">
                        Your needs come first
                    </p>
                </div>

            </div>


            <div class="flex items-center gap-4
                        py-6 sm:px-6
                        border-b sm:border-b-0
                        sm:border-r border-gray-100">

                <div class="w-11 h-11
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold shrink-0">
                    02
                </div>

                <div>
                    <h3 class="font-bold text-[#252525]">
                        Affordable Credit
                    </h3>

                    <p class="text-sm text-gray-500 mt-0.5">
                        Flexible financial solutions
                    </p>
                </div>

            </div>


            <div class="flex items-center gap-4
                        py-6 sm:px-6">

                <div class="w-11 h-11
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold shrink-0">
                    03
                </div>

                <div>
                    <h3 class="font-bold text-[#252525]">
                        Financial Growth
                    </h3>

                    <p class="text-sm text-gray-500 mt-0.5">
                        Save today, grow tomorrow
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT SECTION
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2
                    gap-12 lg:gap-20
                    items-center">

            {{-- CONTENT --}}
            <div>

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#479F61]">
                    About Urban Roads SACCO
                </p>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-bold
                           text-[#2F7D47]
                           leading-tight">

                    Working Together for a Better
                    <span class="block text-[#252525]">
                        Financial Future
                    </span>

                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-5">
                </div>

                <p class="mt-6
                          text-gray-600
                          leading-relaxed">

                    Urban Roads SACCO provides savings, credit and other
                    financial services designed to support the needs,
                    ambitions and aspirations of its members.

                </p>

                <p class="mt-4
                          text-gray-600
                          leading-relaxed">

                    Through responsible financial services and member
                    engagement, we seek to create opportunities that enable
                    our members to save, access affordable credit and improve
                    their financial wellbeing.

                </p>

                <a href="{{ route('about') }}"
                   class="inline-flex items-center gap-2
                          mt-7
                          font-semibold
                          text-[#2F7D47]
                          hover:text-[#479F61]
                          transition-colors">

                    Read More About Us

                    <span aria-hidden="true">→</span>

                </a>

            </div>


            {{-- VISUAL PANEL --}}
            <div class="relative">

                <div class="bg-[#F7F8F7]
                            p-8 sm:p-10">

                    <div class="grid grid-cols-2 gap-5">

                        <div class="bg-white p-6
                                    border-t-4 border-[#479F61]
                                    shadow-sm">

                            <div class="text-3xl font-bold
                                        text-[#2F7D47]">
                                Save
                            </div>

                            <p class="mt-2
                                      text-sm
                                      text-gray-600">
                                Develop a strong savings culture.
                            </p>

                        </div>


                        <div class="bg-white p-6
                                    border-t-4 border-[#F7D928]
                                    shadow-sm">

                            <div class="text-3xl font-bold
                                        text-[#D8B900]">
                                Access
                            </div>

                            <p class="mt-2
                                      text-sm
                                      text-gray-600">
                                Get access to affordable credit.
                            </p>

                        </div>


                        <div class="bg-white p-6
                                    border-t-4 border-[#D5595F]
                                    shadow-sm">

                            <div class="text-3xl font-bold
                                        text-[#D5595F]">
                                Grow
                            </div>

                            <p class="mt-2
                                      text-sm
                                      text-gray-600">
                                Work towards your financial goals.
                            </p>

                        </div>


                        <div class="bg-[#2F7D47]
                                    p-6
                                    text-white">

                            <div class="text-3xl font-bold">
                                Together
                            </div>

                            <p class="mt-2
                                      text-sm
                                      text-[#EAF5ED]">
                                Stronger through cooperative growth.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="absolute
                            -bottom-3
                            -right-3
                            w-16 h-16
                            border-r-4
                            border-b-4
                            border-[#F7D928]">
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES SECTION
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase
                      tracking-wider
                      text-[#479F61]">
                What We Offer
            </p>

            <h2 class="mt-3
                       text-3xl sm:text-4xl
                       font-bold
                       text-[#2F7D47]">
                Our Services
            </h2>

            <div class="w-12 h-1
                        bg-[#F7D928]
                        mx-auto mt-4">
            </div>

            <p class="mt-5
                      max-w-2xl
                      mx-auto
                      text-gray-600
                      leading-relaxed">

                Financial solutions designed around the needs
                and aspirations of our members.

            </p>

        </div>


        <div class="grid md:grid-cols-3
                    gap-6
                    mt-12">

            {{-- SAVINGS --}}
            <a href="{{ route('services') }}"
               class="group bg-white
                      border border-gray-200
                      p-7
                      hover:border-[#479F61]
                      hover:shadow-lg
                      hover:-translate-y-1
                      transition-all duration-300">

                <div class="w-14 h-14
                            bg-[#EAF5ED]
                            text-[#2F7D47]
                            flex items-center justify-center
                            font-bold text-lg
                            group-hover:bg-[#2F7D47]
                            group-hover:text-white
                            transition-colors">

                    S

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">
                    Savings
                </h3>

                <p class="mt-3
                          text-gray-600
                          text-sm
                          leading-relaxed">

                    Save consistently and build a stronger
                    financial foundation for your future.

                </p>

                <span class="inline-flex items-center gap-2
                             mt-6
                             text-sm
                             font-semibold
                             text-[#479F61]">

                    Learn More
                    <span>→</span>

                </span>

            </a>


            {{-- LOANS --}}
            <a href="{{ route('loans') }}"
               class="group bg-white
                      border border-gray-200
                      p-7
                      hover:border-[#D5595F]
                      hover:shadow-lg
                      hover:-translate-y-1
                      transition-all duration-300">

                <div class="w-14 h-14
                            bg-[#FBECEE]
                            text-[#D5595F]
                            flex items-center justify-center
                            font-bold text-lg
                            group-hover:bg-[#D5595F]
                            group-hover:text-white
                            transition-colors">

                    L

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">
                    Loans & Credit
                </h3>

                <p class="mt-3
                          text-gray-600
                          text-sm
                          leading-relaxed">

                    Access flexible financing solutions designed
                    to meet different member needs.

                </p>

                <span class="inline-flex items-center gap-2
                             mt-6
                             text-sm
                             font-semibold
                             text-[#D5595F]">

                    View Loan Products
                    <span>→</span>

                </span>

            </a>


            {{-- MEMBERSHIP --}}
            <a href="{{ route('membership') }}"
               class="group bg-white
                      border border-gray-200
                      p-7
                      hover:border-[#F7D928]
                      hover:shadow-lg
                      hover:-translate-y-1
                      transition-all duration-300">

                <div class="w-14 h-14
                            bg-[#FFF9D9]
                            text-[#D8B900]
                            flex items-center justify-center
                            font-bold text-lg
                            group-hover:bg-[#F7D928]
                            group-hover:text-[#252525]
                            transition-colors">

                    M

                </div>

                <h3 class="mt-6
                           text-xl font-bold
                           text-[#2F7D47]">
                    Membership
                </h3>

                <p class="mt-3
                          text-gray-600
                          text-sm
                          leading-relaxed">

                    Join Urban Roads SACCO and become part
                    of our growing member community.

                </p>

                <span class="inline-flex items-center gap-2
                             mt-6
                             text-sm
                             font-semibold
                             text-[#D8B900]">

                    Become a Member
                    <span>→</span>

                </span>

            </a>

        </div>


        <div class="text-center mt-10">

            <a href="{{ route('services') }}"
               class="inline-flex items-center gap-2
                      font-semibold
                      text-[#2F7D47]
                      hover:text-[#479F61]
                      transition-colors">

                View All Services

                <span>→</span>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     LOAN PRODUCTS HIGHLIGHT
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col
                    md:flex-row
                    md:items-end
                    md:justify-between
                    gap-5">

            <div>

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#479F61]">
                    Financial Solutions
                </p>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-bold
                           text-[#2F7D47]">
                    Loan Products
                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-4">
                </div>

            </div>

            <a href="{{ route('loans') }}"
               class="inline-flex items-center gap-2
                      font-semibold
                      text-[#2F7D47]
                      hover:text-[#479F61]">

                View All Loans
                <span>→</span>

            </a>

        </div>


        <div class="grid sm:grid-cols-2
                    lg:grid-cols-4
                    gap-5
                    mt-10">

            @foreach([
                ['Normal Loan', 'Flexible financing for your planned needs.', 'N'],
                ['Super ROUSA', 'A solution designed for eligible member needs.', 'R'],
                ['Emergency Loan', 'Financial assistance when unexpected needs arise.', 'E'],
                ['School Fees Loan', 'Support for your education-related expenses.', 'S'],
            ] as $loan)

                <a href="{{ route('loans') }}"
                   class="group p-6
                          border border-gray-200
                          hover:border-[#479F61]
                          hover:shadow-md
                          transition-all duration-200">

                    <div class="w-10 h-10
                                bg-[#EAF5ED]
                                text-[#2F7D47]
                                flex items-center justify-center
                                font-bold
                                group-hover:bg-[#2F7D47]
                                group-hover:text-white
                                transition-colors">

                        {{ $loan[2] }}

                    </div>

                    <h3 class="mt-5
                               font-bold
                               text-[#2F7D47]">

                        {{ $loan[0] }}

                    </h3>

                    <p class="mt-2
                              text-sm
                              text-gray-600
                              leading-relaxed">

                        {{ $loan[1] }}

                    </p>

                    <span class="inline-flex items-center gap-2
                                 mt-5
                                 text-sm
                                 font-semibold
                                 text-[#479F61]">

                        Learn More
                        <span>→</span>

                    </span>

                </a>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP CTA
========================================================= --}}
<section class="relative overflow-hidden
                bg-[#2F7D47]">

    <div class="absolute top-0 right-0
                w-64 h-64
                rounded-full
                bg-[#479F61]/30
                -translate-y-1/2 translate-x-1/3">
    </div>

    <div class="relative max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-16">

        <div class="flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-8">

            <div class="text-white max-w-2xl">

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#F7D928]">

                    Join Urban Roads SACCO

                </p>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-bold">

                    Become Part of Our SACCO Family

                </h2>

                <p class="mt-4
                          text-[#EAF5ED]
                          leading-relaxed">

                    Membership is open to eligible staff of Kenya Urban Roads
                    Authority, Kenya National Highways Authority, Kenya Rural
                    Roads Authority, Kenya Roads Board and Project Staff.

                </p>

            </div>


            <a href="{{ route('membership') }}"
               class="shrink-0
                      inline-flex items-center justify-center gap-2
                      bg-white
                      text-[#2F7D47]
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#F7D928]
                      hover:text-[#252525]
                      transition-all duration-200">

                Membership Information
                <span>→</span>

            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     LATEST NEWS
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col
                    md:flex-row
                    md:items-end
                    md:justify-between
                    gap-5">

            <div>

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#479F61]">
                    Updates
                </p>

                <h2 class="mt-3
                           text-3xl sm:text-4xl
                           font-bold
                           text-[#2F7D47]">
                    Latest News & Announcements
                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-4">
                </div>

            </div>

            <a href="{{ route('news') }}"
               class="inline-flex items-center gap-2
                      font-semibold
                      text-[#2F7D47]
                      hover:text-[#479F61]">

                View All Updates
                <span>→</span>

            </a>

        </div>


        <div class="grid md:grid-cols-3
                    gap-6
                    mt-10">

            @foreach([
                [
                    'Announcement',
                    'Members Training Seminar',
                    'Stay informed about SACCO activities, programmes and member communications.'
                ],
                [
                    'Members',
                    'Important Member Information',
                    'Access important information, notices and updates from Urban Roads SACCO.'
                ],
                [
                    'SACCO News',
                    "What's Happening at the SACCO?",
                    'Follow our latest activities, events and developments.'
                ],
            ] as $news)

                <article class="bg-white
                                border border-gray-200
                                p-7
                                hover:shadow-lg
                                hover:border-[#479F61]
                                transition-all duration-200">

                    <p class="text-xs font-semibold
                              uppercase
                              tracking-wide
                              text-[#D5595F]">

                        {{ $news[0] }}

                    </p>

                    <h3 class="mt-3
                               text-xl font-bold
                               text-[#2F7D47]">

                        {{ $news[1] }}

                    </h3>

                    <p class="mt-3
                              text-sm
                              text-gray-600
                              leading-relaxed">

                        {{ $news[2] }}

                    </p>

                    <a href="{{ route('news') }}"
                       class="inline-flex items-center gap-2
                              mt-6
                              text-sm
                              font-semibold
                              text-[#479F61]
                              hover:text-[#2F7D47]">

                        Read More
                        <span>→</span>

                    </a>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT CTA
========================================================= --}}
<section class="bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-12">

        <div class="bg-[#EAF5ED]
                    border border-[#D7EBDD]
                    px-6 sm:px-10
                    py-10
                    flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-6">

            <div>

                <p class="text-sm font-semibold
                          uppercase
                          tracking-wider
                          text-[#479F61]">
                    Need Assistance?
                </p>

                <h2 class="mt-2
                           text-2xl md:text-3xl
                           font-bold
                           text-[#2F7D47]">

                    Have a question?

                </h2>

                <p class="text-gray-600 mt-2">

                    Our team is ready to assist you.

                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-2
                      bg-[#479F61]
                      text-white
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#2F7D47]
                      hover:shadow-md
                      transition-all duration-200">

                Contact Us
                <span>→</span>

            </a>

        </div>

    </div>

</section>

@endsection
