@extends('layouts.main')

@section('container')
  <h1 class="text-3xl font-bold">
    Profile for {{ $username }}
  </h1>
  <ul>
    <li>
      <span class="font-bold text-blue-500">Name &emsp;</span>
      <span>{{ $name }}</span>
    </li>
    <li>
      <span class="font-bold text-blue-500">Email &emsp;</span>
      <span>{{ $email }}</span>
    </li>
  </ul>
@endsection
