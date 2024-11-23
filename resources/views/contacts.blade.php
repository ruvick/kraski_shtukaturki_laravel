@extends('layouts.all')

@php
    $title = "Контактная информация";
    $description = "Свяжитесь с нами любым удобным для Вас способом и наши специалисты ответят на все интересующие Вас вопросы";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-head-page h1="Контакты"></x-head-page>
    <x-breadcrumbs :title="$title"></x-breadcrumbs>

    <section class="contact_page_section">
        <div class="_container">


            <a href="tel:+7{{phone_format($options['phone'])}}" class="phone_in_pzge">{{$options['phone']}}</a>

            <p><strong>e-mail:</strong> {{$options['email']}}</p>
            <p><strong>Адрес:</strong> {{$options['adress']}}</p>

            <yandex-map coordinate="{{$options['office_coordinate']}}" adress="<b>Краски-и-Штукатурки.рф.ru</b><br>{{$options['adress']}}"></yandex-map>
        </div>
    </section>


@endsection
