@extends('layouts.main')

@section('container')
    <div class="flex">
        <img class="flex-none h-10 w-10 rounded-full object-cover mr-2" src="https://via.placeholder.com/150" alt="">
        <h1 class="text-3xl font-bold mb-2">
            {{$user}}
        </h1>
    </div>
    <div>
        <h1 class="font-medium text-xm mt-2">
            Informatics Engineering
        </h1>
    </div>
@endsection
