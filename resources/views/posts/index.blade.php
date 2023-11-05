@extends('layouts.app')

@section('conten')
    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto sm:p-10 md:p-16">

        <a href="/posts/create" class="relative inline-block text-lg group mb-5">
            <span
                class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                <span
                    class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
                <span class="relative">Create new Post</span>
            </span>
            <span
                class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                data-rounded="rounded-lg"></span>
        </a>

        @if ($message = Session::get('success'))
            <div class="relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                <p>{{ $message }}</p>
                <span class="absolute inset-y-0 right-0 flex items-center mr-4">
                    <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

            @foreach ($posts as $post)
                <div class="rounded overflow-hidden shadow-lg">
                    <a href="#">
                        <div class="relative">
                            <img class="w-full" src="https://source.unsplash.com/random/?programming" alt="proggramming">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                            <a href="#!">
                                <div
                                    class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                    Photos
                                </div>
                            </a>
                        </div>
                    </a>
                    <div class="px-6 py-4">
                        <a href="/show/{{ $post->id }}"
                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
                            {{ $post->title }}</a>
                        <p class="text-gray-500 text-sm">
                            {{ Str::limit($post->content, 80) }}
                        </p>
                    </div>
                    <div class="px-6 py-4 flex flex-row items-center">
                        <span href="#"
                            class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
              c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
              c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">{{ $post->created_at->diffForHumans() }}</span></span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-gray-600 bg-secondary-50">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
