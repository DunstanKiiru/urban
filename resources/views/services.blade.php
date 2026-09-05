@extends('layouts.app')

@section('title', 'Our Services | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#003f7d]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#f4b400]">
            What We Offer
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Our Services
        </h1>

        <p class="mt-5 max-w-2xl text-blue-100 leading-relaxed">
            We provide a range of financial services designed to help our
            members save, access credit and achieve their financial goals.
        </p>

    </div>
</section>


{{-- SERVICES --}}
<section class="py-16 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            {{-- SAVINGS --}}
            <div class="border border-gray-200 p-7 hover:border-[#0056a6] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-[#eaf3fb] text-[#0056a6]
                            flex items-center justify-center text-xl font-bold">
                    S
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Savings
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Build a strong financial foundation through consistent
                    saving and access to savings products designed around
                    your needs.
                </p>

            </div>


            {{-- LOANS --}}
            <div class="border border-gray-200 p-7 hover:border-[#168a45] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-green-50 text-[#168a45]
                            flex items-center justify-center text-xl font-bold">
                    L
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Loans & Credit
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Access affordable and flexible credit facilities to
                    support personal, educational, development and other
                    financial needs.
                </p>

                <a href="{{ route('loans') }}"
                   class="inline-block mt-5 text-sm font-semibold text-[#168a45] hover:underline">
                    View Loan Products →
                </a>

            </div>


            {{-- MEMBERSHIP --}}
            <div class="border border-gray-200 p-7 hover:border-[#f4b400] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-yellow-50 text-[#c58d00]
                            flex items-center justify-center text-xl font-bold">
                    M
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Membership
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Become a member of Urban Roads SACCO and enjoy access to
                    our range of savings, credit and member-focused services.
                </p>

                <a href="{{ route('contact') }}"
                   class="inline-block mt-5 text-sm font-semibold text-[#c58d00] hover:underline">
                    Membership Enquiries →
                </a>

            </div>


            {{-- FINANCIAL EDUCATION --}}
            <div class="border border-gray-200 p-7 hover:border-[#0056a6] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-[#eaf3fb] text-[#0056a6]
                            flex items-center justify-center text-xl font-bold">
                    F
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Financial Education
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Access financial information, member training and
                    educational programmes that promote better financial
                    decision-making.
                </p>

            </div>


            {{-- MEMBER SUPPORT --}}
            <div class="border border-gray-200 p-7 hover:border-[#168a45] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-green-50 text-[#168a45]
                            flex items-center justify-center text-xl font-bold">
                    M
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Member Support
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Our team is available to assist members with enquiries,
                    applications, account information and other SACCO
                    services.
                </p>

            </div>


            {{-- MEMBER INFORMATION --}}
            <div class="border border-gray-200 p-7 hover:border-[#f4b400] hover:shadow-lg transition">

                <div class="w-14 h-14 bg-yellow-50 text-[#c58d00]
                            flex items-center justify-center text-xl font-bold">
                    I
                </div>

                <h2 class="mt-6 text-2xl font-bold text-[#003f7d]">
                    Member Information
                </h2>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Stay informed through important notices, announcements,
                    documents, updates and other information from the SACCO.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#0056a6]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <div class="flex flex-col md:flex-row md:items-center
                    md:justify-between gap-6">

            <div class="text-white">

                <h2 class="text-2xl md:text-3xl font-bold">
                    Need more information?
                </h2>

                <p class="mt-2 text-blue-100">
                    Get in touch with Urban Roads SACCO for assistance.
                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-[#0056a6]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection
