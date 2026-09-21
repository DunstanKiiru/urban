@extends('layouts.admin')

@section('title', 'Edit News')

@section('content')

<div class="max-w-5xl mx-auto">

    {{-- PAGE HEADER --}}
    <div class="mb-8">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-[#3F4145]">
                    Edit News Article
                </h1>

                <p class="mt-2 text-gray-600">
                    Update the details of this news article.
                </p>
            </div>

            <a
                href="{{ route('admin.news.index') }}"
                class="inline-flex items-center px-5 py-3
                       border border-gray-300
                       text-[#3F4145] font-semibold
                       rounded-sm hover:bg-gray-100 transition"
            >
                ← Back to News
            </a>
        </div>
    </div>


    {{-- VALIDATION ERRORS --}}
    @if ($errors->any())
        <div class="mb-6 bg-[#FBECEE] border border-[#D5595F] p-5">
            <h3 class="font-semibold text-[#B83F46] mb-2">
                Please correct the following:
            </h3>

            <ul class="list-disc list-inside text-sm text-[#B83F46] space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- FORM --}}
    <div class="bg-white border border-gray-200 shadow-sm">

        <form
            action="{{ route('admin.news.update', $news) }}"
            method="POST"
            enctype="multipart/form-data"
            class="p-6 sm:p-8"
        >

            @csrf
            @method('PUT')


            {{-- TITLE --}}
            <div class="mb-6">
                <label
                    for="title"
                    class="block text-sm font-semibold text-[#3F4145] mb-2"
                >
                    News Title
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $news->title) }}"
                    required
                    class="w-full border border-gray-300 px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-1 focus:ring-[#479F61]"
                >
            </div>


            {{-- EXCERPT --}}
            <div class="mb-6">
                <label
                    for="excerpt"
                    class="block text-sm font-semibold text-[#3F4145] mb-2"
                >
                    Short Description
                </label>

                <textarea
                    id="excerpt"
                    name="excerpt"
                    rows="3"
                    class="w-full border border-gray-300 px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-1 focus:ring-[#479F61]"
                >{{ old('excerpt', $news->excerpt) }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    A short summary shown on the News page.
                </p>
            </div>


            {{-- CONTENT --}}
            <div class="mb-6">
                <label
                    for="content"
                    class="block text-sm font-semibold text-[#3F4145] mb-2"
                >
                    Article Content
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="12"
                    required
                    class="w-full border border-gray-300 px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-1 focus:ring-[#479F61]"
                >{{ old('content', $news->content) }}</textarea>
            </div>


            {{-- CURRENT IMAGE --}}
            @if ($news->image)

                <div class="mb-6">

                    <label class="block text-sm font-semibold text-[#3F4145] mb-2">
                        Current Image
                    </label>

                    <div class="border border-gray-200 bg-gray-50 p-3 inline-block">

                        <img
                            src="{{ asset('storage/' . $news->image) }}"
                            alt="{{ $news->title }}"
                            class="max-w-md max-h-64 object-cover"
                        >

                    </div>

                </div>

            @endif


            {{-- NEW IMAGE --}}
            <div class="mb-6">

                <label
                    for="image"
                    class="block text-sm font-semibold text-[#3F4145] mb-2"
                >
                    Replace Image
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="w-full border border-gray-300 px-4 py-3 bg-white"
                >

                <p class="mt-1 text-xs text-gray-500">
                    Leave empty to keep the current image.
                    Maximum size: 2MB.
                </p>

            </div>


            {{-- PUBLISHED DATE --}}
            <div class="mb-6">

                <label
                    for="published_at"
                    class="block text-sm font-semibold text-[#3F4145] mb-2"
                >
                    Publication Date
                </label>

                <input
                    type="datetime-local"
                    id="published_at"
                    name="published_at"
                    value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
                    class="w-full border border-gray-300 px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-1 focus:ring-[#479F61]"
                >

            </div>


            {{-- PUBLISHED CHECKBOX --}}
            <div class="mb-8">

                <label class="inline-flex items-center gap-3 cursor-pointer">

                    <input
                        type="checkbox"
                        name="is_published"
                        value="1"
                        {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                        class="w-5 h-5 text-[#479F61]
                               border-gray-300 rounded
                               focus:ring-[#479F61]"
                    >

                    <span class="text-sm font-semibold text-[#3F4145]">
                        Publish this article
                    </span>

                </label>

            </div>


            {{-- ACTIONS --}}
            <div class="flex flex-wrap items-center gap-4">

                <button
                    type="submit"
                    class="px-7 py-3
                           bg-[#479F61]
                           text-white
                           font-semibold
                           rounded-sm
                           hover:bg-[#2F7D47]
                           transition"
                >
                    Update News
                </button>

                <a
                    href="{{ route('admin.news.index') }}"
                    class="px-7 py-3
                           border border-gray-300
                           text-[#3F4145]
                           font-semibold
                           rounded-sm
                           hover:bg-gray-100
                           transition"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection
