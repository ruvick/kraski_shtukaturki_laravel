<section class="page__categories categories section">
	<div class="_container">
		<h2 class="categories__title title">Категории</h2>

		<div class="categories__inner d-flex">
            <div class="categories__left-col">

                <a href="{{route('category', 'dekorativnye-kraski')}}" class="categories__box box-categories">
                    <div class="box-categories__img _ibg">
                        <img src="{{asset('img/main_cat/cat_1.webp')}}" alt="Декоративные краски">
                    </div>
                    <div class="box-categories__text">
                        <p>
                            Декоративные <br>
                            краски
                        </p>
                    </div>
                </a>

                <a href="{{route('category', 'venecianskie-stukaturki')}}" class="categories__box box-categories">
                    <div class="box-categories__img _ibg">
                        <img src="{{asset('img/main_cat/cat_2.webp')}}" alt="Венецианская штукатурка">
                    </div>
                    <div class="box-categories__text">
                        <p>
                        Венецианская <br>
                        штукатурка
                        </p>
                    </div>
                </a>
            </div>

            <a href="{{route('category', 'fakturnye-pokrytiia')}}" class="categories__box box-categories box-categories--center">
                <div class="box-categories__img _ibg">
                    <img src="{{asset('img/main_cat/cat_3.webp')}}" alt="Фактурные покрытия">
                </div>
                <div class="box-categories__text">
                    <p>
                    Фактурные <br>
                    покрытия
                    </p>
                </div>
            </a>

            <div class="categories__right-col">

                <a href="{{route('category', 'sistemy-mikrocemento')}}" class="categories__box box-categories">
                    <div class="box-categories__img _ibg">
                        <img src="{{asset('img/main_cat/cat_4.webp')}}" alt="Микроцемент">
                    </div>
                    <div class="box-categories__text">
                        <p>
                        Микроцемент
                        </p>
                    </div>
                </a>

                <a href="{{route('category', 'specialnye-pokrytiia')}}" class="categories__box box-categories">
                    <div class="box-categories__img _ibg">
                        <img src="{{asset('img/main_cat/cat_5.webp')}}" alt="Специальные покрытия">
                    </div>
                    <div class="box-categories__text">
                        <p>
                        Специальные <br>
                        покрытия
                        </p>
                    </div>
                </a>

            </div>

	    </div>
	</div>
</section>
