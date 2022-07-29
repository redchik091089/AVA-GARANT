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
                        @foreach($shtori as $shtora)
                            <div class="col-lg-4 col-md-4 col-sm-4 float">
                                <a href="/product/{{ $shtora->id }}" rel="nofollow"><img src="{{ $shtora->image_1 }}" alt=""></a>
                                <h6><a href="/product/{{ $shtora->id }}">{{ $shtora->prod_name }}</a></h6>
                                <p class="nrdr2"><span>{{ $shtora->price }}</span> </p>
                                {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                            </div>
                        @endforeach
                    </div>
                     {{ $shtori->links('pagination.default') }}
                </div>

            </div>
        </noindex>
    </div>



@endsection
