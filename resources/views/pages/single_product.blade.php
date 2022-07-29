@extends('layouts.master')

@section('css')

    <link rel="stylesheet" href="css/styleprices.css">

@endsection


@section('content')

    <div class="page-content shadow">
        <div class="main" itemscope="" itemtype="http://schema.org/Article">

<span itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
<meta itemprop="name" content="Star-Potolok">
<span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
<link itemprop="url" href="https://star-potolok.ru/image/data/logo.jpg">
</span>
</span>

            <meta itemprop="author" content="Star-Potolok">
            <meta itemprop="datePublished" content="2019-05-08 03:41:49">

            <div class="container">
            <h1 itemprop="headline name" style="margin-top: 30px;margin-bottom: 30px; font-size: 35px;">{{ $product->prod_name }}</h1>
            <div itemprop="articleBody">
                <div class="prodsflex mainflex">
                    <div class="prodflex_left gallery-box">
                        <a href="{{ $product->image_1 }}" onclick="return hs.expand(this);"><img alt="" class="lazy" data-="" src="{{ $product->image_1 }}" style="max-width:100%;height:auto;margin-bottom: 45px;"> </a> @if($product->subcategory_id == 19 or $product->subcategory_id == 20 or $product->subcategory_id == 21 or $product->subcategory_id == 22 or $product->subcategory_id == 23 or $product->subcategory_id == 24 or $product->subcategory_id == 25 or $product->subcategory_id == 26 or $product->subcategory_id == 27)<p style="color: #d7cb1e;font-weight: bold;font-size: 30px;float: right;"><span>Цена - {{ $product->price }}</span> руб.</p> @endif</div>
                    <div class="prodsflex_right">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            <br clear="all">


            <br>



            </div>

        </div>
    </div>

@endsection


@section('tag_js')

    <script src="js/tag.js"></script>

@endsection
