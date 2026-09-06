@extends('layouts.app')

@section('title', 'Contact Us | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}

<section class="bg-[#2F7D47]">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
        Get In Touch
    </p>

    <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
        Contact Us
    </h1>

    <div class="w-14 h-1 bg-[#F7D928] mt-5"></div>

    <p class="mt-6 max-w-2xl text-lg text-[#EAF5ED] leading-relaxed">
        We are here to assist you with enquiries about membership,
        savings, loans and other Urban Roads SACCO services.
    </p>

</div>

</section>

{{-- CONTACT CONTENT --}}

<section class="py-16 bg-[#F7F8F7]">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid lg:grid-cols-5 gap-10">


        {{-- CONTACT INFORMATION --}}
        <div class="lg:col-span-2">

            <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                Contact Information
            </p>

            <h2 class="mt-2 text-3xl font-bold text-[#2F7D47]">
                We're here to help
            </h2>

            <div class="w-12 h-1 bg-[#F7D928] mt-4"></div>

            <p class="mt-5 text-gray-600 leading-relaxed">
                Get in touch with Urban Roads SACCO for assistance,
                enquiries or information about our services.
            </p>


            <div class="mt-8 space-y-5">


                {{-- EMAIL --}}
                <div class="bg-white border border-gray-200 p-5 hover:border-[#479F61] hover:shadow-sm transition">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 shrink-0 bg-[#EAF5ED] text-[#2F7D47] flex items-center justify-center">

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>

                            </svg>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Email
                            </p>

                            <a href="mailto:sacco@kura.go.ke"
                               class="mt-1 inline-block font-semibold text-[#2F7D47] hover:text-[#479F61] break-all">

                                sacco@kura.go.ke

                            </a>

                        </div>

                    </div>

                </div>


                {{-- PHONE --}}
                <div class="bg-white border border-gray-200 p-5 hover:border-[#479F61] hover:shadow-sm transition">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 shrink-0 bg-[#EAF5ED] text-[#2F7D47] flex items-center justify-center">

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.5 4.49a1 1 0 01-.5 1.21l-2.12 1.06a11.05 11.05 0 005.46 5.46l1.06-2.12a1 1 0 011.21-.5l4.49 1.5a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C10.72 21 3 13.28 3 5z"/>

                            </svg>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Customer Care
                            </p>

                            <a href="tel:0793524349"
                               class="mt-1 inline-block font-semibold text-[#2F7D47] hover:text-[#479F61]">

                                0793 524 349

                            </a>

                        </div>

                    </div>

                </div>


                {{-- WORKING HOURS --}}
                <div class="bg-white border border-gray-200 p-5 hover:border-[#F7D928] hover:shadow-sm transition">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 shrink-0 bg-[#F7F8F7] text-[#D8B900] flex items-center justify-center">

                            <svg class="w-5 h-5"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                            </svg>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Working Hours
                            </p>

                            <p class="mt-1 font-semibold text-[#2F7D47]">
                                Monday - Friday
                            </p>

                            <p class="text-sm text-gray-600">
                                9:00 AM - 5:00 PM
                            </p>

                        </div>

                    </div>

                </div>


            </div>

        </div>


        {{-- CONTACT FORM --}}
        <div class="lg:col-span-3">

            <div class="bg-white border border-gray-200 p-7 md:p-9 shadow-sm">


                <div class="mb-7">

                    <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
                        Send Us A Message
                    </p>

                    <h2 class="mt-2 text-2xl md:text-3xl font-bold text-[#2F7D47]">
                        How can we help?
                    </h2>

                    <p class="mt-3 text-gray-600">
                        Fill in the form below and our team will get back to you.
                    </p>

                </div>


                {{-- SUCCESS MESSAGE --}}
                @if(session('success'))

                    <div class="mb-6 border border-[#479F61] bg-[#EAF5ED] px-4 py-4 text-sm text-[#2F7D47]">

                        {{ session('success') }}

                    </div>

                @endif


                {{-- VALIDATION ERRORS --}}
                @if($errors->any())

                    <div class="mb-6 border border-red-200 bg-red-50 px-4 py-4 text-sm text-red-700">

                        <p class="font-semibold mb-2">
                            Please correct the following:
                        </p>

                        <ul class="list-disc list-inside space-y-1">

                            @foreach($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- FORM --}}
                <form action="{{ route('contact') }}"
                      method="POST"
                      class="space-y-6">

                    @csrf


                    {{-- NAME + EMAIL --}}
                    <div class="grid md:grid-cols-2 gap-6">


                        {{-- NAME --}}
                        <div>

                            <label for="name"
                                   class="block text-sm font-semibold text-gray-700 mb-2">

                                Full Name

                            </label>

                            <input type="text"
                                   id="name"
                                   name="name"
                                   value="{{ old('name') }}"
                                   required
                                   autocomplete="name"
                                   class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800 focus:border-[#479F61] focus:ring-1 focus:ring-[#479F61]"
                                   placeholder="Your full name">

                        </div>


                        {{-- EMAIL --}}
                        <div>

                            <label for="email"
                                   class="block text-sm font-semibold text-gray-700 mb-2">

                                Email Address

                            </label>

                            <input type="email"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email"
                                   class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800 focus:border-[#479F61] focus:ring-1 focus:ring-[#479F61]"
                                   placeholder="you@example.com">

                        </div>

                    </div>


                    {{-- PHONE --}}
                    <div>

                        <label for="phone"
                               class="block text-sm font-semibold text-gray-700 mb-2">

                            Phone Number

                        </label>

                        <input type="tel"
                               id="phone"
                               name="phone"
                               value="{{ old('phone') }}"
                               autocomplete="tel"
                               class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800 focus:border-[#479F61] focus:ring-1 focus:ring-[#479F61]"
                               placeholder="07XX XXX XXX">

                    </div>


                    {{-- SUBJECT --}}
                    <div>

                        <label for="subject"
                               class="block text-sm font-semibold text-gray-700 mb-2">

                            Subject

                        </label>

                        <input type="text"
                               id="subject"
                               name="subject"
                               value="{{ old('subject') }}"
                               required
                               class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800 focus:border-[#479F61] focus:ring-1 focus:ring-[#479F61]"
                               placeholder="How can we assist you?">

                    </div>


                    {{-- MESSAGE --}}
                    <div>

                        <label for="message"
                               class="block text-sm font-semibold text-gray-700 mb-2">

                            Message

                        </label>

                        <textarea id="message"
                                  name="message"
                                  rows="6"
                                  required
                                  class="w-full border border-gray-300 px-4 py-3 text-sm text-gray-800 resize-none focus:border-[#479F61] focus:ring-1 focus:ring-[#479F61]"
                                  placeholder="Write your message here...">{{ old('message') }}</textarea>

                    </div>


                    {{-- SUBMIT --}}
                    <div class="pt-2">

                        <button type="submit"
                                class="inline-flex items-center justify-center gap-2 bg-[#479F61] text-white px-7 py-3 font-semibold rounded-sm hover:bg-[#2F7D47] hover:shadow-md transition duration-200">

                            Send Message

                            <svg class="w-4 h-4"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>

                            </svg>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


</section>

{{-- QUICK LINKS --}}

<section class="bg-white border-t border-gray-200">


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

    <div class="text-center max-w-2xl mx-auto">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#479F61]">
            Explore Urban Roads SACCO
        </p>

        <h2 class="mt-2 text-2xl md:text-3xl font-bold text-[#2F7D47]">
            Find the information you need
        </h2>

        <div class="w-12 h-1 bg-[#F7D928] mx-auto mt-4"></div>

    </div>


    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-9">


        {{-- ABOUT --}}
        <a href="{{ route('about') }}"
           class="border border-gray-200 p-6 text-center hover:border-[#479F61] hover:shadow-md transition group">

            <h3 class="font-bold text-[#2F7D47] group-hover:text-[#479F61]">
                About Us
            </h3>

            <p class="mt-2 text-sm text-gray-600">
                Learn more about Urban Roads SACCO.
            </p>

        </a>


        {{-- SERVICES --}}
        <a href="{{ route('services') }}"
           class="border border-gray-200 p-6 text-center hover:border-[#479F61] hover:shadow-md transition group">

            <h3 class="font-bold text-[#2F7D47] group-hover:text-[#479F61]">
                Our Services
            </h3>

            <p class="mt-2 text-sm text-gray-600">
                Explore our member-focused services.
            </p>

        </a>


        {{-- LOANS --}}
        <a href="{{ route('loans') }}"
           class="border border-gray-200 p-6 text-center hover:border-[#479F61] hover:shadow-md transition group">

            <h3 class="font-bold text-[#2F7D47] group-hover:text-[#479F61]">
                Loan Products
            </h3>

            <p class="mt-2 text-sm text-gray-600">
                View available loan products.
            </p>

        </a>


        {{-- MEMBERSHIP --}}
        <a href="{{ route('membership') }}"
           class="border border-gray-200 p-6 text-center hover:border-[#F7D928] hover:shadow-md transition group">

            <h3 class="font-bold text-[#2F7D47] group-hover:text-[#479F61]">
                Membership
            </h3>

            <p class="mt-2 text-sm text-gray-600">
                Find out how to become a member.
            </p>

        </a>

    </div>

</div>


</section>

{{-- WHITE SEPARATOR BEFORE FOOTER --}}

<div class="h-2 bg-white"></div>

@endsection
