
<div class="popular__column">
    <div class="popular__card card-popular">
        <to-favorites-btn sku="{{$item["sku"]}}"></to-favorites-btn>

        <a href="{{route('product', $item["slug"])}}" class="card-popular__img _ibg">
            @if(!empty($item["img"]))
                <img loading="lazy" src="{{$item["img"]}}" alt="Купить {{$item["title"]}}">
            @else
                <img loading="lazy" src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$item["title"]}}">
            @endif
        </a>
        <div class="card-popular__descp">
            <h3 class="card-popular__descp-title">{{$item["title"]}}</h3>
            <p class="card-popular__descp-subtitle">
                @if (!empty($item["short_description"]) )
                    {{mb_strimwidth(strip_tags($item["short_description"]), 0, 50, "...")}}
                @else
                    {{mb_strimwidth(strip_tags ($item["description"]), 0, 50, "...")}}
                @endif
            </p>
            <div class="card_price_wrap">
                <div class="card-popular__descp-price">{{$item["price"]}} руб.</div>
                @if ($item["old_price"] != 0)
                    <span class="card-popular__descp-price old_price">{{$item["old_price"]}} руб.</span>
                @endif
            </div>

        </div>
        <div class="card_control_wrap">
            <to-bascet-btn bascet="{{route('bascet')}}" sku="{{$item['sku']}}"></to-bascet-btn>
            <a href="{{route('product', $item["slug"])}}" class="card-popular__btn">Подробнее...</a>
        </div>
    </div>
</div>
