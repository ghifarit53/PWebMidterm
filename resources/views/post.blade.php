@extends('layouts.main')

@section('container')
    <a href="/">Back</a>

    <div class="bg-gray-100 p-6 rounded-2xl mt-8">
      <p class="text-gray-400">{{ $post["user"] }} on {{ $post["date"] }} at {{ $post["time"] }}</p>
      <h1 class="mt-4 text-3xl font-bold">{{ $post["text"] }}</h1>

      <div class="mt-8 flex space-x-4 items-center">
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
@endsection
