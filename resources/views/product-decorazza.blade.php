@extends('layouts.all')

@php
    $title = (!empty($product['seo_title']))?$product['seo_title']:$product['title'];
    $description = (!empty($product['seo_description']))?$product['seo_description']:$product['title'];;
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
                        @foreach ($galery as $item)
                            <swiper-slide><img src="{{$item->link}}" alt="{{$product->title}} рисунок {{$loop->index}}"></swiper-slide>
                        @endforeach



                    </swiper>
                </div>

                <div class="tovarinfo__side">
                    <div class="tovar_description text_styles">
                        <h3>Краткое описание</h3>
                        {!! $product->short_description !!}
                    </div>

                    <div class="adv_list">
                        <ul>
                            @foreach ( $product->advantages as $key => $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="pack_blk">
                        <div class="pack_blk_element">
                            <div class="img_wrap">
                                <img src="{{$product->img}}" alt="Внешний вид упаковки ">
                            </div>

                            <div class="text">
                                <span>Упаковка</span>
                            </div>
                        </div>

                        <div class="pack_blk_element">
                            <div class="img_wrap">
                                <img src="{{$product->color_img}}" alt="Цвет  {{$product->color_name}}">
                            </div>

                            <div class="text">
                                <span><b>Цвет:</b><br/><br/>{{$product->color_name}}</span>
                            </div>
                        </div>

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
                            <to-bascet-btn-page bascet="{{route('bascet')}}" sku="{{$product->sku}}"></to-bascet-btn-page>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    @if (!empty($all_colors))
        <section class="product_page_section">
            <div class="_container">
                <h2 class="title">Все товары данное серии</h2>
                <div class="textures">
                    @foreach ($all_colors as $item)
                        <x-tovar-page.color :tovar="$item"></x-tovar-page.color>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    <x-consultation-mini></x-consultation-mini>

@endsection
