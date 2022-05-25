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
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-4 float">
                            <a href="/single/{{ $product->id }}" rel="nofollow"><img src="{{ $product->image_1 }}" alt=""></a>
                            <h6><a href="/single/{{ $product->id }}">{{ $product->prod_name }}</a></h6>
                            <p class="nrdr2"><span>{{ $product->price }}</span> руб.</p>
                            {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </noindex>
</div>


@endsection


@section('tag_js')

    <script src="js/tag.js"></script>

@endsection
