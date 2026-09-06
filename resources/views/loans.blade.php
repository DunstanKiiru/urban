@extends('layouts.app')

@section('title', 'Loan Products | Urban Roads SACCO')

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
            Our Products
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl
                   font-bold text-white">
            Loan Products
        </h1>

        <div class="w-14 h-1
                    bg-[#F7D928]
                    mt-5">
        </div>

        <p class="mt-6 max-w-2xl
                  text-lg
                  text-[#EAF5ED]
                  leading-relaxed">
            Flexible financing solutions designed to help our members
            meet their personal, educational, emergency and development
            needs.
        </p>

    </div>

</section>


{{-- =========================================================
     LOAN PRODUCTS
========================================================= --}}
<section class="py-20 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">


            {{-- =================================================
                 NORMAL LOAN
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#479F61]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#479F61]">
                        Main Loan
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Normal Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        A general-purpose loan designed to help members
                        meet various financial needs.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                48 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                1% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 5M
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SUPER ROUSA
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#D5595F]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#D5595F]">
                        Member Loan
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Super ROUSA
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        A longer-term financing option designed to provide
                        members with increased borrowing flexibility.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                60 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                1.1% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 5M
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SUPER DEVELOPMENT
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#F7D928]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#D8B900]">
                        Development
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Super Development Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        Financing designed to support development,
                        investment and long-term projects.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                72 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                1.1% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 10M
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 EMERGENCY
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#D5595F]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#D5595F]">
                        Short Term
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Emergency Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        Quick financial assistance to help members deal
                        with unexpected expenses and emergencies.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                12 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                1% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 300K
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SCHOOL FEES
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#479F61]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#479F61]">
                        Education
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        School Fees Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        Financial support to help members meet school fees
                        and other education-related expenses.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                12 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                1% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 300K
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 SALARY ADVANCE
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#F7D928]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#D8B900]">
                        Salary
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Salary Advance Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        Short-term financial assistance for members
                        requiring an advance against their salary.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                6 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                5% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 300K
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 MOTOR VEHICLE INSURANCE
            ================================================== --}}
            <div class="group bg-white
                        border border-gray-200
                        shadow-sm
                        hover:shadow-xl
                        hover:-translate-y-1
                        transition-all duration-300">

                <div class="h-2 bg-[#D5595F]"></div>

                <div class="p-7">

                    <span class="text-xs font-bold uppercase
                                 tracking-wider
                                 text-[#D5595F]">
                        Insurance
                    </span>

                    <h2 class="mt-3 text-2xl
                               font-bold text-[#2F7D47]">
                        Motor Vehicle Insurance Loan
                    </h2>

                    <p class="mt-4 text-gray-600
                              text-sm leading-relaxed">
                        Financing support for members to meet motor vehicle
                        insurance costs.
                    </p>

                    <div class="border-t border-gray-200
                                mt-6 pt-5 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Repayment</span>
                            <strong class="text-[#2F7D47]">
                                12 Months
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Interest</span>
                            <strong class="text-[#2F7D47]">
                                5% p.m.
                            </strong>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Maximum</span>
                            <strong class="text-[#479F61]">
                                KSh 300K
                            </strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     LOAN INFORMATION
========================================================= --}}
<section class="py-20 bg-white">

    <div class="max-w-6xl mx-auto
                px-4 sm:px-6 lg:px-8">

        <div class="bg-[#EAF5ED]
                    border border-[#D7EBDD]
                    p-8 md:p-10">

            <div class="grid md:grid-cols-2
                        gap-8 items-center">

                <div>

                    <p class="text-sm font-semibold
                              uppercase tracking-wider
                              text-[#479F61]">
                        Loan Information
                    </p>

                    <h2 class="mt-3 text-3xl
                               font-bold text-[#2F7D47]">
                        Find the Right Financing Solution
                    </h2>

                    <p class="mt-4 text-gray-600
                              leading-relaxed">
                        Our loan products are structured to cater for
                        different member needs, from emergencies and
                        education to development and personal financial
                        requirements.
                    </p>

                </div>

                <div class="md:text-right">

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center
                              gap-2
                              bg-[#479F61]
                              text-white
                              px-7 py-3.5
                              font-semibold
                              hover:bg-[#2F7D47]
                              hover:shadow-md
                              transition-all duration-200">

                        Ask About a Loan
                        <span>→</span>

                    </a>

                </div>

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

        <div class="text-center">

            <p class="text-sm font-semibold
                      uppercase tracking-wider
                      text-[#F7D928]">
                Need Assistance?
            </p>

            <h2 class="mt-3 text-3xl md:text-4xl
                       font-bold text-white">
                Need more information?
            </h2>

            <p class="mt-4
                      text-[#EAF5ED]
                      max-w-2xl mx-auto">
                Contact Urban Roads SACCO to learn more about our loan
                products, eligibility and application process.
            </p>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center
                      gap-2
                      mt-7
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
