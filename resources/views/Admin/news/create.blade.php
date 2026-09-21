@extends('layouts.admin')

@section('title', 'Create News | Urban Roads SACCO')

@section('content')

<div class="min-h-screen bg-[#F7F8F7]">

    {{-- PAGE HEADER --}}
    <div class="bg-[#3F4145]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

                <div>
                    <p class="text-sm text-gray-300 mb-1">
                        Content Management System
                    </p>

                    <h1 class="text-3xl font-bold text-white">
                        Create News
                    </h1>

                    <p class="text-gray-300 mt-2">
                        Publish a new news article or announcement.
                    </p>
                </div>

                <a href="{{ route('admin.news.index') }}"
                   class="inline-flex items-center justify-center px-5 py-3 rounded-lg bg-white text-[#3F4145] font-semibold hover:bg-gray-100 transition">
                    ← Back to News
                </a>

            </div>

        </div>
    </div>


    {{-- FORM --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        {{-- VALIDATION ERRORS --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-5">

                <div class="flex items-center gap-2 mb-2">
                    <span class="text-red-600 font-bold">
                        Please correct the following:
                    </span>
                </div>

                <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif


        <form action="{{ route('admin.news.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-8">

            @csrf


            {{-- BASIC INFORMATION --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">

                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#252525]">
                        Article Information
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Enter the main information for this news article.
                    </p>
                </div>


                {{-- TITLE --}}
                <div class="mb-6">
                    <label for="title"
                           class="block text-sm font-semibold text-[#252525] mb-2">
                        News Title <span class="text-[#D5595F]">*</span>
                    </label>

                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title') }}"
                        required
                        placeholder="Enter news title"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#479F61] focus:ring-2 focus:ring-[#479F61]/20"
                    >

                    @error('title')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- EXCERPT --}}
                <div class="mb-6">
                    <label for="excerpt"
                           class="block text-sm font-semibold text-[#252525] mb-2">
                        Short Description
                    </label>

                    <textarea
                        name="excerpt"
                        id="excerpt"
                        rows="3"
                        maxlength="500"
                        placeholder="Brief summary of the article..."
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#479F61] focus:ring-2 focus:ring-[#479F61]/20"
                    >{{ old('excerpt') }}</textarea>

                    <p class="mt-2 text-xs text-gray-500">
                        Maximum 500 characters.
                    </p>

                    @error('excerpt')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- CONTENT --}}
                <div>
                    <label for="content"
                           class="block text-sm font-semibold text-[#252525] mb-2">
                        Article Content <span class="text-[#D5595F]">*</span>
                    </label>

                    <textarea
                        name="content"
                        id="content"
                        rows="12"
                        required
                        placeholder="Write the full news article here..."
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#479F61] focus:ring-2 focus:ring-[#479F61]/20"
                    >{{ old('content') }}</textarea>

                    @error('content')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- MEDIA --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">

                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#252525]">
                        Featured Image
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Add an image to appear with the news article.
                    </p>
                </div>

                <label for="image"
                       class="block text-sm font-semibold text-[#252525] mb-2">
                    Upload Image
                </label>

                <input
                    type="file"
                    name="image"
                    id="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm"
                >

                <p class="mt-2 text-xs text-gray-500">
                    JPG, JPEG, PNG or WEBP. Maximum size: 2MB.
                </p>

                @error('image')
                    <p class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- PUBLICATION SETTINGS --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sm:p-8">

                <div class="mb-6">
                    <h2 class="text-xl font-bold text-[#252525]">
                        Publication Settings
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        Control when this article becomes visible on the website.
                    </p>
                </div>


                {{-- PUBLISHED DATE --}}
                <div class="mb-6">

                    <label for="published_at"
                           class="block text-sm font-semibold text-[#252525] mb-2">
                        Publication Date
                    </label>

                    <input
                        type="datetime-local"
                        name="published_at"
                        id="published_at"
                        value="{{ old('published_at') }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-[#479F61] focus:ring-2 focus:ring-[#479F61]/20"
                    >

                    @error('published_at')
                        <p class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- PUBLISH CHECKBOX --}}
                <div class="flex items-start gap-3">

                    <input
                        type="checkbox"
                        name="is_published"
                        value="1"
                        id="is_published"
                        {{ old('is_published') ? 'checked' : '' }}
                        class="mt-1 h-5 w-5 rounded border-gray-300 text-[#479F61] focus:ring-[#479F61]"
                    >

                    <div>
                        <label for="is_published"
                               class="font-semibold text-[#252525] cursor-pointer">
                            Publish this article
                        </label>

                        <p class="text-sm text-gray-500 mt-1">
                            When enabled, this article will be available on the public website.
                        </p>
                    </div>

                </div>

            </div>


            {{-- ACTIONS --}}
            <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-3">

                <a href="{{ route('admin.news.index') }}"
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-gray-300 bg-white text-gray-700 font-semibold hover:bg-gray-50 transition">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-[#479F61] text-white font-semibold hover:bg-[#2F7D47] transition shadow-sm">
                    Publish / Save News
                </button>

            </div>

        </form>

    </div>

</div>

@endsection
