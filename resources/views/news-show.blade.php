@extends('layouts.app')

@section('title', $news->title . ' | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            SACCO News
        </p>

        <h1 class="mt-3 text-3xl md:text-5xl font-bold text-white leading-tight">
            {{ $news->title }}
        </h1>

        @if ($news->published_at)
            <p class="mt-5 text-gray-300">
                Published on
                {{ $news->published_at->format('d F Y') }}
            </p>
        @endif

    </div>

</section>


{{-- ARTICLE --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <article class="bg-white border border-gray-200 shadow-sm">

            {{-- FEATURED IMAGE --}}
            @if ($news->image)

                <div class="w-full bg-gray-100">

                    <img
                        src="{{ asset('storage/' . $news->image) }}"
                        alt="{{ $news->title }}"
                        class="w-full max-h-[500px] object-cover"
                    >

                </div>

            @endif


            {{-- ARTICLE CONTENT --}}
            <div class="p-7 sm:p-10 lg:p-12">

                {{-- EXCERPT --}}
                @if ($news->excerpt)

                    <p class="text-lg font-medium text-[#3F4145] leading-relaxed border-l-4 border-[#479F61] pl-5 mb-8">
                        {{ $news->excerpt }}
                    </p>

                @endif


                {{-- CONTENT --}}
                <div class="text-gray-700 leading-8 text-base whitespace-pre-line">
                    {{ $news->content }}
                </div>


                {{-- BACK BUTTON --}}
                <div class="mt-10 pt-8 border-t border-gray-200">

                    <a
                        href="{{ route('news') }}"
                        class="inline-flex items-center px-6 py-3 bg-[#479F61] text-white font-semibold rounded-sm hover:bg-[#2F7D47] transition"
                    >
                        ← Back to News
                    </a>

                </div>

            </div>

        </article>

    </div>

</section>


{{-- CTA --}}
<section class="bg-[#479F61]">

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-14 text-center">

        <h2 class="text-3xl font-bold text-white">
            Need More Information?
        </h2>

        <p class="mt-3 text-green-50">
            Contact our team for clarification or additional information.
        </p>

        <a
            href="{{ route('contact') }}"
            class="inline-block mt-6 bg-white text-[#2F7D47]
                   px-7 py-3 font-semibold rounded-sm
                   hover:bg-[#F7D928] hover:text-[#252525] transition"
        >
            Contact Us
        </a>

    </div>

</section>

@endsection
