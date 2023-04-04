@extends('layouts.main')

@section('container')
  <h1 class="text-3xl font-bold">
    Home
  </h1>

  @foreach ($posts as $post)
    <div class="bg-gray-100 mt-8 p-6 max-w-3x rounded-2xl">
      <p class="text-gray-600 text-sm mb-2">&#64;{{ $post["user"] }} on {{ $post["date"] }} at {{ $post["time"] }}</p>
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
