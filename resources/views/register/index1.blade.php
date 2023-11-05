@extends('layouts.app')


@section('conten')
    <div class="max-w-xl py-6 px-8 h-90 mt-20 bg-white rounded shadow-md shadow-purple-800 mx-auto">

        @if ($message = Session::get('success'))
            <div class="relative py-3 pl-4 pr-10 leading-normal text-purple-700 bg-purple-100 rounded-lg" role="alert">
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

        <form action="/register/action" method="post">
            @csrf

            <h2 class="text-xl font-bold text-gray-800 text-center">Register Form</h2>
            <div class="mb-4">
                <label for="name" class="block text-gray-800 font-bold">Name </label>
                <input type="text" name="name" id="name" placeholder="username" autofocus value="{{ old('name') }}"
                    class="w-full  border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-purple-800 :ring-purple-800" />
                @error('name')
                    <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-bold">Email:</label>
                <input type="text" name="email" id="email" placeholder="@email" value="{{ old('email') }}"
                    class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-purple-800 :ring-purple-800" />
                @error('email')
                    <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-800 font-bold">Password</label>
                <input type="password" name="password" id="password" placeholder="password"
                    class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-purple-800 :ring-purple-800" />
                @error('password')
                    <div class="text-sm font-thin text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button
                class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-full text-center rounded">Register</button>
            <span>Already have an account?</span>
            <a href="/login"
                class="text-sm text-semibold font-thin text-blue-600 hover:underline mt-2 inline-block hover:text-indigo-600">Login</a>
        </form>
    </div>
@endsection
