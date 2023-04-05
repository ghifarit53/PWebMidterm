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
      <a href="/post/{{ $post->slug }}">
        <h2 class="text-xl font-semibold mt-4">{{ $post->text }}</h2>
      </a>

      <a href=""></a>
    @endforeach
  @endif


@endsection
