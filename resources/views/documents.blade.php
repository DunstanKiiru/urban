@extends('layouts.app')

@section('title', 'Documents | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#479F61]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="max-w-3xl">

            <p class="text-[#F7D928] font-semibold uppercase tracking-wider text-sm">
                Member Resources
            </p>

            <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
                Documents
            </h1>

            <p class="mt-5 text-lg text-white/90 leading-relaxed">
                Download forms and documents relating to Urban Roads SACCO
                membership, savings, loans and other member services.
            </p>

        </div>

    </div>
</section>


{{-- DOCUMENTS SECTION --}}
<section class="bg-white py-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- SECTION INTRO --}}
        <div class="max-w-3xl mb-10">

            <p class="text-[#479F61]
                      font-semibold
                      uppercase
                      tracking-wide
                      text-sm">
                Downloads
            </p>

            <h2 class="mt-2 text-3xl font-bold text-[#252525]">
                SACCO Forms & Documents
            </h2>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Select a document below to download the relevant form.
                Please ensure that you use the most recent version of
                each form when submitting your application.
            </p>

        </div>


        {{-- DOCUMENT TABLE --}}
        <div class="border border-gray-200
                    overflow-hidden
                    bg-white
                    shadow-sm">

            {{-- TABLE HEADER --}}
            <div class="hidden md:grid
                        grid-cols-[1fr_180px]
                        bg-[#3F4145]
                        text-white
                        font-semibold
                        text-sm">

                <div class="px-6 py-4">
                    File Name
                </div>

                <div class="px-6 py-4 text-center">
                    Download
                </div>

            </div>


            {{-- DOCUMENT 1 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6
                        py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]
                        transition">

                <div class="flex items-start gap-4">

                    <div class="shrink-0
                                w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <svg class="w-5 h-5"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M7 3h8l4 4v14H7a2 2 0 01-2-2V5a2 2 0 012-2z"/>

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M15 3v5h5"/>

                        </svg>

                    </div>

                    <div class="min-w-0">
                        <p class="font-semibold text-[#252525] break-words">
                            Authority to make deductions.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Authority%20to%20make%20deductions.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center justify-center
                              gap-2
                              bg-[#479F61]
                              text-white
                              px-5 py-2.5
                              text-sm
                              font-semibold
                              hover:bg-[#2F7D47]
                              transition">

                        <span>Download</span>

                        <svg class="w-4 h-4"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-4l-4 4m0 0l-4-4m4 4V4"/>

                        </svg>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 2 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6
                        py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]
                        transition">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Benevolent Fund form.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Benevolent%20Fund%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61]
                              text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download

                        <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 3 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Leave form sacco.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Leave%20form%20sacco.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 4 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Loan Form ammended.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Loan Application Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Loan%20Form%20ammended.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 5 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Loan Form ammended_1.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Loan Application Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Loan%20Form%20ammended_1.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 6 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Membership form.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Membership Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Membership%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 7 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Membership withdrawal form.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Membership Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Membership%20withdrawal%20form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 8 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            NEW LOAN APPLICATION FORM 2025.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            Loan Application Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/NEW%20LOAN%20APPLICATION%20FORM%202025.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 9 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Nominee Form.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Nominee%20Form.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 10 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        border-b border-gray-200
                        items-center
                        hover:bg-[#EAF5ED]">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-[#FBECEE]
                                text-[#B83F46]
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Share variation.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <a href="https://urbanroadssacco.co.ke/resaccoforms/Share%20variation.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2
                              bg-[#479F61] text-white
                              px-5 py-2.5
                              text-sm font-semibold
                              hover:bg-[#2F7D47]">

                        Download <span>↓</span>

                    </a>

                </div>

            </div>


            {{-- DOCUMENT 11 --}}
            <div class="grid md:grid-cols-[1fr_180px]
                        gap-3 md:gap-0
                        px-5 md:px-6 py-5
                        items-center
                        hover:bg-[#EAF5ED]
                        transition">

                <div class="flex items-start gap-4">

                    <div class="shrink-0 w-10 h-10
                                bg-gray-100
                                text-gray-500
                                flex items-center justify-center">

                        <span class="text-xs font-bold">PDF</span>

                    </div>

                    <div>
                        <p class="font-semibold text-[#252525] break-words">
                            Transfer of Savings.pdf
                        </p>
                        <p class="text-xs text-gray-500 mt-1">
                            SACCO Form
                        </p>
                    </div>

                </div>

                <div class="md:text-center">

                    <span class="inline-flex items-center justify-center
                                 bg-gray-100
                                 text-gray-500
                                 px-5 py-2.5
                                 text-sm
                                 font-semibold">
                        Not Available
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto
                px-4 sm:px-6 lg:px-8
                py-14">

        <div class="flex flex-col
                    md:flex-row
                    md:items-center
                    md:justify-between
                    gap-6">

            <div>

                <p class="text-[#F7D928]
                          font-semibold
                          uppercase
                          tracking-wide
                          text-sm">
                    Need Assistance?
                </p>

                <h2 class="mt-2 text-2xl
                           md:text-3xl
                           font-bold
                           text-white">
                    Need help with a SACCO form?
                </h2>

                <p class="mt-3 text-gray-300">
                    Contact the Urban Roads SACCO team for assistance.
                </p>

            </div>

            <a href="{{ route('contact') }}"
               class="inline-flex items-center
                      justify-center
                      bg-[#479F61]
                      text-white
                      px-7 py-3
                      font-semibold
                      hover:bg-[#2F7D47]
                      transition">

                Contact Us

                <span class="ml-2">→</span>

            </a>

        </div>

    </div>

</section>

@endsection
