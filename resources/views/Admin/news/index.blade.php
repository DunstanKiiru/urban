@extends('layouts.admin')

@section('title', 'Manage News | Urban Roads SACCO')

@section('content')

<div class="min-h-screen bg-[#F7F8F7]">

    {{-- HEADER --}}
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

                    <h1 class="mt-1
                               text-3xl
                               font-bold
                               text-white">

                        Manage News

                    </h1>

                    <p class="mt-2 text-gray-300">

                        Create and manage SACCO news and announcements.

                    </p>

                </div>


                {{-- ADD NEWS --}}
                <a
                    href="{{ route('admin.news.create') }}"
                    class="inline-flex
                           items-center
                           justify-center
                           bg-[#479F61]
                           hover:bg-[#2F7D47]
                           text-white
                           font-semibold
                           px-5 py-3
                           transition">

                    <span class="mr-2 text-lg">+</span>

                    Add News

                </a>

            </div>

        </div>

    </section>


    {{-- CONTENT --}}
    <section class="py-10">

        <div class="max-w-7xl mx-auto
                    px-4 sm:px-6 lg:px-8">


            {{-- SUCCESS MESSAGE --}}
            @if (session('success'))

                <div class="mb-6
                            bg-[#EAF5ED]
                            border border-[#479F61]
                            text-[#2F7D47]
                            px-5 py-4">

                    {{ session('success') }}

                </div>

            @endif


            {{-- NEWS TABLE --}}
            <div class="bg-white
                        border border-gray-200
                        overflow-hidden">

                <div class="px-6 py-5
                            border-b border-gray-200">

                    <h2 class="text-lg
                               font-bold
                               text-[#252525]">

                        News Articles

                    </h2>

                    <p class="mt-1
                              text-sm
                              text-gray-500">

                        Manage your published and draft news articles.

                    </p>

                </div>


                @if ($news->count())

                    <div class="overflow-x-auto">

                        <table class="w-full">

                            <thead class="bg-[#F7F8F7]">

                                <tr>

                                    <th class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500">

                                        Title

                                    </th>

                                    <th class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500">

                                        Status

                                    </th>

                                    <th class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500">

                                        Published

                                    </th>

                                    <th class="text-right
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500">

                                        Actions

                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-gray-100">

                                @foreach ($news as $article)

                                    <tr class="hover:bg-gray-50">


                                        {{-- TITLE --}}
                                        <td class="px-6 py-5">

                                            <div class="flex items-center gap-4">


                                                {{-- IMAGE --}}
                                                @if ($article->image)

                                                    <img
                                                        src="{{ asset('storage/' . $article->image) }}"
                                                        alt="{{ $article->title }}"
                                                        class="w-14 h-14
                                                               object-cover
                                                               border
                                                               border-gray-200"
                                                    >

                                                @else

                                                    <div class="w-14 h-14
                                                                bg-[#EAF5ED]
                                                                text-[#479F61]
                                                                flex items-center
                                                                justify-center
                                                                text-xl">

                                                        📰

                                                    </div>

                                                @endif


                                                <div>

                                                    <p class="font-semibold
                                                              text-[#252525]">

                                                        {{ $article->title }}

                                                    </p>

                                                    <p class="mt-1
                                                              text-xs
                                                              text-gray-500">

                                                        {{ $article->slug }}

                                                    </p>

                                                </div>

                                            </div>

                                        </td>


                                        {{-- STATUS --}}
                                        <td class="px-6 py-5">

                                            @if ($article->is_published)

                                                <span class="inline-flex
                                                             items-center
                                                             px-3 py-1
                                                             text-xs
                                                             font-semibold
                                                             bg-[#EAF5ED]
                                                             text-[#2F7D47]">

                                                    Published

                                                </span>

                                            @else

                                                <span class="inline-flex
                                                             items-center
                                                             px-3 py-1
                                                             text-xs
                                                             font-semibold
                                                             bg-gray-100
                                                             text-gray-600">

                                                    Draft

                                                </span>

                                            @endif

                                        </td>


                                        {{-- DATE --}}
                                        <td class="px-6 py-5
                                                   text-sm
                                                   text-gray-600">

                                            @if ($article->published_at)

                                                {{ $article->published_at->format('d M Y') }}

                                            @else

                                                —

                                            @endif

                                        </td>


                                        {{-- ACTIONS --}}
                                        <td class="px-6 py-5">

                                            <div class="flex
                                                        justify-end
                                                        items-center
                                                        gap-4">

                                                <a
                                                    href="{{ route('admin.news.show', $article) }}"
                                                    class="text-sm
                                                           font-semibold
                                                           text-gray-600
                                                           hover:text-[#479F61]">

                                                    View

                                                </a>


                                                <a
                                                    href="{{ route('admin.news.edit', $article) }}"
                                                    class="text-sm
                                                           font-semibold
                                                           text-[#479F61]
                                                           hover:text-[#2F7D47]">

                                                    Edit

                                                </a>


                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.news.destroy', $article) }}"
                                                    onsubmit="return confirm('Are you sure you want to delete this news article?');"
                                                >

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="text-sm
                                                               font-semibold
                                                               text-[#D5595F]
                                                               hover:text-[#B83F46]">

                                                        Delete

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>


                    {{-- PAGINATION --}}
                    @if ($news->hasPages())

                        <div class="px-6 py-5
                                    border-t border-gray-200">

                            {{ $news->links() }}

                        </div>

                    @endif


                @else

                    {{-- EMPTY STATE --}}
                    <div class="px-6 py-16 text-center">

                        <div class="w-16 h-16
                                    mx-auto
                                    bg-[#EAF5ED]
                                    text-[#479F61]
                                    flex items-center
                                    justify-center
                                    text-2xl">

                            📰

                        </div>

                        <h3 class="mt-5
                                   text-xl
                                   font-bold
                                   text-[#252525]">

                            No News Articles Yet

                        </h3>

                        <p class="mt-2
                                  max-w-md
                                  mx-auto
                                  text-gray-600">

                            You haven't created any news articles.
                            Create your first announcement to display
                            it on the public website.

                        </p>

                        <a
                            href="{{ route('admin.news.create') }}"
                            class="inline-flex
                                   mt-6
                                   bg-[#479F61]
                                   hover:bg-[#2F7D47]
                                   text-white
                                   font-semibold
                                   px-6 py-3
                                   transition">

                            Create First News Article

                        </a>

                    </div>

                @endif

            </div>


            {{-- BACK TO DASHBOARD --}}
            <div class="mt-6">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="text-sm
                           font-medium
                           text-gray-500
                           hover:text-[#479F61]">

                    ← Back to Dashboard

                </a>

            </div>

        </div>

    </section>

</div>

@endsection
