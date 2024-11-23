@extends('layouts.all')

@php
    $title = "Услуги нашей компании";
    $description = "Наша компания оказывает услуги по ремонту и отделке различных помещений с применением специализированных материалов";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<section class="banner-services banner">
	<div class="nuar_blk"></div>
	<div class="_container">

		<h1 class="banner-category__title">
			Сервисные услуги
		</h1>

	</div>
</section>

<section class="page__categoty-top-sec categoty-top-sec section">
	<div class="_container">

	<div class="categoty-top-sec__breadcrumbs">
	<p id="breadcrumbs">
	<span>
		<span>
			<a href="index.html">
				Главная
			</a> /
			<span class="breadcrumb_last" aria-current="page">
				Сервисные услуги
			</span>
		</span>
	</span>
</p>
	</div>

	</div>
</section>

<section class="page__services services section">
	<div class="_container">

		<h2 class="services__title">
			Услуги
		</h2>

		<div class="services__inner">

			<a href="#" class="services__card card-services card-services_01">
				<div class="card-services__descp">
					<h3 class="card-services__title">Услуга 1</h3>
				</div>
			</a>

			<a href="#" class="services__card card-services card-services_02">
				<div class="card-services__descp">
					<h3 class="card-services__title">Услуга 2</h3>
				</div>
			</a>

			<a href="#" class="services__card card-services card-services_01">
				<div class="card-services__descp">
					<h3 class="card-services__title">Услуга 3</h3>
				</div>
			</a>

			<a href="#" class="services__card card-services card-services_02">
				<div class="card-services__descp">
					<h3 class="card-services__title">Услуга 4</h3>
				</div>
			</a>

		</div>

	</div>
</section>

@endsection
