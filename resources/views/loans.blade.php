@extends('layouts.app')

@section('title', 'Loan Products | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#0056a6]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-blue-100">
            Our Products
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Loan Products
        </h1>

        <div class="w-14 h-1 bg-[#f4b400] mt-5"></div>

        <p class="mt-6 max-w-2xl text-lg text-blue-100 leading-relaxed">
            Flexible financing solutions designed to help our members
            meet their personal, educational, emergency and development
            needs.
        </p>

    </div>
</section>


{{-- LOANS --}}
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            {{-- Normal Loan --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#0056a6]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#0056a6]">
                        Main Loan
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Normal Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        A general-purpose loan designed to help members
                        meet various financial needs.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">48 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">1% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 5M</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Super ROUSA --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#168a45]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#168a45]">
                        Member Loan
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Super ROUSA
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        A longer-term financing option designed to provide
                        members with increased borrowing flexibility.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">60 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">1.1% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 5M</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Super Development --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#f4b400]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#c58d00]">
                        Development
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Super Development Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Financing designed to support development,
                        investment and long-term projects.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">72 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">1.1% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 10M</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Emergency --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#0056a6]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#0056a6]">
                        Short Term
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Emergency Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Quick financial assistance to help members deal
                        with unexpected expenses and emergencies.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">12 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">1% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 300K</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- School Fees --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#168a45]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#168a45]">
                        Education
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        School Fees Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Financial support to help members meet school fees
                        and other education-related expenses.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">12 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">1% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 300K</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Salary Advance --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#f4b400]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#c58d00]">
                        Salary
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Salary Advance Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Short-term financial assistance for members
                        requiring an advance against their salary.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">6 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">5% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 300K</strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Motor Vehicle --}}
            <div class="bg-white border border-gray-200 shadow-sm">

                <div class="h-2 bg-[#0056a6]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase tracking-wider text-[#0056a6]">
                        Insurance
                    </span>

                    <h2 class="mt-3 text-2xl font-bold text-[#003f7d]">
                        Motor Vehicle Insurance Loan
                    </h2>

                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Financing support for members to meet motor vehicle
                        insurance costs.
                    </p>

                    <div class="border-t border-gray-200 mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#003f7d]">12 Months</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#003f7d]">5% p.m.</strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#168a45]">KSh 300K</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-white py-16">

    <div class="max-w-4xl mx-auto px-4 text-center">

        <h2 class="text-3xl font-bold text-[#003f7d]">
            Need more information?
        </h2>

        <p class="mt-4 text-gray-600">
            Contact Urban Roads SACCO to learn more about our loan
            products, eligibility and application process.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block mt-7 bg-[#0056a6] text-white px-7 py-3 font-semibold rounded-sm hover:bg-[#003f7d] transition">
            Contact Us
        </a>

    </div>

</section>

@endsection
