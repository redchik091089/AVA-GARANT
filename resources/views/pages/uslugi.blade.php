@extends('layouts.master')

@section('css')

    <link rel="stylesheet" href="/css/styleprices.css">

@endsection


@section('content')


    <div class="all">
        <noindex>
            <div class="section-content">
                <h1>{{ $title }}</h1>
                <div class="main">
                    <div class="potolki-item">
                        @foreach($uslugi as $usluga)
                            <div class="col-lg-4 col-md-4 col-sm-4 float">
                                <a href="/product/{{ $usluga->id }}" rel="nofollow"><img src="{{ $usluga->image_1 }}" alt=""></a>
                                <h6><a href="/product/{{ $usluga->id }}">{{ $usluga->prod_name }}</a></h6>
                                @isset($usluga->price)<p class="nrdr2"><span>{{ $usluga->price }}</span> руб.</p>@endisset
                                {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </noindex>
    </div>



@endsection
