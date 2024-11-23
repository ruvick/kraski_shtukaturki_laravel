@extends('layouts.all')

@php
    $title = "Понравившиеся товары";
    $description = "Понравившиеся товары";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-head-page :h1="$title"></x-head-page>

    <x-breadcrumbs :title="$title"></x-breadcrumbs>

    <section class="favorites_input_section">
        <div class="_container">
            <favorites></favorites>
        </div>
    </section>

@endsection
