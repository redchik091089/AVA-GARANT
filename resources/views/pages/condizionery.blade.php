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
                        @foreach($condizionery as $condizioner)
                            <div class="col-lg-4 col-md-4 col-sm-4 float">
                                <a href="/product/{{ $condizioner->id }}" rel="nofollow"><img src="{{ $condizioner->image_1 }}" alt=""></a>
                                <h6><a href="/product/{{ $condizioner->id }}">{{ $condizioner->prod_name }}</a></h6>
                                <p class="nrdr2"><span>{{ $condizioner->price }}</span> руб.</p>
                                {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                            </div>
                        @endforeach
                    </div>
                 {{ $condizionery->links('pagination.default') }}

                </div>

            </div>
        </noindex>
    </div>



@endsection
