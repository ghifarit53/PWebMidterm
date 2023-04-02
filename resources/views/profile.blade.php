@extends('layouts.main')

@section('container')
    <body class="bg-gray-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-10">
            <!-- Profile header -->
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center">
                    <img class="h-24 w-24 rounded-full object-cover" src="https://via.placeholder.com/150" alt="">
                    <h2 class="mt-4 text-xl font-bold">John Doe</h2>
                    <p class="text-gray-600">Department: Marketing</p>
                </div>
            </div>

            <!-- Edit profile form -->
            <div class="mt-10">
                <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <form action="#" method="POST">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Profile information</h3>
                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="name">
                                            Name
                                        </label>
                                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="John Doe" value="John Doe">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="department">
                                            Department origin
                                        </label>
                                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="department" name="department" type="text" placeholder="Marketing" value="Marketing">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 font-bold mb-2" for="profile-picture">
                                            Profile picture
                                        </label>
                                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile-picture" name="profile-picture" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 sm:px-6">
                                <button class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </body>

@endsection
