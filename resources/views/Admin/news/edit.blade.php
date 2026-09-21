@extends('layouts.admin')

@section('title', 'Edit News | Urban Roads SACCO')

@section('content')

<div class="max-w-5xl mx-auto">

    {{-- =========================================================
         PAGE HEADER
    ========================================================== --}}
    <div class="mb-8">

        <div class="flex flex-col sm:flex-row
                    sm:items-center
                    sm:justify-between
                    gap-4">

            <div>

                <p class="text-[#479F61]
                          text-sm
                          font-semibold
                          uppercase
                          tracking-wider">
                    Content Management
                </p>

                <h1 class="mt-1
                           text-3xl
                           font-bold
                           text-[#3F4145]">
                    Edit News Article
                </h1>

                <p class="mt-2 text-gray-600">
                    Update the details of this news article.
                </p>

            </div>


            <a
                href="{{ route('admin.news.index') }}"
                class="inline-flex
                       items-center
                       justify-center
                       px-5 py-3
                       border border-gray-300
                       text-[#3F4145]
                       font-semibold
                       rounded-lg
                       hover:bg-gray-100
                       transition"
            >
                ← Back to News
            </a>

        </div>

    </div>



    {{-- =========================================================
         VALIDATION ERRORS
    ========================================================== --}}
    @if ($errors->any())

        <div
            class="mb-6
                   bg-[#FBECEE]
                   border border-[#D5595F]
                   rounded-lg
                   px-5 py-4"
        >

            <h3 class="font-semibold text-[#B83F46] mb-2">
                Please correct the following:
            </h3>

            <ul class="list-disc list-inside
                       text-sm
                       text-[#B83F46]
                       space-y-1">

                @foreach ($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif



    {{-- =========================================================
         EDIT FORM
    ========================================================== --}}
    <div
        class="bg-white
               border border-gray-200
               rounded-xl
               shadow-sm
               overflow-hidden"
    >

        <div
            class="px-6 py-5
                   border-b border-gray-200
                   bg-[#F7F8F7]"
        >

            <h2 class="text-lg font-bold text-[#252525]">
                Article Information
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Update the information below and save your changes.
            </p>

        </div>


        <form
            id="editNewsForm"
            action="{{ route('admin.news.update', $news) }}"
            method="POST"
            enctype="multipart/form-data"
            class="p-6 sm:p-8"
        >

            @csrf
            @method('PUT')


            {{-- =================================================
                 TITLE
            ================================================== --}}
            <div class="mb-6">

                <label
                    for="title"
                    class="block
                           text-sm
                           font-semibold
                           text-[#3F4145]
                           mb-2"
                >
                    News Title
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $news->title) }}"
                    required
                    class="w-full
                           border border-gray-300
                           rounded-lg
                           px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-2
                           focus:ring-[#479F61]/20"
                >

            </div>



            {{-- =================================================
                 EXCERPT
            ================================================== --}}
            <div class="mb-6">

                <label
                    for="excerpt"
                    class="block
                           text-sm
                           font-semibold
                           text-[#3F4145]
                           mb-2"
                >
                    Short Description
                </label>

                <textarea
                    id="excerpt"
                    name="excerpt"
                    rows="3"
                    class="w-full
                           border border-gray-300
                           rounded-lg
                           px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-2
                           focus:ring-[#479F61]/20"
                >{{ old('excerpt', $news->excerpt) }}</textarea>

                <p class="mt-1 text-xs text-gray-500">
                    A short summary shown on the News page.
                </p>

            </div>



            {{-- =================================================
                 CONTENT
            ================================================== --}}
            <div class="mb-6">

                <label
                    for="content"
                    class="block
                           text-sm
                           font-semibold
                           text-[#3F4145]
                           mb-2"
                >
                    Article Content
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="12"
                    required
                    class="w-full
                           border border-gray-300
                           rounded-lg
                           px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-2
                           focus:ring-[#479F61]/20"
                >{{ old('content', $news->content) }}</textarea>

            </div>



            {{-- =================================================
                 CURRENT IMAGE
            ================================================== --}}
            @if ($news->image)

                <div class="mb-6">

                    <label
                        class="block
                               text-sm
                               font-semibold
                               text-[#3F4145]
                               mb-2"
                    >
                        Current Image
                    </label>


                    <div
                        class="inline-block
                               border border-gray-200
                               rounded-lg
                               bg-gray-50
                               p-3"
                    >

                        <img
                            src="{{ asset('storage/' . $news->image) }}"
                            alt="{{ $news->title }}"
                            class="max-w-md
                                   max-h-64
                                   object-cover
                                   rounded-md"
                        >

                    </div>

                </div>

            @endif



            {{-- =================================================
                 NEW IMAGE
            ================================================== --}}
            <div class="mb-6">

                <label
                    for="image"
                    class="block
                           text-sm
                           font-semibold
                           text-[#3F4145]
                           mb-2"
                >
                    Replace Image
                </label>

                <input
                    type="file"
                    id="image"
                    name="image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="w-full
                           border border-gray-300
                           rounded-lg
                           px-4 py-3
                           bg-white"
                >

                <p class="mt-1 text-xs text-gray-500">
                    Leave empty to keep the current image.
                    Maximum size: 2MB.
                </p>

            </div>



            {{-- =================================================
                 PUBLICATION DATE
            ================================================== --}}
            <div class="mb-6">

                <label
                    for="published_at"
                    class="block
                           text-sm
                           font-semibold
                           text-[#3F4145]
                           mb-2"
                >
                    Publication Date
                </label>

                <input
                    type="datetime-local"
                    id="published_at"
                    name="published_at"
                    value="{{ old(
                        'published_at',
                        $news->published_at
                            ? $news->published_at->format('Y-m-d\TH:i')
                            : ''
                    ) }}"
                    class="w-full
                           border border-gray-300
                           rounded-lg
                           px-4 py-3
                           focus:border-[#479F61]
                           focus:ring-2
                           focus:ring-[#479F61]/20"
                >

            </div>



            {{-- =================================================
                 PUBLISHED
            ================================================== --}}
            <div class="mb-8">

                <label
                    class="inline-flex
                           items-center
                           gap-3
                           cursor-pointer"
                >

                    <input
                        type="checkbox"
                        name="is_published"
                        value="1"
                        {{ old('is_published', $news->is_published) ? 'checked' : '' }}
                        class="w-5 h-5
                               text-[#479F61]
                               border-gray-300
                               rounded
                               focus:ring-[#479F61]"
                    >

                    <span
                        class="text-sm
                               font-semibold
                               text-[#3F4145]"
                    >
                        Publish this article
                    </span>

                </label>

            </div>



            {{-- =================================================
                 ACTIONS
            ================================================== --}}
            <div class="flex flex-wrap items-center gap-3">

                {{-- UPDATE BUTTON --}}
                <button
                    type="submit"
                    id="updateNewsButton"
                    class="inline-flex
                           items-center
                           justify-center
                           px-7 py-3
                           bg-[#479F61]
                           text-white
                           font-semibold
                           rounded-lg
                           hover:bg-[#2F7D47]
                           shadow-sm
                           transition"
                >
                    Update News
                </button>


                {{-- CANCEL --}}
                <a
                    href="{{ route('admin.news.index') }}"
                    class="inline-flex
                           items-center
                           justify-center
                           px-7 py-3
                           border border-gray-300
                           bg-white
                           text-[#3F4145]
                           font-semibold
                           rounded-lg
                           hover:bg-gray-50
                           transition"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>



{{-- =============================================================
     UPDATE CONFIRMATION MODAL
============================================================= --}}
<div
    id="updateNewsModal"
    class="hidden fixed inset-0 z-[9999]
           items-center justify-center
           bg-black/60
           backdrop-blur-sm
           px-4"
    aria-hidden="true"
>

    <div
        id="updateModalBox"
        class="w-full max-w-md
               bg-white
               rounded-2xl
               shadow-2xl
               overflow-hidden
               transform scale-95
               opacity-0
               transition-all duration-200"
    >

        {{-- MODAL CONTENT --}}
        <div class="px-7 pt-8 pb-6 text-center">

            {{-- EDIT ICON --}}
            <div
                class="mx-auto
                       w-16 h-16
                       rounded-full
                       bg-[#EAF5ED]
                       flex
                       items-center
                       justify-center"
            >

                <svg
                    class="w-9 h-9 text-[#479F61]"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 20h9"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.5 3.5a2.121 2.121 0 013 3L8 18l-4 1 1-4L16.5 3.5z"
                    />

                </svg>

            </div>


            {{-- TITLE --}}
            <h3
                class="mt-5
                       text-2xl
                       font-bold
                       text-[#252525]"
            >
                Update News Article?
            </h3>


            {{-- MESSAGE --}}
            <p
                class="mt-3
                       text-gray-500
                       leading-relaxed"
            >
                Are you sure you want to update this news article?
            </p>


            {{-- ARTICLE NAME --}}
            <div
                class="mt-4
                       px-4 py-3
                       bg-[#F7F8F7]
                       rounded-lg
                       text-[#3F4145]
                       font-semibold
                       break-words"
            >
                {{ $news->title }}
            </div>


            <p class="mt-4 text-sm text-gray-400">
                Your changes will be saved to the website.
            </p>

        </div>



        {{-- MODAL BUTTONS --}}
        <div
            class="px-7 py-5
                   bg-[#F7F8F7]
                   border-t border-gray-100
                   flex flex-col-reverse
                   sm:flex-row
                   gap-3"
        >

            {{-- CANCEL --}}
            <button
                type="button"
                id="cancelUpdateNews"
                class="flex-1
                       px-5 py-3
                       rounded-lg
                       border border-gray-300
                       bg-white
                       text-[#3F4145]
                       font-semibold
                       hover:bg-gray-50
                       transition"
            >
                Cancel
            </button>


            {{-- CONFIRM --}}
            <button
                type="button"
                id="confirmUpdateNews"
                class="flex-1
                       px-5 py-3
                       rounded-lg
                       bg-[#479F61]
                       text-white
                       font-semibold
                       hover:bg-[#2F7D47]
                       shadow-sm
                       transition"
            >
                Yes, Update
            </button>

        </div>

    </div>

</div>



{{-- =============================================================
     JAVASCRIPT
============================================================= --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const form =
        document.getElementById('editNewsForm');

    const updateButton =
        document.getElementById('updateNewsButton');

    const modal =
        document.getElementById('updateNewsModal');

    const modalBox =
        document.getElementById('updateModalBox');

    const cancelButton =
        document.getElementById('cancelUpdateNews');

    const confirmButton =
        document.getElementById('confirmUpdateNews');


    /*
    |--------------------------------------------------------------------------
    | OPEN UPDATE CONFIRMATION
    |--------------------------------------------------------------------------
    */

    form.addEventListener('submit', function (event) {

        /*
        | Stop the form from submitting immediately.
        */
        event.preventDefault();


        /*
        | Open modal.
        */
        modal.classList.remove('hidden');

        modal.classList.add('flex');

        modal.setAttribute(
            'aria-hidden',
            'false'
        );


        /*
        | Animate modal.
        */
        requestAnimationFrame(function () {

            modalBox.classList.remove(
                'scale-95',
                'opacity-0'
            );

            modalBox.classList.add(
                'scale-100',
                'opacity-100'
            );

        });

    });



    /*
    |--------------------------------------------------------------------------
    | CLOSE MODAL
    |--------------------------------------------------------------------------
    */

    function closeModal() {

        modalBox.classList.remove(
            'scale-100',
            'opacity-100'
        );

        modalBox.classList.add(
            'scale-95',
            'opacity-0'
        );


        setTimeout(function () {

            modal.classList.add('hidden');

            modal.classList.remove('flex');

            modal.setAttribute(
                'aria-hidden',
                'true'
            );

        }, 200);

    }



    /*
    |--------------------------------------------------------------------------
    | CANCEL
    |--------------------------------------------------------------------------
    */

    cancelButton.addEventListener(
        'click',
        closeModal
    );



    /*
    |--------------------------------------------------------------------------
    | CONFIRM UPDATE
    |--------------------------------------------------------------------------
    */

    confirmButton.addEventListener(
        'click',
        function () {

            /*
            | Prevent double submission.
            */
            confirmButton.disabled = true;

            confirmButton.textContent =
                'Updating...';

            confirmButton.classList.add(
                'opacity-75',
                'cursor-not-allowed'
            );


            /*
            | Actually submit the form.
            */
            form.submit();

        }
    );



    /*
    |--------------------------------------------------------------------------
    | CLICK OUTSIDE
    |--------------------------------------------------------------------------
    */

    modal.addEventListener(
        'click',
        function (event) {

            if (event.target === modal) {

                closeModal();

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | ESCAPE KEY
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                !modal.classList.contains('hidden')
            ) {

                closeModal();

            }

        }
    );

});

</script>

@endsection
