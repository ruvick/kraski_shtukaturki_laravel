@extends('layouts.all')

@php
    $title = "Выполненные проекты";
    $description = "Проекты выполненные нашей компание. Подбор покрытия, колеровка, нанесение";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <x-head-page h1="Контакты"></x-head-page>
    <x-breadcrumbs :title="$title"></x-breadcrumbs>

    <section class="project_page_section">
        <div class="_container">
        </div>
    </section>
@endsection
