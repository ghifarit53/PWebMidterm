@extends('layouts.main')

@section('container')

    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md">
            <h1 class=" text-its text-3xl font-bold text-center mb-4 flex flex-col items-center justify-center" style="color: rgb(2,56,128)">
                reddITS
            </h1>
            <form class="bg-white shadow-lg rounded px-8 py-6 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="department">
                        Department
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="department" type="department" placeholder="Department">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="confirm-password">
                        Confirm Password
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="confirm-password" type="password" placeholder="Confirm Password">
                </div>
                <div class="flex items-center justify-between">
                    <a href="/login" class="mt-1 inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-its-blue hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700" type="submit" >
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection
