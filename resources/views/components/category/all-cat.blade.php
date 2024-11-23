<div class="categoty-top-sec__filter-block filter-block">

    <a href="{{route('catalog')}}" @class(['filter-block__btn', 'btn', '_active' => $curenname == "Каталог продукции"])>Каталог товаров</a>
	@foreach ($all_cat as $item)
        <a href="{{route("category", $item->slug)}}" @class(['filter-block__btn', 'btn', '_active' => $curenname == $item->name])>{{$item->name}}</a>
    @endforeach

</div>
