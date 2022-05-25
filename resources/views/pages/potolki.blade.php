@extends('layouts.master')


@section('content')

    <div class="container">
        @foreach($potolki as $potolok)
        <div class="text">
            <h1>{{ $potolok->prod_name }}</h1>
            <p>{{ $potolok->description }}</p>
        </div>
        <div class="img_pot">
            <img src="{{ $potolok->image_1 }}" alt="#"/>
        </div>
        <div class="img_pot">
            <img src="{{ $potolok->image_2 }}" alt="#"/>
        </div>
        <div class="img_pot">
            <img src="{{ $potolok->image_3 }}" alt="#"/>
        </div>
        @endforeach
    </div>



@endsection
