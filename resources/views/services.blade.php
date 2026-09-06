@extends('layouts.app')

@section('title', 'Our Services | Urban Roads SACCO')

@section('content')

{{-- =========================================================
     PAGE HEADER
========================================================= --}}
<section class="relative overflow-hidden bg-[#2F7D47]">

    <div class="absolute -top-20 -right-20
                w-64 h-64
                rounded-full
                bg-[#479F61]/30">
    </div>

    <div class="absolute -bottom-24 -left-20
                w-72 h-72
                rounded-full
                bg-[#F7D928]/10">
    </div>

    <div class="relative max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-16 lg:py-20">

        <p class="text-sm font-semibold uppercase
                  tracking-wider text-[#F7D928]">
            What We Offer
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl
                   font-bold text-white">
            Our Services
        </h1>

        <p class="mt-5 max-w-2xl
                  text-[#EAF5ED]
                  leading-relaxed">
            We provide a range of financial services designed to help our
            members save, access credit and achieve their financial goals.
        </p>

    </div>

</section>


{{-- =========================================================
     SERVICES
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#479F61]">
                Member-Focused Solutions
            </p>

            <h2 class="mt-3 text-3xl sm:text-4xl
                       font-bold text-[#2F7D47]">
                Financial Services for Our Members
            </h2>

            <div class="w-12 h-1 bg-[#F7D928]
                        mx-auto mt-4">
            </div>

            <p class="mt-5 max-w-2xl mx-auto
                      text-gray-600 leading-relaxed">
                Our services are designed to support your savings,
                borrowing, financial knowledge and overall member experience.
            </p>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            {{-- =================================================
                 SAVINGS
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#2F7D47]
                            group-hover:text-white
                            transition-colors">
                    S
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Savings
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Build a strong financial foundation through consistent
                    saving and access to savings products designed around
                    your needs.
                </p>

                <div class="mt-6
                            w-10 h-1
                            bg-[#F7D928]">
                </div>

            </div>


            {{-- =================================================
                 LOANS
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#D5595F]
                            group-hover:text-white
                            transition-colors">
                    L
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Loans & Credit
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Access affordable and flexible credit facilities to
                    support personal, educational, development and other
                    financial needs.
                </p>

                <a href="{{ route('loans') }}"
                   class="inline-flex items-center gap-2
                          mt-6 text-sm font-semibold
                          text-[#D5595F]
                          hover:text-[#B83F46]">
                    View Loan Products
                    <span>→</span>
                </a>

            </div>


            {{-- =================================================
                 MEMBERSHIP
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#F7D928]
                            group-hover:text-[#252525]
                            transition-colors">
                    M
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Membership
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Become a member of Urban Roads SACCO and enjoy access to
                    our range of savings, credit and member-focused services.
                </p>

                <a href="{{ route('membership') }}"
                   class="inline-flex items-center gap-2
                          mt-6 text-sm font-semibold
                          text-[#D8B900]
                          hover:text-[#B69B00]">
                    Membership Information
                    <span>→</span>
                </a>

            </div>


            {{-- =================================================
                 FINANCIAL EDUCATION
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#2F7D47]
                            group-hover:text-white
                            transition-colors">
                    F
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Financial Education
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Access financial information, member training and
                    educational programmes that promote better financial
                    decision-making.
                </p>

                <div class="mt-6
                            w-10 h-1
                            bg-[#F7D928]">
                </div>

            </div>


            {{-- =================================================
                 MEMBER SUPPORT
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#D5595F]
                            group-hover:text-white
                            transition-colors">
                    M
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Member Support
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Our team is available to assist members with enquiries,
                    applications, account information and other SACCO
                    services.
                </p>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2
                          mt-6 text-sm font-semibold
                          text-[#D5595F]
                          hover:text-[#B83F46]">
                    Contact Support
                    <span>→</span>
                </a>

            </div>


            {{-- =================================================
                 MEMBER INFORMATION
            ================================================== --}}
            <div class="group bg-white
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
                            text-xl font-bold
                            group-hover:bg-[#F7D928]
                            group-hover:text-[#252525]
                            transition-colors">
                    I
                </div>

                <h2 class="mt-6 text-2xl
                           font-bold text-[#2F7D47]">
                    Member Information
                </h2>

                <p class="mt-4 text-gray-600
                          leading-relaxed">
                    Stay informed through important notices, announcements,
                    documents, updates and other information from the SACCO.
                </p>

                <a href="{{ route('news') }}"
                   class="inline-flex items-center gap-2
                          mt-6 text-sm font-semibold
                          text-[#D8B900]
                          hover:text-[#B69B00]">
                    View Updates
                    <span>→</span>
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICE APPROACH
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-3 gap-7">

            <div class="lg:col-span-2">

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-[#479F61]">
                    Our Approach
                </p>

                <h2 class="mt-3 text-3xl sm:text-4xl
                           font-bold text-[#2F7D47]">
                    Putting Members at the Centre
                </h2>

                <div class="w-12 h-1
                            bg-[#F7D928]
                            mt-4">
                </div>

                <p class="mt-6 text-gray-600
                          leading-relaxed max-w-2xl">
                    Urban Roads SACCO is committed to providing reliable,
                    accessible and member-focused financial services.
                    We aim to make saving, borrowing and accessing
                    information as convenient as possible for our members.
                </p>

            </div>

            <div class="bg-[#2F7D47]
                        p-7 text-white">

                <div class="w-12 h-1
                            bg-[#F7D928]">
                </div>

                <h3 class="mt-5 text-xl
                           font-bold">
                    Need Assistance?
                </h3>

                <p class="mt-3 text-sm
                          text-[#EAF5ED]
                          leading-relaxed">
                    Our team is ready to assist you with enquiries
                    about our services.
                </p>

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2
                          mt-6
                          bg-white
                          text-[#2F7D47]
                          px-5 py-3
                          text-sm font-semibold
                          hover:bg-[#F7D928]
                          hover:text-[#252525]">
                    Contact Us
                    <span>→</span>
                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     CTA
========================================================= --}}
<section class="bg-[#2F7D47]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-6">

            <div class="text-white">

                <p class="text-sm font-semibold
                          uppercase tracking-wider
                          text-[#F7D928]">
                    Urban Roads SACCO
                </p>

                <h2 class="mt-2 text-2xl md:text-3xl
                           font-bold">
                    Need more information?
                </h2>

                <p class="mt-2 text-[#EAF5ED]">
                    Get in touch with Urban Roads SACCO for assistance.
                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      gap-2
                      bg-white
                      text-[#2F7D47]
                      px-7 py-3.5
                      font-semibold
                      hover:bg-[#F7D928]
                      hover:text-[#252525]
                      transition-all duration-200">

                Contact Us
                <span>→</span>

            </a>

        </div>

    </div>

</section>

@endsection
