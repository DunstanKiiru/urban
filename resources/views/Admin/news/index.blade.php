@extends('layouts.admin')

@section('title', 'Manage News | Urban Roads SACCO')

@section('content')

<div class="min-h-screen bg-[#F7F8F7]">

    {{-- =========================================================
         HEADER
    ========================================================== --}}
    <section class="bg-[#3F4145]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                <div>

                    <p class="text-[#F7D928]
                              text-sm
                              font-semibold
                              uppercase
                              tracking-wider">
                        Content Management
                    </p>

                    <h1 class="mt-1 text-3xl font-bold text-white">
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
                           transition"
                >
                    <span class="mr-2 text-lg">+</span>
                    Add News
                </a>

            </div>

        </div>

    </section>



    {{-- =========================================================
         CONTENT
    ========================================================== --}}
    <section class="py-10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            {{-- =================================================
                 NEWS TABLE
            ================================================== --}}
            <div
                class="bg-white
                       border border-gray-200
                       overflow-hidden"
            >

                {{-- TABLE HEADER --}}
                <div
                    class="px-6 py-5
                           border-b border-gray-200"
                >

                    <h2
                        class="text-lg
                               font-bold
                               text-[#252525]"
                    >
                        News Articles
                    </h2>

                    <p
                        class="mt-1
                               text-sm
                               text-gray-500"
                    >
                        Manage your published and draft news articles.
                    </p>

                </div>



                @if ($news->count())

                    <div class="overflow-x-auto">

                        <table class="w-full">

                            {{-- =================================================
                                 TABLE HEAD
                            ================================================== --}}
                            <thead class="bg-[#F7F8F7]">

                                <tr>

                                    <th
                                        class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500"
                                    >
                                        Title
                                    </th>


                                    <th
                                        class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500"
                                    >
                                        Status
                                    </th>


                                    <th
                                        class="text-left
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500"
                                    >
                                        Published
                                    </th>


                                    <th
                                        class="text-right
                                               px-6 py-4
                                               text-xs
                                               font-semibold
                                               uppercase
                                               tracking-wider
                                               text-gray-500"
                                    >
                                        Actions
                                    </th>

                                </tr>

                            </thead>



                            {{-- =================================================
                                 TABLE BODY
                            ================================================== --}}
                            <tbody class="divide-y divide-gray-100">

                                @foreach ($news as $article)

                                    <tr class="hover:bg-gray-50">


                                        {{-- =================================================
                                             TITLE
                                        ================================================== --}}
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

                                                    <div
                                                        class="w-14 h-14
                                                               bg-[#EAF5ED]
                                                               text-[#479F61]
                                                               flex
                                                               items-center
                                                               justify-center
                                                               text-xl"
                                                    >
                                                        📰
                                                    </div>

                                                @endif


                                                {{-- TITLE + SLUG --}}
                                                <div class="min-w-0">

                                                    <p
                                                        class="font-semibold
                                                               text-[#252525]
                                                               truncate
                                                               max-w-md"
                                                    >
                                                        {{ $article->title }}
                                                    </p>

                                                    <p
                                                        class="mt-1
                                                               text-xs
                                                               text-gray-500
                                                               truncate
                                                               max-w-md"
                                                    >
                                                        {{ $article->slug }}
                                                    </p>

                                                </div>

                                            </div>

                                        </td>



                                        {{-- =================================================
                                             STATUS
                                        ================================================== --}}
                                        <td class="px-6 py-5">

                                            @if ($article->is_published)

                                                <span
                                                    class="inline-flex
                                                           items-center
                                                           px-3 py-1
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
                                                           text-xs
                                                           font-semibold
                                                           bg-gray-100
                                                           text-gray-600"
                                                >
                                                    Draft
                                                </span>

                                            @endif

                                        </td>



                                        {{-- =================================================
                                             DATE
                                        ================================================== --}}
                                        <td
                                            class="px-6 py-5
                                                   text-sm
                                                   text-gray-600"
                                        >

                                            @if ($article->published_at)

                                                {{ $article->published_at->format('d M Y') }}

                                            @else

                                                —

                                            @endif

                                        </td>



                                        {{-- =================================================
                                             ACTIONS
                                        ================================================== --}}
                                        <td class="px-6 py-5">

                                            <div
                                                class="flex
                                                       justify-end
                                                       items-center
                                                       gap-4"
                                            >

                                                {{-- VIEW --}}
                                                <a
                                                    href="{{ route('admin.news.show', $article) }}"
                                                    class="text-sm
                                                           font-semibold
                                                           text-gray-600
                                                           hover:text-[#479F61]
                                                           transition"
                                                >
                                                    View
                                                </a>


                                                {{-- EDIT --}}
                                                <a
                                                    href="{{ route('admin.news.edit', $article) }}"
                                                    class="text-sm
                                                           font-semibold
                                                           text-[#479F61]
                                                           hover:text-[#2F7D47]
                                                           transition"
                                                >
                                                    Edit
                                                </a>


                                                {{-- DELETE --}}
                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.news.destroy', $article) }}"
                                                    class="delete-news-form inline"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="button"
                                                        class="delete-news-btn
                                                               text-sm
                                                               font-semibold
                                                               text-[#D5595F]
                                                               hover:text-[#B83F46]
                                                               transition"
                                                        data-title="{{ $article->title }}"
                                                    >
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



                    {{-- =================================================
                         PAGINATION
                    ================================================== --}}
                    @if ($news->hasPages())

                        <div
                            class="px-6 py-5
                                   border-t border-gray-200"
                        >

                            {{ $news->links() }}

                        </div>

                    @endif



                @else

                    {{-- =================================================
                         EMPTY STATE
                    ================================================== --}}
                    <div class="px-6 py-16 text-center">

                        <div
                            class="w-16 h-16
                                   mx-auto
                                   bg-[#EAF5ED]
                                   text-[#479F61]
                                   flex
                                   items-center
                                   justify-center
                                   text-2xl"
                        >
                            📰
                        </div>


                        <h3
                            class="mt-5
                                   text-xl
                                   font-bold
                                   text-[#252525]"
                        >
                            No News Articles Yet
                        </h3>


                        <p
                            class="mt-2
                                   max-w-md
                                   mx-auto
                                   text-gray-600"
                        >
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
                                   transition"
                        >
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
                           hover:text-[#479F61]"
                >
                    ← Back to Dashboard
                </a>

            </div>

        </div>

    </section>

</div>



{{-- =============================================================
     DELETE CONFIRMATION MODAL
============================================================= --}}
<div
    id="deleteNewsModal"
    class="hidden fixed inset-0 z-[9999]
           items-center justify-center
           bg-black/60 backdrop-blur-sm
           px-4"
    aria-hidden="true"
>

    <div
        id="deleteModalBox"
        class="w-full max-w-md
               bg-white
               rounded-2xl
               shadow-2xl
               overflow-hidden
               transform scale-95
               opacity-0
               transition-all duration-200"
    >

        {{-- ICON + CONTENT --}}
        <div class="px-7 pt-8 pb-6 text-center">

            {{-- WARNING ICON --}}
            <div
                class="mx-auto
                       w-16 h-16
                       rounded-full
                       bg-[#FBECEE]
                       flex
                       items-center
                       justify-center"
            >

                <svg
                    class="w-9 h-9 text-[#D5595F]"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 9v4"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 17h.01"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10.29 3.86L2.82 17a2 2 0 001.74 3h14.88a2 2 0 001.74-3L13.71 3.86a2 2 0 00-3.42 0z"
                    />

                </svg>

            </div>


            <h3
                class="mt-5
                       text-2xl
                       font-bold
                       text-[#252525]"
            >
                Delete News Article?
            </h3>


            <p class="mt-3 text-gray-500 leading-relaxed">
                You're about to permanently delete:
            </p>


            {{-- ARTICLE TITLE --}}
            <div
                id="deleteNewsTitle"
                class="mt-4
                       px-4 py-3
                       bg-[#F7F8F7]
                       rounded-lg
                       text-[#3F4145]
                       font-semibold
                       break-words"
            ></div>


            <p class="mt-4 text-sm text-gray-400">
                This action cannot be undone.
            </p>

        </div>


        {{-- BUTTONS --}}
        <div
            class="px-7 py-5
                   bg-[#F7F8F7]
                   border-t border-gray-100
                   flex flex-col-reverse sm:flex-row
                   gap-3"
        >

            <button
                type="button"
                id="cancelDeleteNews"
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


            <button
                type="button"
                id="confirmDeleteNews"
                class="flex-1
                       px-5 py-3
                       rounded-lg
                       bg-[#D5595F]
                       text-white
                       font-semibold
                       hover:bg-[#B83F46]
                       shadow-sm
                       transition"
            >
                Yes, Delete
            </button>

        </div>

    </div>

</div>



{{-- =============================================================
     SUCCESS MODAL
============================================================= --}}
@if (session('success'))

    <div
        id="successModal"
        class="fixed inset-0 z-[9999]
               flex items-center justify-center
               bg-black/60 backdrop-blur-sm
               px-4"
        aria-hidden="false"
    >

        <div
            id="successModalBox"
            class="w-full max-w-md
                   bg-white
                   rounded-2xl
                   shadow-2xl
                   overflow-hidden
                   transform scale-95
                   opacity-0
                   transition-all duration-200"
        >

            {{-- SUCCESS CONTENT --}}
            <div class="px-7 pt-8 pb-6 text-center">

                {{-- SUCCESS ICON --}}
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
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                    >

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 13l4 4L19 7"
                        />

                    </svg>

                </div>


                <h3
                    class="mt-5
                           text-2xl
                           font-bold
                           text-[#252525]"
                >
                    Success!
                </h3>


                <p
                    class="mt-3
                           text-gray-500
                           leading-relaxed"
                >
                    {{ session('success') }}
                </p>

            </div>


            {{-- SUCCESS BUTTON --}}
            <div
                class="px-7 py-5
                       bg-[#F7F8F7]
                       border-t border-gray-100"
            >

                <button
                    type="button"
                    id="closeSuccessModal"
                    class="w-full
                           px-5 py-3
                           rounded-lg
                           bg-[#479F61]
                           text-white
                           font-semibold
                           hover:bg-[#2F7D47]
                           shadow-sm
                           transition"
                >
                    Continue
                </button>

            </div>

        </div>

    </div>

@endif



{{-- =============================================================
     JAVASCRIPT
============================================================= --}}
<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | DELETE MODAL
    |--------------------------------------------------------------------------
    */

    const deleteModal =
        document.getElementById('deleteNewsModal');

    const deleteModalBox =
        document.getElementById('deleteModalBox');

    const deleteTitle =
        document.getElementById('deleteNewsTitle');

    const cancelDelete =
        document.getElementById('cancelDeleteNews');

    const confirmDelete =
        document.getElementById('confirmDeleteNews');

    let selectedDeleteForm = null;



    /*
    |--------------------------------------------------------------------------
    | OPEN DELETE MODAL
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll('.delete-news-btn').forEach(function (button) {

        button.addEventListener('click', function () {

            selectedDeleteForm =
                this.closest('.delete-news-form');

            deleteTitle.textContent =
                this.dataset.title;


            deleteModal.classList.remove('hidden');

            deleteModal.classList.add('flex');

            deleteModal.setAttribute(
                'aria-hidden',
                'false'
            );


            requestAnimationFrame(function () {

                deleteModalBox.classList.remove(
                    'scale-95',
                    'opacity-0'
                );

                deleteModalBox.classList.add(
                    'scale-100',
                    'opacity-100'
                );

            });

        });

    });



    /*
    |--------------------------------------------------------------------------
    | CLOSE DELETE MODAL
    |--------------------------------------------------------------------------
    */

    function closeDeleteModal() {

        deleteModalBox.classList.remove(
            'scale-100',
            'opacity-100'
        );

        deleteModalBox.classList.add(
            'scale-95',
            'opacity-0'
        );


        setTimeout(function () {

            deleteModal.classList.add('hidden');

            deleteModal.classList.remove('flex');

            deleteModal.setAttribute(
                'aria-hidden',
                'true'
            );

            selectedDeleteForm = null;

        }, 200);

    }



    /*
    |--------------------------------------------------------------------------
    | CANCEL DELETE
    |--------------------------------------------------------------------------
    */

    if (cancelDelete) {

        cancelDelete.addEventListener(
            'click',
            closeDeleteModal
        );

    }



    /*
    |--------------------------------------------------------------------------
    | CONFIRM DELETE
    |--------------------------------------------------------------------------
    */

    if (confirmDelete) {

        confirmDelete.addEventListener(
            'click',
            function () {

                if (selectedDeleteForm) {

                    selectedDeleteForm.submit();

                }

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | CLICK OUTSIDE DELETE MODAL
    |--------------------------------------------------------------------------
    */

    if (deleteModal) {

        deleteModal.addEventListener(
            'click',
            function (event) {

                if (event.target === deleteModal) {

                    closeDeleteModal();

                }

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | SUCCESS MODAL
    |--------------------------------------------------------------------------
    */

    const successModal =
        document.getElementById('successModal');

    const successModalBox =
        document.getElementById('successModalBox');

    const closeSuccess =
        document.getElementById('closeSuccessModal');



    if (successModal && successModalBox) {


        /*
        |--------------------------------------------------------------------------
        | OPEN ANIMATION
        |--------------------------------------------------------------------------
        */

        requestAnimationFrame(function () {

            successModalBox.classList.remove(
                'scale-95',
                'opacity-0'
            );

            successModalBox.classList.add(
                'scale-100',
                'opacity-100'
            );

        });



        /*
        |--------------------------------------------------------------------------
        | CLOSE SUCCESS MODAL
        |--------------------------------------------------------------------------
        */

        function closeSuccessModal() {

            successModalBox.classList.remove(
                'scale-100',
                'opacity-100'
            );

            successModalBox.classList.add(
                'scale-95',
                'opacity-0'
            );


            setTimeout(function () {

                successModal.remove();

            }, 200);

        }



        /*
        |--------------------------------------------------------------------------
        | CONTINUE BUTTON
        |--------------------------------------------------------------------------
        */

        if (closeSuccess) {

            closeSuccess.addEventListener(
                'click',
                closeSuccessModal
            );

        }



        /*
        |--------------------------------------------------------------------------
        | CLICK OUTSIDE SUCCESS MODAL
        |--------------------------------------------------------------------------
        */

        successModal.addEventListener(
            'click',
            function (event) {

                if (event.target === successModal) {

                    closeSuccessModal();

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

                if (event.key === 'Escape') {

                    closeSuccessModal();

                }

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | ESCAPE KEY FOR DELETE MODAL
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                deleteModal &&
                !deleteModal.classList.contains('hidden')
            ) {

                closeDeleteModal();

            }

        }
    );

});

</script>

@endsection
