@extends('layouts.app')

@section('title', 'Loan Products | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Financial Solutions
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Loan Products
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Flexible credit solutions designed to meet different
            member financial needs.
        </p>

    </div>

</section>


{{-- LOANS --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">


            {{-- NORMAL --}}
            <div class="bg-white border-t-4 border-[#479F61]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#479F61]">
                    Main Loan
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    Normal Loan
                </h2>

                <p class="mt-4 text-gray-600">
                    A general-purpose loan designed to meet various
                    member financial needs.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 5,000,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 48 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        1% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- SUPER ROUSA --}}
            <div class="bg-white border-t-4 border-[#D5595F]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#D5595F]">
                    Special Facility
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    Super ROUSA
                </h2>

                <p class="mt-4 text-gray-600">
                    A higher-value financing option providing members
                    with extended repayment flexibility.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 5,000,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 60 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        1.1% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- DEVELOPMENT --}}
            <div class="bg-white border-t-4 border-[#F7D928]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#A98C00]">
                    Development
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    Super Development Loan
                </h2>

                <p class="mt-4 text-gray-600">
                    Designed to support larger development and investment
                    needs of eligible members.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 10,000,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 72 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        1.1% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- EMERGENCY --}}
            <div class="bg-white border-t-4 border-[#D5595F]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#D5595F]">
                    Emergency
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    Emergency Loan
                </h2>

                <p class="mt-4 text-gray-600">
                    Short-term financial support for urgent member needs.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 300,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 12 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        1% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- SCHOOL FEES --}}
            <div class="bg-white border-t-4 border-[#479F61]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#479F61]">
                    Education
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    School Fees Loan
                </h2>

                <p class="mt-4 text-gray-600">
                    Financing support to help members meet school fee
                    obligations.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 300,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 12 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        1% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- SALARY --}}
            <div class="bg-white border-t-4 border-[#F7D928]
                        p-7 shadow-sm">

                <p class="text-sm font-semibold uppercase text-[#A98C00]">
                    Short Term
                </p>

                <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                    Salary Advance Loan
                </h2>

                <p class="mt-4 text-gray-600">
                    Short-term financing designed to provide members
                    with quick access to funds.
                </p>

                <div class="mt-6 space-y-3 text-sm">

                    <p>
                        <span class="font-semibold">Maximum:</span>
                        KSh 300,000
                    </p>

                    <p>
                        <span class="font-semibold">Repayment:</span>
                        Up to 6 months
                    </p>

                    <p>
                        <span class="font-semibold">Interest:</span>
                        5% p.m. reducing balance
                    </p>

                </div>

            </div>


            {{-- MOTOR VEHICLE --}}
            <div class="bg-white border-t-4 border-[#479F61]
                        p-7 shadow-sm md:col-span-2 lg:col-span-3">

                <div class="max-w-2xl">

                    <p class="text-sm font-semibold uppercase text-[#479F61]">
                        Insurance
                    </p>

                    <h2 class="mt-2 text-2xl font-bold text-[#3F4145]">
                        Motor Vehicle Insurance Loan
                    </h2>

                    <p class="mt-4 text-gray-600">
                        Financing support for members seeking to meet
                        motor vehicle insurance obligations.
                    </p>

                    <div class="mt-6 grid sm:grid-cols-3 gap-4 text-sm">

                        <p>
                            <span class="font-semibold">Maximum:</span><br>
                            KSh 300,000
                        </p>

                        <p>
                            <span class="font-semibold">Repayment:</span><br>
                            Up to 12 months
                        </p>

                        <p>
                            <span class="font-semibold">Interest:</span><br>
                            5% p.m. reducing balance
                        </p>

                    </div>

                </div>

            </div>

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
            Contact Urban Roads SACCO for assistance with our loan products.
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
