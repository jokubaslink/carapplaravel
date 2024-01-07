@extends('layouts.main')

@section('content')
    <div class="grid grid-cols-3 items-center justify-between">
        @foreach ($masinos as $masina)
            <figure class="rounded-md p-8 border-2 border-gray-300 flex items-center justify-center">
                <figcaption>{{ $masina['name'] }}</figcaption>
                <img src="{{ $masina['img'] }}" alt="">
            </figure>
        @endforeach

    </div>
@endsection
