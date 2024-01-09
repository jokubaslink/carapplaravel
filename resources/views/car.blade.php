@extends('layouts.main')

@section('content')
    <div class="flex flex-col mt-24 p-20 justify-center gap-8 shadow-lg rounded-md">
        <div class="flex w-full items-center justify-between">
            <div class="flex flex-col gap-4 w-full">
                <h2 class="text-5xl font-bold">{{ $car['name'] }}</h2>
                <ul class="font-light text-2xl">
                    <li>Year: {{ $car['year'] }}</li>
                    <li>Transmission: {{ $car['transmission'] }}</li>
                    <li>Fuel: {{ $car['fuel'] }}</li>
                </ul>
                <h3 class="font-medium text-2xl ">Price: {{ $car['price'] }}$ / day</h3>

                @if(!$confirmation ?? false)
                <a class="text-center bg-gray-200 text-lg font-md p-3 w-2/3" href="{{ route('rent.car', $car['id']) }}">Rent now</a>
                @endif
            </div>
            <div class="w-full">
                <img src="{{ $car['img'] }}" alt="">
            </div>
        </div>
        @if ($confirmation ?? false)
            <p class="text-green-300 font-light text-md">{{ $confirmation }}</p>
        @endif
    </div>


    @if ($rentStatus ?? false)
        <x-rent-form-component :car="$car" />
    @endif
@endsection
