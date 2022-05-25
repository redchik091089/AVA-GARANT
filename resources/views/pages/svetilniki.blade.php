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
                        @foreach($svetilniki as $svetilnik)
                            <div class="col-lg-4 col-md-4 col-sm-4 float">
                                <a href="/single/{{ $svetilnik->id }}" rel="nofollow"><img src="{{ $svetilnik->image_1 }}" alt=""></a>
                                <h6><a href="/single/{{ $svetilnik->id }}">{{ $svetilnik->prod_name }}</a></h6>
                                <p class="nrdr2"><span>{{ $svetilnik->price }}</span> руб.</p>
                                {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </noindex>
    </div>



@endsection
