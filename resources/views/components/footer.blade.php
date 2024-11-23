<footer class="footer">
	<div class="footer__container _container">

		<div class="footer__top d-flex">

		<div class="footer__col">
			<a href="{{route('home')}}" class="logo-icon footer__logo">
                <x-svg.logo-white></x-svg.logo-white>
			</a>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Меню</a></h3>
			<ul class="footer__menu">
				<x-footer-menu-punkts></x-footer-menu-punkts>
			</ul>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Контакты</a></h3>
			<ul class="footer__menu">
				<li class="footer__menu-item">Телефон: <a href="tel:+7{{phone_format($options['phone'])}}" class="footer__menu-link">{{$options['phone']}}</a></li>
				<li class="footer__menu-item">E-mail: <a href="mailto:adress@mail.ru" class="footer__menu-link">{{$options['email']}}</a></li>
				<li class="footer__menu-item">Адрес: <a href="#" class="footer__menu-link">{{$options['adress']}}</a></li>
			</ul>
			<div class="footer__social social-footer">
				<p class="social-footer__text">Присоединяйтесь</p>
				<a href="{{$options['telegram_lnk']}}" class="social-footer__link tg-icon"></a>
				<a href="{{$options['vk_lnk']}}" class="social-footer__link vk-icon"></a>
			</div>
			<div class="footer__payment payment-footer">
				<h3 class="payment-footer__title">Принимаем к оплате</h3>
				<div class="payment-footer__inner">
				<span class="payment-footer__logo logo-visa"></span>
				<span class="payment-footer__logo logo-sbp"></span>
				<span class="payment-footer__logo logo-mir"></span>
				<span class="payment-footer__logo logo-master-card"></span>
				</div>

                <a href="{{ route('policy') }}" class="footer__menu-item footer__policy">Политика в области персональных данных</a>
			</div>
		</div>

		<div class="footer__col">
			<h3 class="footer__title"><a href="#">Каталог</a></h3>
			<ul class="footer__menu">

                @foreach ($all_cat as $item )
                    <li class="footer__menu-item"><a href="{{route('category', $item->slug)}}" class="footer__menu-link">{{$item->name}}</a></li>
                @endforeach

			</ul>
		</div>

		</div>

		<div class="footer__bottom">
			<p class="footer__copyright"><span>С</span> Все права защищены 	«Краски и штукатурки»</p>
		</div>

	</div>
</footer>

<!-- Popup-с формой -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<img src="img/popup.jpg" alt="">
				</div>
				<div class="popup__form-block">
					<h2>Заказать звонок</h2>
					<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
					<form action="#" class="form">
						<div class="form__line">
							<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" placeholder="Имя" data-value="Имя"
								class="popup__form-input input _req">
							<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" placeholder="Телефон"
								data-value="Телефон" class="popup__form-input input _phone _req">
							<input id="email" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" placeholder="Email"
								data-value="Email" class="popup__form-input input _email _req">
						</div>
						<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
								конфиденциальности</a></p>
						<button class="popup__form-btn form__btn btn">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- =============================================================================================================================== -->


<div class="popup popup_popup">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
		</div>
	</div>
</div>
<!-- =============================================================================================================================== -->

<div class="popup popup_massagename-message">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
		</div>
	</div>
</div>
<!-- =============================================================================================================================== -->

<div class="popup popup_video">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close popup__close_video" aria-label="Закрыть модальное окно"></div>
			<div class="popup__video _video"></div>
		</div>
	</div>
</div>
<!-- <a href="#video" data-video="stFOy0Noahg" class=" _popup-link">Открыть видео</a> -->
<!-- =============================================================================================================================== -->
