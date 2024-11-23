<section class="uni_breadcrumbs">
    <div class="_container">
        <div class="breadcrumbs">
            <a href="{{route('home')}}">Главная</a>
            @if (Request::route()->named('category'))
                <span class="sep"> / </span> <a href="{{route("catalog")}}">Каталог</a>
                <span class="sep"> / </span> <span class="finish">{{$category['name']}}</span>
            @endif

            @if (Request::route()->named('product'))
                <span class="sep"> / </span> <a href="{{route('category', $category->slug)}}">{{$category->name}}</a>
                <span class="sep"> / </span> <span class="finish">{{$tovar['title']}}</span>
            @endif

            @if (isset($title))
                <span class="sep"> / </span> <span class="finish">{{ $title }}</span>
            @endif

            @if (isset($product))
                <span class="sep"> / <a href="{{route("products")}}">Продукция</a>  / </span> <span class="finish">{{ $product }}</span>
            @endif

            @if (isset($productpage))
                <span class="sep"> / <a href="{{route("products")}}">Продукция</a> / <a href="{{route('products_cat', $catslug)}}">{{$cattitle}}</a> / </span> <span class="finish">{{ $productpage }}</span>
            @endif

            @if (isset($napravlenie))
                <span class="sep"> / <a href="{{route("work")}}">Направления деятельности</a> / <span>{{$napravlenie}}</span>
            @endif

            @if (isset($news))
                <span class="sep"> / <a href="{{route("news")}}">Новости</a> / <span>{{$news}}</span>
            @endif
         </div>
    </div>
</section>
