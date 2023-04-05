@extends('layouts.main')

@section('container')
  <h1 class="text-3xl font-bold">
    Home
  </h1>

  @if (count($posts) > 0)
    @foreach ($posts as $post)
      <div class="bg-gray-100 my-6 p-6 max-w-3x rounded-2xl">
        <a href="/profile/{{ $post->user->username }} " class ="text-its-blue font-bold">{{ $post->user->username }}</a>
        <span class="text-gray-400"> on {{ $post->created_at->format('M d, Y') }} at {{ $post->created_at->format('h:i A') }}</span>
        <a>
          <h2 class="text-xl font-medium mt-4 mb-2">{{ $post->text }}</h2>
        </a>
          <a href="/post/{{ $post->slug }}" class="flex space-x-1 items-center">
              <span class="material-icons" style="font-size:20px">comment</span>
              <span>0</span>
          </a>
      </div>
    @endforeach
  @endif


@endsection
