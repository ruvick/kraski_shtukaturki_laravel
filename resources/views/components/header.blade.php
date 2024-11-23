<header id="header" class="header">

    <x-header-menu></x-header-menu>

	<div class="header__bottom">
		<div class="header__bottom-container _container">

			<a href="{{route('home')}}" class="logo-icon header__logo">
                <x-svg.logo></x-svg.logo>
			</a>

			<div class="search header__search">
				<form role="search" method="GET" action="{{route('show_search_page')}}" id="searchform" class="search__form">
					<input type="text" placeholder="Поиск" class="search__input input" value="" name="search_str" id="s">
					<button type="submit" tabindex="2" value="" id="searchsubmit" class="search__btn"></button>
				</form>
			</div>

            <button class="mob-search-btn header__mob-search-btn"></button>

			<a href="{{route('favorites')}}" class="header__favorit favorit">
                <x-svg.favorites></x-svg.favorites>
                <favorites-counter></favorites-counter>
				Избранное
			</a>

			<a href="{{route('bascet')}}" class="header__bascet bascet">
                <x-svg.bascet></x-svg.bascet>
                <bascet-counter></bascet-counter>
				Корзина
			</a>

				<button type="button" class="icon-menu" aria-label="Иконка бургера">
					<span></span>
					<span></span>
					<span></span>
				</button>

		</div>
	</div>

</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<x-header-menu-punkts></x-header-menu-punkts>
	</ul>
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>

<!-- Строка мобильного поиска -->
<div class="search header__search-mob">
	<form role="search" method="get" action="" id="searchform" class="search__form">
		<input type="text" class="search__input input" placeholder="Поиск" value="" name="s"
			id="s">
		<button type="submit" id="searchsubmit" class="search__btn" tabindex="2" value=""></button>
	</form>
</div>
