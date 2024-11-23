@extends('layouts.all')

@php
    $title = "Политика конфиденциальности";
    $description = "Политика конфиденциальности и обработки персональных данных";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <section class="page_section text_styles">
        <div class="_container">
            {!! $options['policy'] !!}
        </div>
    </section>
@endsection
