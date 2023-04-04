@extends('layouts.main')

@section('container')
    <div class="inline-flex">
        <img class="h-20 w-20 rounded-full object-cover mr-2" src="https://via.placeholder.com/150" alt="">
        <h1 class="text-3xl font-bold">{{ $username }}</h1>
    </div>
@endsection