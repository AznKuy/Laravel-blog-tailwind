@extends('layouts.app')

@section('conten')
    <div class="max-w-screen-md container mx-auto bg-gray-400 m-12 p-3 rounded-md shadow-md shadow-purple-800">
        <div class="">
            <h2 class="pb-3 font-semi-bold">Form Edit Post</h2>
            <form action="/posts/update/{{ $posts->id }}" method="get">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="title" id="title" name="title" value="{{ $posts->title }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="title for your blog ..." required autofocus>
                </div>

                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                <textarea id="content" rows="4" name="content"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your content..">{{ old('content', $posts->content) }}</textarea>

                <button type="submit"
                    class="my-3 text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Submit</button>
            </form>
        </div>
    </div>
@endsection
