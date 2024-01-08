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
            {{-- <button class="p-4 border-2 border-gray-300 rounded-md text-lg font-bold" type="submit" name="action"
                value="buy_now">Rent
                now</button> --}}


            <a href="{{ route('rent.show', $car['id']) }}">Rent now</a>

        </div>
        <div>
            <img src="{{ $car['img'] }}" alt="">
        </div>
    </div>

    @if ($rentStatus ?? false)
        <form action="" class="text-md absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-6xl font-bold z-2 bg-gray-300 rounded-md p-8 w-2/3 h-2/3">
            {{-- transparent bg --}}
            <input type="text" class="placeholder:text-md w-[300px] placeholder:font-light  h-[50px] border-b-2 border-black" placeholder="Name">
            <input type="text" class="placeholder:text-md w-[300px] placeholder:font-light  h-[50px] border-b-2 border-black" placeholder="Name">
            <input type="text" class="placeholder:text-md w-[300px] placeholder:font-light  h-[50px] border-b-2 border-black" placeholder="Name">
            <input type="text" class="placeholder:text-md w-[300px] placeholder:font-light  h-[50px] border-b-2 border-black" placeholder="Name">
        </form>
    @endif
@endsection
