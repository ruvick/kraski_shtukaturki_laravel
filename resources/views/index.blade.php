@extends('layouts.all')

@php
    $title = "Краски иштукатурки по выгодным ценам в Курске";
    $description = "Краски иштукатурки по выгодным ценам в Курске";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

<section class="page__main-banner main-banner section">
	<div class="nuar_blk"></div>
	<div class="_container">

		<h1 class="main-banner__title">
			ДЕКОРАТИВНЫЕ
			ШТУКАТУРКИ
			MADE IN ITALY
		</h1>

	</div>
</section>

<section class="page__popular popular section">
	<div class="_container">
		<h2 class="popular__title title">Популярные товары</h2>

		<div class="popular__inner d-flex">


            @foreach ( $sales_liders as $item)
                <x-product-card :item="$item"></x-product-card>
            @endforeach

		</div>

		<div class="popular__btn-block">
			<button type="submit" class="popular__btn-all btn">Посмотреть все</button>
		</div>

	</div>
</section>

<x-categories></x-categories>

<section class="page__advantages-slider advantages-slider section">
	<div class="_container">
		<h2 class="advantages-slider__title title">Наши преимущества</h2>

		<div class="advantages-slider__inner d-flex">
		    <x-advantages stylem="adv_quality" color="green" text="Высокое качество материалов - только высококачественная штукатурка, которая обеспечивает прочное и долговечное покрытие" ></x-advantages>
		    <x-advantages stylem="adv_estet" color="brick" text="Эстетическая привлекательность - наши краски и штукатурки создают элегантный и уникальный вид в вашем доме или офисе"></x-advantages>
		    <x-advantages stylem="adv_select" color="green" text="Разнообразие оттенков - у нас вы найдете широкий выбор цветов и оттенков, чтобы подобрать идеальный вариант, отвечающий вашим предпочтениям"></x-advantages>
		    <x-advantages stylem="adv_strong" color="brick" text="Устойчивость к воздействию - наша штукатурка и краска обладает высокой стойкостью к механическим повреждениям и воздействию влаги"></x-advantages>
		    <x-advantages stylem="adv_uhod" color="green" text="Простота ухода - поверхность, покрытая штукатуркой, легко чистится и обслуживается, что позволяет вам сохранять красивый вид вашего интерьера"></x-advantages>
		    <x-advantages stylem="adv_servic" color="brick" text="Профессиональное обслуживание - наша команда опытных специалистов всегда готова предоставить вам профессиональные консультации"></x-advantages>
		</div>
	</div>
</section>


<x-consultation></x-consultation>


<section class="page__popular popular section">
	<div class="_container">
		<h2 class="popular__title title">Товары со скидкой</h2>

		<div class="popular__inner d-flex">

            @foreach ( $sales as $item)
                <x-product-card :item="$item"></x-product-card>
            @endforeach

		</div>

		<div class="popular__btn-block">
			<button type="submit" class="popular__btn-all btn">Посмотреть все</button>
		</div>

	</div>
</section>

<section class="page__slider-advantages slider-advantages section">
	<div class="_container">
		<h2 class="slider-advantages__title title">Наши преимущества</h2>
		</div>

		<div class="slider-advantages__slider advantagesSl ">
		<swiper
			:observer= "true"
      :slides-per-view="2"
			:space-between= "104"
			:centered-slides= "true"
			:loop= "true"
			:navigation=" {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			}"
      :modules="modules"
			>
      <swiper-slide><img src="img/advant-slider/01.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="img/main-banner.jpg" alt=""></swiper-slide>
			<swiper-slide><img src="img/main-banner.jpg" alt=""></swiper-slide>
			<swiper-slide><img src="img/advant-slider/01.jpg" alt=""></swiper-slide>
			<swiper-slide><img src="img/main-banner.jpg" alt=""></swiper-slide>
			<swiper-slide><img src="img/main-banner.jpg" alt=""></swiper-slide>
    </swiper>

		<div class="slider-advantages__slider-buttons">
			<button class="swiper-button swiper-button-next"></button>
  		<button class="swiper-button swiper-button-prev"></button>
		</div>


		</div>

		<div class="slider-advantages__btn-block">
			<a href="#" class="slider-advantages__btn btn">Все проекты</a>
		</div>

	<!-- </div> -->
</section>


<section class="page__about about section">
	<div class="_container">
		<h2 class="about__title title">О нас</h2>
		<div class="about__subtitle">
			{!! $options["about_main"] !!}
		</div>
	</div>
</section>


@endsection
