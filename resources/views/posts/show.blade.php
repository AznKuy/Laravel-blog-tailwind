@extends('layouts.app')

@section('conten')
    <!-- component -->
    <div class="max-w-screen-lg mx-auto">
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 lg:px-0">
                    <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                        {{ $posts->title }}
                    </h2>
                    <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2">
                        Cryptocurrency
                    </a>
                </div>

                <img class="w-full rounded" src="https://source.unsplash.com/random/?programming" alt="programming"
                    class="w-full object-cover lg:rounded" style="height: 28em;" />
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-12">

                <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    <p class="pb-6">
                        {{ $posts->content }}
                    </p>

                </div>
                <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                    <div class="p-4 border-t border-b md:border md:rounded">
                        <div class="justify-around flex flex-row">
                            <a href="/posts/edit/{{ $posts->id }}" class="relative inline-block text-lg group">
                                <span
                                    class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-green-900 transition-colors duration-300 ease-out border-2 border-green-900 rounded-lg group-hover:text-white">
                                    <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                    <span
                                        class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-green-900 group-hover:-rotate-180 ease"></span>
                                    <span class="relative"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                </span>
                                <span
                                    class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-green-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                                    data-rounded="rounded-lg">
                                </span>
                            </a>

                            <a href="/posts/delete/{{ $posts->id }}" class="relative inline-block text-lg group">
                                <span
                                    class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-red-900 transition-colors duration-300 ease-out border-2 border-red-900 rounded-lg group-hover:text-white">
                                    <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                                    <span
                                        class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-red-900 group-hover:-rotate-180 ease"></span>
                                    <span class="relative"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                </span>
                                <span
                                    class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-red-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                                    data-rounded="rounded-lg"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <a href="/posts/" class="relative inline-block text-lg group mb-5">
                <span
                    class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
                    <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
                    <span
                        class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
                    <span class="relative">Back</span>
                </span>
                <span
                    class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0"
                    data-rounded="rounded-lg"></span>
            </a>
        </main>
        <!-- main ends here -->
    </div>
@endsection
