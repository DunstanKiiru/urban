@extends('layouts.app')

@section('title', 'Admin Dashboard | Urban Roads SACCO')

@section('content')

<div class="min-h-screen bg-[#F7F8F7]">

    {{-- ADMIN HEADER --}}
    <section class="bg-[#3F4145]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <div class="flex flex-col md:flex-row
                        md:items-center
                        md:justify-between
                        gap-5">

                <div>

                    <p class="text-[#F7D928]
                              text-sm
                              font-semibold
                              uppercase
                              tracking-wider">

                        Urban Roads SACCO CMS

                    </p>

                    <h1 class="mt-1
                               text-3xl
                               font-bold
                               text-white">

                        Admin Dashboard

                    </h1>

                    <p class="mt-2 text-gray-300">

                        Manage your SACCO website content.

                    </p>

                </div>


                {{-- LOGOUT --}}
                <form method="POST" action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="inline-flex
                               items-center
                               bg-[#D5595F]
                               hover:bg-[#B83F46]
                               text-white
                               font-semibold
                               px-5 py-2.5
                               transition">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </section>


    {{-- DASHBOARD --}}
    <section class="py-10">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">


            {{-- WELCOME --}}
            <div class="bg-white
                        border border-gray-200
                        p-6 mb-8">

                <p class="text-sm text-gray-500">
                    Welcome,
                </p>

                <h2 class="mt-1
                           text-2xl
                           font-bold
                           text-[#252525]">

                    {{ auth('admin')->user()->name }}

                </h2>

                <p class="mt-1 text-gray-600">

                    You are logged in as an Urban Roads SACCO
                    administrator.

                </p>

            </div>


            {{-- STAT CARDS --}}
            <div class="grid
                        sm:grid-cols-2
                        lg:grid-cols-4
                        gap-6
                        mb-10">


                {{-- NEWS --}}
                <div class="bg-white
                            border border-gray-200
                            p-6">

                    <div class="flex items-center
                                justify-between">

                        <div>

                            <p class="text-sm
                                      text-gray-500">

                                News

                            </p>

                            <p class="mt-2
                                      text-3xl
                                      font-bold
                                      text-[#252525]">

                                0

                            </p>

                        </div>

                        <div class="w-11 h-11
                                    bg-[#EAF5ED]
                                    text-[#2F7D47]
                                    flex items-center
                                    justify-center">

                            📰

                        </div>

                    </div>

                </div>


                {{-- DOCUMENTS --}}
                <div class="bg-white
                            border border-gray-200
                            p-6">

                    <div class="flex items-center
                                justify-between">

                        <div>

                            <p class="text-sm
                                      text-gray-500">

                                Documents

                            </p>

                            <p class="mt-2
                                      text-3xl
                                      font-bold
                                      text-[#252525]">

                                11

                            </p>

                        </div>

                        <div class="w-11 h-11
                                    bg-[#FBECEE]
                                    text-[#B83F46]
                                    flex items-center
                                    justify-center">

                            📄

                        </div>

                    </div>

                </div>


                {{-- LOANS --}}
                <div class="bg-white
                            border border-gray-200
                            p-6">

                    <div class="flex items-center
                                justify-between">

                        <div>

                            <p class="text-sm
                                      text-gray-500">

                                Loan Products

                            </p>

                            <p class="mt-2
                                      text-3xl
                                      font-bold
                                      text-[#252525]">

                                7

                            </p>

                        </div>

                        <div class="w-11 h-11
                                    bg-[#FFFBEA]
                                    text-[#D8B900]
                                    flex items-center
                                    justify-center">

                            💰

                        </div>

                    </div>

                </div>


                {{-- ADMINS --}}
                <div class="bg-white
                            border border-gray-200
                            p-6">

                    <div class="flex items-center
                                justify-between">

                        <div>

                            <p class="text-sm
                                      text-gray-500">

                                Administrators

                            </p>

                            <p class="mt-2
                                      text-3xl
                                      font-bold
                                      text-[#252525]">

                                1

                            </p>

                        </div>

                        <div class="w-11 h-11
                                    bg-[#EAF5ED]
                                    text-[#2F7D47]
                                    flex items-center
                                    justify-center">

                            👤

                        </div>

                    </div>

                </div>

            </div>


            {{-- MANAGEMENT --}}
            <div>

                <div class="mb-6">

                    <p class="text-[#479F61]
                              font-semibold
                              text-sm
                              uppercase
                              tracking-wide">

                        Content Management

                    </p>

                    <h2 class="mt-1
                               text-2xl
                               font-bold
                               text-[#252525]">

                        Manage Website

                    </h2>

                </div>


                <div class="grid
                            md:grid-cols-2
                            lg:grid-cols-3
                            gap-6">


                    {{-- NEWS --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#EAF5ED]
                                    text-[#2F7D47]
                                    flex items-center
                                    justify-center">

                            📰

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Manage News

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Add, edit and publish SACCO
                            news and announcements.

                        </p>

                    </a>


                    {{-- DOCUMENTS --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#FBECEE]
                                    text-[#B83F46]
                                    flex items-center
                                    justify-center">

                            📄

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Manage Documents

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Upload, update and organize
                            SACCO documents.

                        </p>

                    </a>


                    {{-- LOAN PRODUCTS --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#FFFBEA]
                                    text-[#D8B900]
                                    flex items-center
                                    justify-center">

                            💰

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Loan Products

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Manage loan products, rates,
                            limits and repayment periods.

                        </p>

                    </a>


                    {{-- SERVICES --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#EAF5ED]
                                    text-[#2F7D47]
                                    flex items-center
                                    justify-center">

                            ⚙️

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Services

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Manage SACCO services displayed
                            on the public website.

                        </p>

                    </a>


                    {{-- MEMBERSHIP --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#FBECEE]
                                    text-[#B83F46]
                                    flex items-center
                                    justify-center">

                            👥

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Membership

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Manage membership information
                            and eligibility content.

                        </p>

                    </a>


                    {{-- ADMINISTRATORS --}}
                    <a href="#"
                       class="group
                              bg-white
                              border border-gray-200
                              p-6
                              hover:shadow-lg
                              transition">

                        <div class="w-11 h-11
                                    bg-[#FFFBEA]
                                    text-[#D8B900]
                                    flex items-center
                                    justify-center">

                            🔐

                        </div>

                        <h3 class="mt-5
                                   text-lg
                                   font-bold
                                   text-[#252525]
                                   group-hover:text-[#479F61]">

                            Administrators

                        </h3>

                        <p class="mt-2
                                  text-sm
                                  text-gray-600">

                            Manage CMS administrator accounts
                            and access.

                        </p>

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection
