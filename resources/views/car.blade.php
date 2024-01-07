@extends('layouts.main')

@section('content')
    <div class="flex items-center justify-center">
        <div>
            <h2>{{ $car['name'] }}</h2>
            <ul>
                <li>{{ $car['year'] }}</li>
                <li>{{ $car['transmission'] }}</li>
                <li>{{ $car['fuel'] }}</li>
            </ul>
            <h3>{{ $car['price'] }}$ / day</h3>
        </div>
        <div>
            <img src="{{ $car['img'] }}" alt="">
        </div>
    </div>
@endsection
