<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $logos = Logo::latest()->get();
        $banners = Banner::latest()->get();
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        return view('welcome',compact('logos','banners','products','categories'));
    }
}
