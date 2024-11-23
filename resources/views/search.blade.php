@extends('layouts.all')

@php
    $title = "Результаты поиска по запросу: ".$search_str;
    $description = "Результаты поиска по запросу: ".$search_str;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-category.banner :h1="'Поиск по запросу: '.$search_str"></x-category.banner>

<x-breadcrumbs :title="'Поиск по запросу: '.$search_str"></x-breadcrumbs>

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
