@extends('layouts.main')

@section('content')
    <div class="flex mt-24 p-20 justify-center gap-8 shadow-lg rounded-md">
        <div class="flex flex-col justify-center gap-4">
            <h2 class="text-5xl font-bold">{{ $car['name'] }}</h2>
            <ul class="font-light text-2xl">
                <li>Year: {{ $car['year'] }}</li>
                <li>Transmission: {{ $car['transmission'] }}</li>
                <li>Fuel: {{ $car['fuel'] }}</li>
            </ul>
            <h3 class="font-medium text-2xl text-center">Price: {{ $car['price'] }}$ / day</h3>
        </div>
        <div>
            <img src="{{ $car['img'] }}" alt="">
        </div>
    </div>
@endsection
