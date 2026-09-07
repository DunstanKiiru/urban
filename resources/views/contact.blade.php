@extends('layouts.app')

@section('title', 'Contact Us | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Get In Touch
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            Contact Us
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Have a question, need assistance or want to learn more
            about Urban Roads SACCO? Our team is ready to help.
        </p>

    </div>

</section>


{{-- CONTACT --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-3 gap-8">


            {{-- INFORMATION --}}
            <div>

                <div class="bg-white border border-gray-200 p-7">

                    <p class="text-sm font-semibold uppercase
                              tracking-wider text-[#479F61]">
                        Contact Information
                    </p>

                    <h2 class="mt-3 text-2xl font-bold text-[#3F4145]">
                        We're Here to Help
                    </h2>

                    <div class="w-12 h-1 bg-[#D5595F] mt-4"></div>


                    <div class="mt-8">

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-gray-500">
                            Email
                        </p>

                        <a href="mailto:sacco@kura.go.ke"
                           class="mt-1 block text-[#2F7D47]
                                  font-medium hover:text-[#D5595F]">
                            sacco@kura.go.ke
                        </a>

                    </div>


                    <div class="mt-7">

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-gray-500">
                            Customer Care
                        </p>

                        <a href="tel:0793524349"
                           class="mt-1 block text-[#2F7D47]
                                  font-medium hover:text-[#D5595F]">
                            0793 524 349
                        </a>

                    </div>


                    <div class="mt-7">

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-gray-500">
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


            {{-- FORM --}}
            <div class="lg:col-span-2">

                <div class="bg-white border border-gray-200 p-7 md:p-9">

                    <p class="text-sm font-semibold uppercase
                              tracking-wider text-[#479F61]">
                        Send Us a Message
                    </p>

                    <h2 class="mt-3 text-2xl font-bold text-[#3F4145]">
                        How Can We Assist You?
                    </h2>

                    <div class="w-12 h-1 bg-[#F7D928] mt-4"></div>


                    <form action="#" method="POST" class="mt-8">

                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <label for="name"
                                       class="block text-sm font-semibold text-gray-700">
                                    Full Name
                                </label>

                                <input type="text"
                                       id="name"
                                       name="name"
                                       placeholder="Enter your full name"
                                       class="mt-2 w-full border border-gray-300
                                              px-4 py-3
                                              focus:border-[#479F61]
                                              focus:ring-1
                                              focus:ring-[#479F61]">

                            </div>


                            <div>

                                <label for="email"
                                       class="block text-sm font-semibold text-gray-700">
                                    Email Address
                                </label>

                                <input type="email"
                                       id="email"
                                       name="email"
                                       placeholder="Enter your email"
                                       class="mt-2 w-full border border-gray-300
                                              px-4 py-3
                                              focus:border-[#479F61]
                                              focus:ring-1
                                              focus:ring-[#479F61]">

                            </div>


                            <div>

                                <label for="phone"
                                       class="block text-sm font-semibold text-gray-700">
                                    Phone Number
                                </label>

                                <input type="tel"
                                       id="phone"
                                       name="phone"
                                       placeholder="Enter your phone number"
                                       class="mt-2 w-full border border-gray-300
                                              px-4 py-3
                                              focus:border-[#479F61]
                                              focus:ring-1
                                              focus:ring-[#479F61]">

                            </div>


                            <div>

                                <label for="subject"
                                       class="block text-sm font-semibold text-gray-700">
                                    Subject
                                </label>

                                <input type="text"
                                       id="subject"
                                       name="subject"
                                       placeholder="What can we help you with?"
                                       class="mt-2 w-full border border-gray-300
                                              px-4 py-3
                                              focus:border-[#479F61]
                                              focus:ring-1
                                              focus:ring-[#479F61]">

                            </div>

                        </div>


                        <div class="mt-6">

                            <label for="message"
                                   class="block text-sm font-semibold text-gray-700">
                                Message
                            </label>

                            <textarea id="message"
                                      name="message"
                                      rows="6"
                                      placeholder="Write your message here..."
                                      class="mt-2 w-full border border-gray-300
                                             px-4 py-3
                                             focus:border-[#479F61]
                                             focus:ring-1
                                             focus:ring-[#479F61]"></textarea>

                        </div>


                        <div class="mt-7">

                            <button type="submit"
                                    class="bg-[#479F61]
                                           text-white
                                           px-7 py-3
                                           font-semibold
                                           rounded-sm
                                           hover:bg-[#2F7D47]
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


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12
                flex flex-col md:flex-row
                items-center justify-between gap-6">

        <div class="text-white text-center md:text-left">

            <h2 class="text-2xl md:text-3xl font-bold">
                Interested in Membership?
            </h2>

            <p class="text-green-50 mt-2">
                Learn more about eligibility and joining Urban Roads SACCO.
            </p>

        </div>

        <a href="{{ route('membership') }}"
           class="bg-white text-[#2F7D47]
                  px-7 py-3 font-semibold rounded-sm
                  hover:bg-[#F7D928]
                  hover:text-[#252525]
                  transition">
            Membership Information
        </a>

    </div>

</section>

@endsection
