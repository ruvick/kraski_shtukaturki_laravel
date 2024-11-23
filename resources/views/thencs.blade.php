@extends('layouts.all')

@php
    $title = "Благодарим за заказ";
    $description = "Благодарим за заказ мы свяжемся с Вами в ближайшее время";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<x-tovar-page.head :h1="$title"></x-tovar-page.head>

<x-breadcrumbs :title="$title"></x-breadcrumbs>

<section class="thencs_section">
    <div class="_container">
        <div class="thencs_message">

            <x-svg.thencs-icon></x-svg.thencs-icon>

            <p>Наши специалисты свяжутся с Вами в самое ближайшее время!</p>
        </div>
    </div>
</section>

@endsection
