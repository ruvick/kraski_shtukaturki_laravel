@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-tovar-page.head :h1="$product['title']"></x-tovar-page.head>

    <x-breadcrumbs :tovar="$product" :category="$category"></x-breadcrumbs>

    <section class="product_page_section">
        <div class="_container">
            <div class="tovarinfo">
                <div class="tovarinfo__side">
                    <swiper
                        :slides-per-view="1"
                        :pagination="{
                            clickable: true,
                          }"
                        :modules="modules"
                    >
                        <swiper-slide><img src="{{$product->img}}" alt="{{$product->title}}"></swiper-slide>
                        <swiper-slide><img src="{{$product->img}}" alt="{{$product->title}}"></swiper-slide>

                    </swiper>
                </div>

                <div class="tovarinfo__side">
                    <div class="tovar_description text_styles">
                        {!! $product->description !!}
                    </div>

                    <div class="param">
                        @foreach ( $product->props as $key => $item)
                            <x-tovar-page.tovar-param :key="$key" :item="$item"></x-tovar-page.tovar-param>
                        @endforeach

                    </div>

                    <div class="sales__action">
                        <div class="price">
                            <span class="price__main">
                                {{$product->price}} руб.
                            </span>

                            @if ($product->old_price)
                                <span class="price__old">
                                    {{$product->old_price}}  руб.
                                </span>
                            @endif

                        </div>

                        <div class="like">
                            <to-favorites-btn sku="{{$product->sku}}"></to-favorites-btn>
                        </div>

                        <div class="sale_btn">
                            <a href="#" class="fill_btn">Добавить в корзину</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    @if (!empty($textura))
        <section class="product_page_section">
            <div class="_container">
                <h2 class="title">Фактуры для материала</h2>
                <div class="textures">
                    @foreach ($textures as $item)
                        <x-tovar-page.texture :textura="$item"></x-tovar-page.texture>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    <x-consultation-mini></x-consultation-mini>

@endsection
