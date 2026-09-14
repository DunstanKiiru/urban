@extends('layouts.app')

@section('title', 'Administrator Login | Urban Roads SACCO')

@section('content')

<section class="min-h-screen bg-[#F7F8F7] flex items-center justify-center px-4 py-12">

    <div class="w-full max-w-md">

        {{-- LOGO & HEADER --}}
        <div class="text-center mb-8">

            <a href="{{ route('home') }}" class="inline-flex justify-center">

                <img
                    src="{{ asset('images/urban-roads-logo.png') }}"
                    alt="Urban Roads SACCO"
                    class="w-24 h-24 object-contain"
                >

            </a>

            <h1 class="mt-5 text-3xl font-bold text-[#252525]">
                Administrator Login
            </h1>

            <p class="mt-2 text-gray-600">
                Urban Roads SACCO Content Management System
            </p>

        </div>


        {{-- LOGIN CARD --}}
        <div class="bg-white border border-gray-200 shadow-sm p-7 sm:p-8">

            {{-- ERROR MESSAGE --}}
            @if ($errors->any())

                <div class="mb-6
                            bg-[#FBECEE]
                            border border-[#D5595F]
                            text-[#B83F46]
                            px-4 py-3 text-sm">

                    <ul class="list-disc list-inside space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- STATUS MESSAGE --}}
            @if (session('status'))

                <div class="mb-6
                            bg-[#EAF5ED]
                            border border-[#479F61]
                            text-[#2F7D47]
                            px-4 py-3 text-sm">

                    {{ session('status') }}

                </div>

            @endif


            {{-- LOGIN FORM --}}
            <form method="POST" action="{{ route('admin.login') }}">

                @csrf


                {{-- EMAIL --}}
                <div>

                    <label
                        for="email"
                        class="block text-sm font-semibold text-[#252525] mb-2">

                        Administrator Email

                    </label>

                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Enter administrator email"

                        class="w-full
                               border border-gray-300
                               px-4 py-3
                               text-sm
                               text-[#252525]
                               placeholder-gray-400
                               focus:border-[#479F61]
                               focus:ring-2
                               focus:ring-[#479F61]/20
                               transition"
                    >

                </div>


                {{-- PASSWORD --}}
                <div class="mt-5">

                    <div class="flex items-center justify-between mb-2">

                        <label
                            for="password"
                            class="block text-sm font-semibold text-[#252525]">

                            Password

                        </label>


                        @if (Route::has('admin.password.request'))

                            <a
                                href="{{ route('admin.password.request') }}"
                                class="text-sm
                                       text-[#479F61]
                                       hover:text-[#2F7D47]
                                       font-medium">

                                Forgot password?

                            </a>

                        @endif

                    </div>


                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter administrator password"

                        class="w-full
                               border border-gray-300
                               px-4 py-3
                               text-sm
                               text-[#252525]
                               placeholder-gray-400
                               focus:border-[#479F61]
                               focus:ring-2
                               focus:ring-[#479F61]/20
                               transition"
                    >

                </div>


                {{-- REMEMBER ME --}}
                <div class="mt-5 flex items-center">

                    <input
                        id="remember"
                        name="remember"
                        type="checkbox"
                        value="1"

                        class="w-4 h-4
                               rounded
                               border-gray-300
                               text-[#479F61]
                               focus:ring-[#479F61]"
                    >

                    <label
                        for="remember"
                        class="ml-2 text-sm text-gray-600">

                        Remember me

                    </label>

                </div>


                {{-- LOGIN BUTTON --}}
                <button
                    type="submit"

                    class="mt-7
                           w-full
                           bg-[#479F61]
                           hover:bg-[#2F7D47]
                           text-white
                           font-semibold
                           py-3
                           px-4
                           transition
                           duration-200">

                    Sign In to CMS

                </button>

            </form>

        </div>


        {{-- SECURITY NOTICE --}}
        <div class="mt-6 text-center">

            <p class="text-xs text-gray-500">
                This area is restricted to authorized
                Urban Roads SACCO administrators.
            </p>

        </div>


        {{-- BACK TO WEBSITE --}}
        <div class="text-center mt-4">

            <a
                href="{{ route('home') }}"
                class="text-sm
                       text-gray-500
                       hover:text-[#479F61]">

                ← Back to Website

            </a>

        </div>

    </div>

</section>

@endsection
