@extends('layouts.app')

@section('title', 'Contact Us | Urban Roads SACCO')

@section('content')

{{-- =========================================================
     PAGE HEADER
========================================================= --}}
<section class="bg-[#003f7d]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="max-w-3xl">

            <p class="text-sm font-semibold uppercase
                      tracking-wider text-[#f4b400]">
                Get In Touch
            </p>

            <h1 class="mt-3 text-4xl md:text-5xl
                       font-bold text-white">
                Contact Us
            </h1>

            <p class="mt-5 text-lg text-blue-100
                      leading-relaxed">
                Have a question, need assistance or want to learn more
                about Urban Roads SACCO? Our team is ready to help.
            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT INFORMATION + FORM
========================================================= --}}
<section class="py-16 bg-[#f5f7fa]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-3 gap-8">


            {{-- =================================================
                 CONTACT INFORMATION
            ================================================== --}}
            <div class="lg:col-span-1">

                <div class="bg-white border border-gray-200 p-7">

                    <p class="text-sm font-semibold uppercase
                              tracking-wider text-[#168a45]">
                        Contact Information
                    </p>

                    <h2 class="mt-3 text-2xl font-bold
                               text-[#003f7d]">
                        We're Here to Help
                    </h2>

                    <div class="w-12 h-1 bg-[#f4b400] mt-4"></div>


                    {{-- EMAIL --}}
                    <div class="mt-8">

                        <div class="w-11 h-11 bg-[#eaf3fb]
                                    text-[#0056a6]
                                    flex items-center justify-center
                                    font-bold">
                            @
                        </div>

                        <p class="mt-4 text-xs font-semibold
                                  uppercase tracking-wide
                                  text-gray-500">
                            Email
                        </p>

                        <a href="mailto:sacco@kura.go.ke"
                           class="mt-1 block text-[#0056a6]
                                  font-medium hover:underline">
                            sacco@kura.go.ke
                        </a>

                    </div>


                    {{-- PHONE --}}
                    <div class="mt-7">

                        <div class="w-11 h-11 bg-green-50
                                    text-[#168a45]
                                    flex items-center justify-center
                                    font-bold">
                            ☎
                        </div>

                        <p class="mt-4 text-xs font-semibold
                                  uppercase tracking-wide
                                  text-gray-500">
                            Customer Care
                        </p>

                        <a href="tel:0793524349"
                           class="mt-1 block text-[#0056a6]
                                  font-medium hover:underline">
                            0793 524 349
                        </a>

                    </div>


                    {{-- WORKING HOURS --}}
                    <div class="mt-7">

                        <div class="w-11 h-11 bg-yellow-50
                                    text-[#c58d00]
                                    flex items-center justify-center
                                    font-bold">
                            ⏰
                        </div>

                        <p class="mt-4 text-xs font-semibold
                                  uppercase tracking-wide
                                  text-gray-500">
                            Working Hours
                        </p>

                        <p class="mt-1 text-gray-700 font-medium">
                            Monday - Friday
                        </p>

                        <p class="text-gray-500 text-sm">
                            9:00 AM - 5:00 PM
                        </p>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 CONTACT FORM
            ================================================== --}}
            <div class="lg:col-span-2">

                <div class="bg-white border border-gray-200 p-7 md:p-9">

                    <p class="text-sm font-semibold uppercase
                              tracking-wider text-[#168a45]">
                        Send Us a Message
                    </p>

                    <h2 class="mt-3 text-2xl font-bold
                               text-[#003f7d]">
                        How Can We Assist You?
                    </h2>

                    <div class="w-12 h-1 bg-[#f4b400] mt-4"></div>


                    {{-- FORM --}}
                    <form action="#" method="POST"
                          class="mt-8">

                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">

                            {{-- NAME --}}
                            <div>

                                <label for="name"
                                       class="block text-sm
                                              font-semibold
                                              text-gray-700">
                                    Full Name
                                </label>

                                <input type="text"
                                       id="name"
                                       name="name"
                                       placeholder="Enter your full name"
                                       class="mt-2 w-full border
                                              border-gray-300
                                              px-4 py-3
                                              focus:outline-none
                                              focus:border-[#0056a6]
                                              focus:ring-1
                                              focus:ring-[#0056a6]">

                            </div>


                            {{-- EMAIL --}}
                            <div>

                                <label for="email"
                                       class="block text-sm
                                              font-semibold
                                              text-gray-700">
                                    Email Address
                                </label>

                                <input type="email"
                                       id="email"
                                       name="email"
                                       placeholder="Enter your email"
                                       class="mt-2 w-full border
                                              border-gray-300
                                              px-4 py-3
                                              focus:outline-none
                                              focus:border-[#0056a6]
                                              focus:ring-1
                                              focus:ring-[#0056a6]">

                            </div>


                            {{-- PHONE --}}
                            <div>

                                <label for="phone"
                                       class="block text-sm
                                              font-semibold
                                              text-gray-700">
                                    Phone Number
                                </label>

                                <input type="tel"
                                       id="phone"
                                       name="phone"
                                       placeholder="Enter your phone number"
                                       class="mt-2 w-full border
                                              border-gray-300
                                              px-4 py-3
                                              focus:outline-none
                                              focus:border-[#0056a6]
                                              focus:ring-1
                                              focus:ring-[#0056a6]">

                            </div>


                            {{-- SUBJECT --}}
                            <div>

                                <label for="subject"
                                       class="block text-sm
                                              font-semibold
                                              text-gray-700">
                                    Subject
                                </label>

                                <input type="text"
                                       id="subject"
                                       name="subject"
                                       placeholder="What can we help you with?"
                                       class="mt-2 w-full border
                                              border-gray-300
                                              px-4 py-3
                                              focus:outline-none
                                              focus:border-[#0056a6]
                                              focus:ring-1
                                              focus:ring-[#0056a6]">

                            </div>

                        </div>


                        {{-- MESSAGE --}}
                        <div class="mt-6">

                            <label for="message"
                                   class="block text-sm
                                          font-semibold
                                          text-gray-700">
                                Message
                            </label>

                            <textarea id="message"
                                      name="message"
                                      rows="6"
                                      placeholder="Write your message here..."
                                      class="mt-2 w-full border
                                             border-gray-300
                                             px-4 py-3
                                             focus:outline-none
                                             focus:border-[#0056a6]
                                             focus:ring-1
                                             focus:ring-[#0056a6]"></textarea>

                        </div>


                        {{-- SUBMIT --}}
                        <div class="mt-7">

                            <button type="submit"
                                    class="bg-[#0056a6]
                                           text-white
                                           px-7 py-3
                                           font-semibold
                                           rounded-sm
                                           hover:bg-[#003f7d]
                                           transition">

                                Send Message

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     MEMBERSHIP CTA
========================================================= --}}
<section class="bg-[#0056a6]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="py-12 flex flex-col md:flex-row
                    items-center justify-between gap-6">

            <div class="text-white text-center md:text-left">

                <p class="text-sm font-semibold uppercase
                          tracking-wider text-[#f4b400]">
                    Interested in Joining?
                </p>

                <h2 class="mt-2 text-2xl md:text-3xl font-bold">
                    Become a Member of Urban Roads SACCO
                </h2>

                <p class="text-blue-100 mt-2">
                    Find out if you are eligible and learn how to join.
                </p>

            </div>

            <a href="{{ route('membership') }}"
               class="bg-white text-[#0056a6]
                      px-7 py-3 font-semibold rounded-sm
                      hover:bg-gray-100 transition">

                Membership Information

            </a>

        </div>

    </div>

</section>

@endsection
