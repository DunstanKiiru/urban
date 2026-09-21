@extends('layouts.app')

@section('title', 'News & Announcements | Urban Roads SACCO')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-[#3F4145]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <p class="text-sm font-semibold uppercase tracking-wider text-[#F7D928]">
            Stay Informed
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold text-white">
            News & Announcements
        </h1>

        <p class="mt-5 max-w-3xl text-lg text-gray-200 leading-relaxed">
            Keep up with the latest activities, events and important
            member information from Urban Roads SACCO.
        </p>

    </div>

</section>


{{-- NEWS --}}
<section class="py-16 bg-[#F7F8F7]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if ($news->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

                @foreach ($news as $article)

                    <article
                        class="bg-white border border-gray-200 hover:border-[#479F61] hover:shadow-md transition overflow-hidden">

                        {{-- FEATURED IMAGE --}}
                        @if ($article->image)

                            <div class="h-52 overflow-hidden bg-gray-100">

                                <img
                                    src="{{ asset('storage/' . $article->image) }}"
                                    alt="{{ $article->title }}"
                                    class="w-full h-full object-cover"
                                >

                            </div>

                        @else

                            <div class="h-2 bg-[#479F61]"></div>

                        @endif


                        <div class="p-7">

                            <p class="text-xs font-semibold uppercase text-[#479F61]">
                                SACCO News
                            </p>

                            {{-- DATE --}}
                            @if ($article->published_at)

                                <p class="mt-2 text-sm text-gray-500">
                                    {{ $article->published_at->format('d F Y') }}
                                </p>

                            @endif


                            {{-- TITLE --}}
                            <h2 class="mt-4 text-xl font-bold text-[#3F4145]">
                                {{ $article->title }}
                            </h2>


                            {{-- EXCERPT --}}
                            <p class="mt-4 text-gray-600 leading-relaxed">

                                {{ $article->excerpt ?: \Illuminate\Support\Str::limit($article->content, 150) }}

                            </p>


                            {{-- READ MORE --}}
                            <a
                                href="{{ route('news.show', $article->slug) }}"
                                class="inline-flex items-center mt-6 text-[#2F7D47] font-semibold hover:text-[#D5595F] transition">

                                Read More

                                <span class="ml-2">
                                    →
                                </span>

                            </a>

                        </div>

                    </article>

                @endforeach

            </div>


            {{-- PAGINATION --}}
            @if ($news->hasPages())

                <div class="mt-12">
                    {{ $news->links() }}
                </div>

            @endif

        @else

            {{-- EMPTY STATE --}}
            <div class="bg-white border border-gray-200 p-10 text-center">

                <div class="text-4xl mb-4">
                    📰
                </div>

                <h2 class="text-2xl font-bold text-[#3F4145]">
                    No News Available
                </h2>

                <p class="mt-3 text-gray-600">
                    There are currently no published news articles or announcements.
                    Please check back later.
                </p>

            </div>

        @endif

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
                   hover:bg-[#F7D928] hover:text-[#252525] transition">

            Contact Us

        </a>

    </div>

</section>

@endsection
