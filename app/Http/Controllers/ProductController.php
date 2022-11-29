<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index(){
        $products=product::paginate(20);
        $currencyCode=env('CURRENCY_CODE','$');
        return view('admin.products.products')
        ->with([
            'products'=>$products,
            'currency_code'=>$currencyCode,
    ]);
    }
}
