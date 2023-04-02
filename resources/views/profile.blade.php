@extends('layouts.main')

@section('container')
    <div class="flex">
        <img class="flex-none h-10 w-10 rounded-full object-cover mr-2" src="https://via.placeholder.com/150" alt="">
        <h1 class="text-3xl font-bold mb-2">
            {{$author}}
        </h1>
    </div>
    <div>
        <h1 class="font-medium text-xm mt-2">
            Informatics Engineering
        </h1>
    </div>

    <div>
        <a href="/profile/change" class="mt-1 inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit" >
            Edit Profile
        </a>

    </div>

    <div class="flex-col">
        @foreach ($posts as $post)
            <div class="bg-gray-100 my-8 p-6 rounded-2xl max-w-4xl">
                <p class="text-gray-600 text-sm mb-2">&#64;{{ $post["author"] }} on {{ $post["date"] }} at {{ $post["time"] }}</p>
                <a href="/post/{{ $post["slug"] }}">
                    <h2 class="text-xl font-medium mb-6">{{ $post["text"]}}</h2>
                </a>
                <div class="flex space-x-4 items-center">
                    <div class="flex space-x-1 items-center">
                        <span class="material-icons" style="font-size:20px">arrow_upward</span>
                        <span>32</span>
                    </div>

                    <div class="flex space-x-1 items-center">
                        <span class="material-icons" style="font-size:20px">arrow_downward</span>
                        <span>2</span>
                    </div>

                    <div class="flex space-x-1 items-center">
                        <span class="material-icons" style="font-size:20px">comment</span>
                        <span>6</span>
                    </div>
                </div>
            </div>
        @endforeach


@endsection

