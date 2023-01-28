<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class HomeController extends Controller
{
    public function index(){
        $logos = Logo::latest()->get();
        return view('welcome',compact('logos'));
    }
}
