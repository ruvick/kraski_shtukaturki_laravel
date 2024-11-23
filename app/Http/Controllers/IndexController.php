<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class IndexController extends Controller
{
    public function show() {

        $sales_liders = Product::select()->orderBy('sales_count')->take(4)->get();
        $sales = Product::where('old_price', '!=', 0)->take(4)->get();

        return view('index', [
            'sales_liders' => $sales_liders,
            'sales' => $sales,
        ]);
    }
}
