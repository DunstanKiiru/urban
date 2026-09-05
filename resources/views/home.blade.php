@extends('layouts.app')

@section('title', 'Urban Roads SACCO | Empowering Members, Building Futures')

@section('content')

    {{-- HERO SECTION --}}
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-28">

            <div class="grid items-center gap-14 lg:grid-cols-2">

                {{-- LEFT CONTENT --}}
                <div>

                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-sm font-medium text-blue-300">
                        <span class="h-2 w-2 rounded-full bg-blue-400"></span>
                        Your Trusted Financial Partner
                    </div>

                    <h1 class="max-w-3xl text-4xl font-extrabold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Empowering Members.
                        <span class="text-blue-400">
                            Building Futures.
                        </span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">
                        Save with confidence, access affordable credit and
                        build a stronger financial future with Urban Roads SACCO.
                    </p>

                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                        <a
                            href="#membership"
                            class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-6 py-3.5 font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-500"
                        >
                            Become a Member
                            <svg
                                class="ml-2 h-5 w-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                                />
                            </svg>
                        </a>

                        <a
                            href="#loans"
                            class="inline-flex items-center justify-center rounded-lg border border-slate-600 px-6 py-3.5 font-semibold text-white transition hover:border-blue-400 hover:bg-white/5"
                        >
                            Explore Our Loans
                        </a>

                    </div>

                    {{-- QUICK TRUST POINTS --}}
                    <div class="mt-10 flex flex-wrap gap-x-6 gap-y-3 text-sm text-slate-300">
                        <div class="flex items-center gap-2">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500/20 text-green-400">
                                ✓
                            </span>
                            Competitive Rates
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500/20 text-green-400">
                                ✓
                            </span>
                            Member Focused
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-green-500/20 text-green-400">
                                ✓
                            </span>
                            Secure Savings
                        </div>
                    </div>

                </div>

                {{-- RIGHT VISUAL --}}
                <div class="relative">

                    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-3 shadow-2xl backdrop-blur-sm">

                        <div class="flex aspect-[4/3] items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900">

                            <div class="px-8 text-center">

                                <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-white/10 ring-1 ring-white/20">
                                    <svg
                                        class="h-10 w-10 text-blue-300"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M12 3v18m9-9H3m15.364-6.364l-12.728 12.728m0-12.728l12.728 12.728"
                                        />
                                    </svg>
                                </div>

                                <h2 class="text-2xl font-bold text-white">
                                    Urban Roads SACCO
                                </h2>

                                <p class="mt-3 text-slate-300">
                                    Saving today. Growing tomorrow.
                                </p>

                            </div>

                        </div>

                    </div>

                    {{-- FLOATING CARD --}}
                    <div class="absolute -bottom-6 -left-6 hidden rounded-2xl border border-slate-200 bg-white p-5 shadow-xl sm:block">

                        <div class="flex items-center gap-4">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V6m0 10v2m0-2c-1.11 0-2.08-.402-2.599-1"
                                    />
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs font-medium text-slate-500">
                                    Financial Growth
                                </p>

                                <p class="font-bold text-slate-900">
                                    Built Around You
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- QUICK SERVICES --}}
    <section class="relative -mt-8 px-6">
        <div class="mx-auto max-w-6xl">

            <div class="grid overflow-hidden rounded-2xl bg-white shadow-xl ring-1 ring-slate-200 sm:grid-cols-2 lg:grid-cols-4">

                <a href="#loans" class="group border-b border-slate-200 p-6 transition hover:bg-slate-50 lg:border-b-0 lg:border-r">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        💰
                    </div>

                    <h3 class="font-bold text-slate-900">
                        Loan Products
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Flexible financing solutions designed around your needs.
                    </p>
                </a>

                <a href="#savings" class="group border-b border-slate-200 p-6 transition hover:bg-slate-50 sm:border-r lg:border-b-0">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        🏦
                    </div>

                    <h3 class="font-bold text-slate-900">
                        Savings
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Build your savings and work towards your financial goals.
                    </p>
                </a>

                <a href="#membership" class="group border-b border-slate-200 p-6 transition hover:bg-slate-50 lg:border-b-0 lg:border-r">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        👥
                    </div>

                    <h3 class="font-bold text-slate-900">
                        Membership
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Join a SACCO focused on empowering its members.
                    </p>
                </a>

                <a href="{{ route('contact') }}" class="group p-6 transition hover:bg-slate-50">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        📞
                    </div>

                    <h3 class="font-bold text-slate-900">
                        Contact Us
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-500">
                        Talk to our team and get the assistance you need.
                    </p>
                </a>

            </div>

        </div>
    </section>


    {{-- INTRO / ABOUT --}}
    <section class="bg-white py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid items-center gap-14 lg:grid-cols-2">

                <div>
                    <p class="text-sm font-bold uppercase tracking-widest text-blue-600">
                        About Urban Roads SACCO
                    </p>

                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Financial solutions designed with our members in mind.
                    </h2>

                    <p class="mt-6 leading-8 text-slate-600">
                        Urban Roads SACCO provides a range of financial products
                        and services designed to meet the diverse needs of its
                        members. Our focus is on responsible savings, accessible
                        credit and long-term financial growth.
                    </p>

                    <p class="mt-4 leading-8 text-slate-600">
                        We are committed to providing quality financial services
                        while building strong and sustainable relationships with
                        our members.
                    </p>

                    <a
                        href="{{ route('about') }}"
                        class="mt-8 inline-flex items-center font-semibold text-blue-700 hover:text-blue-600"
                    >
                        Learn more about us

                        <svg
                            class="ml-2 h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"
                            />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-5">

                    <div class="rounded-2xl bg-slate-900 p-7 text-white">
                        <p class="text-3xl font-extrabold">01</p>
                        <h3 class="mt-5 font-bold">Innovative</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-300">
                            Financial products and services designed for
                            diverse member needs.
                        </p>
                    </div>

                    <div class="mt-8 rounded-2xl bg-blue-600 p-7 text-white">
                        <p class="text-3xl font-extrabold">02</p>
                        <h3 class="mt-5 font-bold">Sustainable</h3>
                        <p class="mt-2 text-sm leading-6 text-blue-100">
                            Building strong financial relationships and
                            long-term member value.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-blue-50 p-7 text-slate-900">
                        <p class="text-3xl font-extrabold text-blue-700">03</p>
                        <h3 class="mt-5 font-bold">Member Focused</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Your needs remain at the centre of what we do.
                        </p>
                    </div>

                    <div class="mt-8 rounded-2xl border border-slate-200 p-7">
                        <p class="text-3xl font-extrabold text-blue-700">04</p>
                        <h3 class="mt-5 font-bold text-slate-900">Trusted</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            A financial partner committed to quality service.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- LOAN PRODUCTS --}}
    <section id="loans" class="bg-slate-50 py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-widest text-blue-600">
                    Loan Products
                </p>

                <h2 class="mt-4 text-3xl font-extrabold text-slate-900 sm:text-4xl">
                    Financing solutions for every stage of life.
                </h2>

                <p class="mt-5 leading-7 text-slate-600">
                    Choose from a range of loan products designed to help
                    you handle emergencies, invest, educate your family
                    and achieve your financial goals.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                {{-- NORMAL LOAN --}}
                <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        💳
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Normal / Main Loan
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Flexible financing for your personal and financial needs.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Repayment</span>
                            <span class="font-semibold">48 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-slate-500">Interest</span>
                            <span class="font-semibold">1% p.m.</span>
                        </div>
                    </div>
                </div>

                {{-- SUPER ROUSA --}}
                <div class="rounded-2xl bg-blue-700 p-7 text-white shadow-lg shadow-blue-700/20 transition hover:-translate-y-1">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10">
                        ⭐
                    </div>

                    <h3 class="mt-6 text-xl font-bold">
                        Super ROUSA Loan
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-blue-100">
                        A longer-term financing solution designed for bigger
                        financial needs.
                    </p>

                    <div class="mt-6 border-t border-white/20 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-blue-100">Repayment</span>
                            <span class="font-semibold">60 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-blue-100">Interest</span>
                            <span class="font-semibold">1.1% p.m.</span>
                        </div>
                    </div>
                </div>

                {{-- DEVELOPMENT --}}
                <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-700">
                        🏗️
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Super Development Loan
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Finance development projects and long-term investments.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Repayment</span>
                            <span class="font-semibold">72 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-slate-500">Interest</span>
                            <span class="font-semibold">1.1% p.m.</span>
                        </div>
                    </div>
                </div>

                {{-- EMERGENCY --}}
                <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
                        🚨
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Emergency Loan
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Access quick financial assistance when unexpected
                        situations arise.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Repayment</span>
                            <span class="font-semibold">12 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-slate-500">Interest</span>
                            <span class="font-semibold">1% p.m.</span>
                        </div>
                    </div>
                </div>

                {{-- SCHOOL FEES --}}
                <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700">
                        🎓
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        School Fees Loan
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Support your family's education needs with accessible
                        school fees financing.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Repayment</span>
                            <span class="font-semibold">12 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-slate-500">Interest</span>
                            <span class="font-semibold">1% p.m.</span>
                        </div>
                    </div>
                </div>

                {{-- SALARY ADVANCE --}}
                <div class="rounded-2xl bg-white p-7 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-purple-700">
                        💼
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-slate-900">
                        Salary Advance
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-slate-600">
                        Get quick access to funds against your salary.
                    </p>

                    <div class="mt-6 border-t border-slate-100 pt-5">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">Repayment</span>
                            <span class="font-semibold">6 months</span>
                        </div>

                        <div class="mt-3 flex justify-between text-sm">
                            <span class="text-slate-500">Interest</span>
                            <span class="font-semibold">5% p.m.</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-10 text-center">
                <a
                    href="#"
                    class="inline-flex items-center rounded-lg bg-slate-900 px-6 py-3 font-semibold text-white transition hover:bg-slate-800"
                >
                    View All Loan Products
                    <span class="ml-2">→</span>
                </a>
            </div>

        </div>
    </section>


    {{-- MEMBERSHIP CTA --}}
    <section id="membership" class="bg-blue-700 py-20">
        <div class="mx-auto max-w-5xl px-6 text-center">

            <p class="text-sm font-bold uppercase tracking-widest text-blue-200">
                Membership
            </p>

            <h2 class="mt-4 text-3xl font-extrabold text-white sm:text-4xl">
                Become part of Urban Roads SACCO
            </h2>

            <p class="mx-auto mt-5 max-w-3xl leading-7 text-blue-100">
                Membership is open to staff of Kenya Urban Roads Authority,
                Kenya National Highways Authority, Kenya Rural Roads Authority,
                Kenya Roads Board and Project Staff.
            </p>

            <div class="mt-8">
                <a
                    href="#"
                    class="inline-flex items-center rounded-lg bg-white px-7 py-3.5 font-bold text-blue-700 shadow-lg transition hover:bg-blue-50"
                >
                    Join Urban Roads SACCO
                    <span class="ml-2">→</span>
                </a>
            </div>

        </div>
    </section>

@endsection
