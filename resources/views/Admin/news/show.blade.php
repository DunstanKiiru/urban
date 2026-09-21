@extends('layouts.admin')

@section('title', 'View News | Urban Roads SACCO')

@section('content')

<div class="min-h-screen bg-[#F7F8F7]">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
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
                        Content Management
                    </p>

                    <h1 class="mt-1 text-3xl font-bold text-white">
                        View News
                    </h1>

                    <p class="mt-2 text-gray-300">
                        Preview this news article from the CMS.
                    </p>

                </div>


                {{-- ACTIONS --}}
                <div class="flex flex-wrap gap-3">

                    <a
                        href="{{ route('admin.news.edit', $news) }}"
                        class="inline-flex
                               items-center
                               px-5 py-3
                               bg-[#479F61]
                               hover:bg-[#2F7D47]
                               text-white
                               font-semibold
                               rounded-lg
                               transition"
                    >
                        Edit Article
                    </a>


                    <a
                        href="{{ route('admin.news.index') }}"
                        class="inline-flex
                               items-center
                               px-5 py-3
                               border border-gray-400
                               text-white
                               font-semibold
                               rounded-lg
                               hover:bg-white
                               hover:text-[#3F4145]
                               transition"
                    >
                        ← Back to News
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
         ARTICLE
    ========================================================== --}}
    <section class="py-10">

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <article
                class="bg-white
                       border border-gray-200
                       rounded-xl
                       shadow-sm
                       overflow-hidden"
            >


                {{-- =================================================
                     IMAGE
                ================================================== --}}
                @if ($news->image)

                    <div class="bg-gray-100">

                        <img
                            src="{{ asset('storage/' . $news->image) }}"
                            alt="{{ $news->title }}"
                            class="w-full
                                   max-h-[500px]
                                   object-cover"
                        >

                    </div>

                @endif



                {{-- =================================================
                     ARTICLE CONTENT
                ================================================== --}}
                <div class="p-7 sm:p-10">


                    {{-- STATUS --}}
                    <div class="flex flex-wrap items-center gap-3 mb-5">

                        @if ($news->is_published)

                            <span
                                class="inline-flex
                                       items-center
                                       px-3 py-1
                                       rounded-full
                                       text-xs
                                       font-semibold
                                       bg-[#EAF5ED]
                                       text-[#2F7D47]"
                            >
                                Published
                            </span>

                        @else

                            <span
                                class="inline-flex
                                       items-center
                                       px-3 py-1
                                       rounded-full
                                       text-xs
                                       font-semibold
                                       bg-gray-100
                                       text-gray-600"
                            >
                                Draft
                            </span>

                        @endif


                        @if ($news->published_at)

                            <span
                                class="text-sm
                                       text-gray-500"
                            >
                                {{ $news->published_at->format('d F Y, h:i A') }}
                            </span>

                        @endif

                    </div>



                    {{-- TITLE --}}
                    <h2
                        class="text-3xl
                               sm:text-4xl
                               font-bold
                               text-[#252525]
                               leading-tight"
                    >
                        {{ $news->title }}
                    </h2>



                    {{-- SLUG --}}
                    <p
                        class="mt-3
                               text-sm
                               text-gray-400"
                    >
                        /news/{{ $news->slug }}
                    </p>



                    {{-- EXCERPT --}}
                    @if ($news->excerpt)

                        <div
                            class="mt-8
                                   border-l-4
                                   border-[#479F61]
                                   bg-[#EAF5ED]
                                   px-5 py-4"
                        >

                            <p
                                class="text-lg
                                       font-medium
                                       text-[#3F4145]
                                       leading-relaxed"
                            >
                                {{ $news->excerpt }}
                            </p>

                        </div>

                    @endif



                    {{-- CONTENT --}}
                    <div
                        class="mt-8
                               text-gray-700
                               leading-8
                               text-base
                               whitespace-pre-line"
                    >
                        {{ $news->content }}
                    </div>



                    {{-- =================================================
                         ARTICLE INFORMATION
                    ================================================== --}}
                    <div
                        class="mt-10
                               pt-7
                               border-t border-gray-200"
                    >

                        <h3
                            class="text-sm
                                   font-bold
                                   uppercase
                                   tracking-wider
                                   text-[#3F4145]"
                        >
                            Article Information
                        </h3>


                        <div
                            class="mt-5
                                   grid
                                   grid-cols-1
                                   sm:grid-cols-2
                                   gap-5"
                        >

                            {{-- CREATED --}}
                            <div
                                class="bg-[#F7F8F7]
                                       rounded-lg
                                       p-4"
                            >

                                <p
                                    class="text-xs
                                           font-semibold
                                           uppercase
                                           tracking-wider
                                           text-gray-400"
                                >
                                    Created
                                </p>

                                <p
                                    class="mt-1
                                           text-sm
                                           font-medium
                                           text-[#3F4145]"
                                >
                                    {{ $news->created_at->format('d F Y, h:i A') }}
                                </p>

                            </div>


                            {{-- UPDATED --}}
                            <div
                                class="bg-[#F7F8F7]
                                       rounded-lg
                                       p-4"
                            >

                                <p
                                    class="text-xs
                                           font-semibold
                                           uppercase
                                           tracking-wider
                                           text-gray-400"
                                >
                                    Last Updated
                                </p>

                                <p
                                    class="mt-1
                                           text-sm
                                           font-medium
                                           text-[#3F4145]"
                                >
                                    {{ $news->updated_at->format('d F Y, h:i A') }}
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- =================================================
                         ACTIONS
                    ================================================== --}}
                    <div
                        class="mt-8
                               pt-7
                               border-t border-gray-200
                               flex flex-wrap
                               items-center
                               gap-3"
                    >

                        <a
                            href="{{ route('admin.news.edit', $news) }}"
                            class="inline-flex
                                   items-center
                                   px-6 py-3
                                   bg-[#479F61]
                                   text-white
                                   font-semibold
                                   rounded-lg
                                   hover:bg-[#2F7D47]
                                   transition"
                        >
                            Edit Article
                        </a>


                        @if ($news->is_published)

                            <a
                                href="{{ route('news.show', $news) }}"
                                target="_blank"
                                class="inline-flex
                                       items-center
                                       px-6 py-3
                                       border border-[#479F61]
                                       text-[#2F7D47]
                                       font-semibold
                                       rounded-lg
                                       hover:bg-[#EAF5ED]
                                       transition"
                            >
                                View Public Article ↗
                            </a>

                        @endif


                        <a
                            href="{{ route('admin.news.index') }}"
                            class="inline-flex
                                   items-center
                                   px-6 py-3
                                   border border-gray-300
                                   text-[#3F4145]
                                   font-semibold
                                   rounded-lg
                                   hover:bg-gray-50
                                   transition"
                        >
                            Back to News
                        </a>

                    </div>

                </div>

            </article>

        </div>

    </section>

</div>

@endsection
