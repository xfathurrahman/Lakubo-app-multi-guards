<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected function index(){
        return view('layout.app.pages.home');
    }

    protected function product_detail(){
        return view('layout.app.pages.product-detail');
    }

    protected function category_detail(){
        return view('layout.app.pages.category-detail');
    }
}
