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
                            <a href="/single/{{ $product->id }}" rel="nofollow"><img src=@if($product->id == 4 or $product->id == 5 or $product->id == 6 or $product->id == 15)"{{ $product->image_2 }}"@else"{{ $product->image_1 }}"@endif alt=""></a>
                            <h6><a href="/single/{{ $product->id }}">{{ $product->prod_name }}</a></h6>
                            @isset($product->price)
                            <p class="nrdr2"><span>{{ $product->price }}</span> руб.</p>
                            @endisset
                            {{--                        <a href="/primery/dvuxurovnevye-potolki-s-podsvetkoj/" rel="nofollow" class="order nrdr">Заказать</a>--}}
                        </div>
                    @endforeach
                </div>
                {{ $products->links('pagination.default') }}
            </div>

        </div>
    </noindex>
</div>


@endsection


@section('tag_js')

    <script src="js/tag.js"></script>

@endsection
