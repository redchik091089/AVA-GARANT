@extends('layouts.master')


@section('content')

    <div class="container">
        @foreach($potolki as $potolok)
        <div class="text">
            <h1>{{ $potolok->prod_name }}</h1>
            <p>{{ $potolok->description }}</p>
        </div>
             @isset($potolok->image_1)
        <div class="img_pot">
            <img src="{{ $potolok->image_1 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_2)
         <div class="img_pot">
            <img src="{{ $potolok->image_2 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_3)
            <div class="img_pot">
            <img src="{{ $potolok->image_3 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_4)
            <div class="img_pot">
            <img src="{{ $potolok->image_4 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_5)
            <div class="img_pot">
            <img src="{{ $potolok->image_5 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_6)
        <div class="img_pot">
            <img src="{{ $potolok->image_6 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_7)
        <div class="img_pot">
            <img src="{{ $potolok->image_7 }}" alt="#"/>
        </div>
            @endisset
            @isset($potolok->image_8)
        <div class="img_pot">
            <img src="{{ $potolok->image_8 }}" alt="#"/>
        </div>
            @endisset

        @endforeach
    </div>



@endsection
