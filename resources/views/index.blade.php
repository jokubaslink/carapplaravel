@extends('layouts.main')

@section('content')
    <div class="flex flex-col p-8">
        <div class="flex flex-col items-center justify-center mb-8">
            <h1 class="text-5xl font-medium">Welcome to Car App!</h1>
            <p class="text-xl font-light">The greatest car rental agency.</p>
        </div>
        <figure class="w-1/3  m-auto">
            <img class="w-full" src="./images/undraw_order_a_car_-3-tww.svg" alt="">
        </figure>
        <ul class="flex items-center w-full justify-around mt-20">
            <li class="text-2xl font-light hover:border-b-2 hover:border-gray-200"><a href="/cars">View our car
                    selection</a></li>
            <li class="text-2xl font-light hover:border-b-2 hover:border-gray-200"><a href="/about">Get to know more about
                    us</a></li>
        </ul>
    </div>
@endsection
