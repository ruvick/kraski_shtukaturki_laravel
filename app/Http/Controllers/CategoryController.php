<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

use App\Filters\ProductFilter;

class CategoryController extends Controller
{
    public function show(ProductFilter $request) {

        $product_product = Product::select()->filter($request)->paginate(15)->withQueryString();

        return view('catalog', ["products" => $product_product]);
    }

    public function show_category($slug, ProductFilter $request) {

        $categoryInfo = Category::where('slug', $slug)->first();

        if($categoryInfo == null) abort('404');

        $cat_product = $categoryInfo->category_tovars()->filter($request)->paginate(16)->withQueryString();

        return view('category', ["category_info" => $categoryInfo, "products" => $cat_product]);
    }

}
