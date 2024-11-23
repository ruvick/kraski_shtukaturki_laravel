<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title') - Краски и Штукатурки</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Краски и Штукатурки" />
    <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />

	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/logo-main.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',

				'public/fonts/fonts.css',

                'public/css/main.css',

				'public/scss/mixin.scss',
				'public/scss/null.scss',
				'public/scss/forms.scss',
				'public/scss/ui.scss',
				'public/scss/map.scss',
				'public/scss/popup.scss',
				'public/scss/main.scss',
				'public/scss/header.scss',
				'public/scss/footer.scss',
				'public/scss/media.scss',
				'public/scss/tovar-page.scss', 
				'public/scss/services.scss',

        'public/css/header.css',
        'public/css/banner.css',
        'public/css/product-card.css',
        'public/css/advantages.css',
        'public/css/category.css',
        'public/css/cta-blk.css',
        'public/css/footer.css',
				'public/js/main.js',
    ])

</head>

<body>
	<div class="wrapper" id="global_app">
        <x-header></x-header>

        <main class="page">

        @yield('content')

        </main>

        <x-footer></x-footer>
    </div>
</body>

</html>
