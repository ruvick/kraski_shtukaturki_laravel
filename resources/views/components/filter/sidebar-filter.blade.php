<div class="category-sec__sidebar sidebar">
    <h2 class="sidebar__title">Фильтр</h2>

    <div class="page__sidebar-filter-block-mob filterMob">
        <p class="page__sidebar-filter-block-mob-text">Фильтры</p>
    </div>

    <form action="{{url()->current()}}" method="GET" class="sidebar__filters filters-sidebar sidebarBody">

        <input type="hidden" name="search_str" value="{{Request::get('search_str')}}">

        <div class="filters-sidebar__price price-filter">
            <div class="price-filter__input-block">
                <div class="price-filter__input-block-item">
                    <label for="price-1" class="price-filter__label">От</label>
                    <input type="number" name="minprice" value="{{ value_check('minprice', '', 100)}}" class="input">
                </div>
                <div class="price-filter__input-block-item">
                    <label for="price-1" class="price-filter__label">До</label>
                    <input type="number" name="maxprice" value="{{ value_check('maxprice', '', 60000)}}" class="input">
                </div>
            </div>

            <button type="submit" class="price-filter__btn btn">Применить</button>
        </div>

        <div class="filters-sidebar__block spollers-block" data-spollers data-one-spoller>

            <div class="spollers-block__item">
                <div class="spollers-block__title _active" data-spoller>Торговая марка</div>
                <div class="spollers-block__body">
                    <div class="checkbox-item">

                        <label for="check" class="checkbox">
                            <input id="check" class="checkbox__input" type="checkbox" {{ value_check('tm', 'San Marco')?"checked":""}} value="San Marco" name="tm[]">
                            <span class="checkbox__text"><span>San Marco</span></span>
                        </label>

                        <label for="check1" class="checkbox">
                            <input id="check1" class="checkbox__input" type="checkbox" {{ value_check('tm', 'DECORAZZA')?"checked":""}} value="DECORAZZA" name="tm[]">
                            <span class="checkbox__text"><span>DECORAZZA</span></span>
                        </label>

                    </div>
                </div>


            </div>

            <div class="spollers-block__item">
                <div class="spollers-block__title _active" data-spoller>Объем</div>
                <div class="spollers-block__body">
                    <div class="checkbox-item">
                        <label for="check2" class="checkbox">
                            <input id="check2" class="checkbox__input" type="checkbox" {{ value_check('volume', '1')?"checked":""}} value="1" name="volume[]">
                            <span class="checkbox__text"><span>1 л.</span></span>
                        </label>

                        <label for="check3" class="checkbox">
                            <input id="check3" class="checkbox__input" type="checkbox" {{ value_check('volume', '4')?"checked":""}} value="4" name="volume[]">
                            <span class="checkbox__text"><span>4 л.</span></span>
                        </label>

                        <label for="check4" class="checkbox">
                            <input id="check4" class="checkbox__input" type="checkbox" {{ value_check('volume', '5')?"checked":""}} value="5" name="volume[]">
                            <span class="checkbox__text"><span>5 л.</span></span>
                        </label>

                        <label for="check5" class="checkbox">
                            <input id="check5" class="checkbox__input" type="checkbox" {{ value_check('volume', '10')?"checked":""}} value="10" name="volume[]">
                            <span class="checkbox__text"><span>10 л.</span></span>
                        </label>

                        <label for="check6" class="checkbox">
                            <input id="check6" class="checkbox__input" type="checkbox" {{ value_check('volume', '25')?"checked":""}} value="25" name="volume[]">
                            <span class="checkbox__text"><span>25 л.</span></span>
                        </label>
                    </div>
                </div>

            </div>

        </div>
        <button type="submit" class="price-filter__btn btn">Применить</button>
        <a href="{{url()->current()}}" class="filters-sidebar__btn-reset btn">Сбросить фильтр</a>
    </form>
</div>
