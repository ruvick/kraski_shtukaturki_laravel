@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-category.banner h1="Каталог продукции"></x-category.banner>

<x-breadcrumbs title="Каталог"></x-breadcrumbs>

<section class="categoty-top-sec">
	<div class="_container">
        <x-category.all-cat curenname="Каталог продукции" ></x-category.all-cat>
	</div>
</section>

<section class="category-sec section">
	<div class="_container">

        <div class="category-sec__wrap">

            <x-filter.sidebar-filter></x-filter.sidebar-filter>

            <div class="category-sec__main main-category">
                <div class="main-category__inner">
                    @foreach ($products as $item)
                        <x-product-card :item="$item"></x-product-card>
                    @endforeach
                </div>
                <x-pagination :tovars="$products"></x-pagination>
	        </div>

        </div>
	</div>
</section>

@endsection
