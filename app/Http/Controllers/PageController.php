<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function dashboard()
    {
        return view('layout.dashboard.pages.dashboard', [
            'layout' => 'side-menu'
        ]);
    }

    public function productList()
    {
        return view('layout.dashboard.pages.product-list');
    }

    public function addProduct()
    {
        return view('layout.dashboard.pages.add-product');
    }

    public function categories()
    {
        return view('layout.dashboard.pages.categories');
    }

    public function transactionList()
    {
        return view('layout.dashboard.pages.transaction-list');
    }

    public function transactionDetail()
    {
        return view('layout.dashboard.pages.transaction-detail');
    }

    public function sellerList()
    {
        return view('layout.dashboard.pages.seller-list');
    }

    public function sellerDetail()
    {
        return view('layout.dashboard.pages.seller-detail');
    }

    public function updateProfile()
    {
        return view('layout.dashboard.pages.update-profile');
    }

    public function changePassword()
    {
        return view('layout.dashboard.pages.change-password');
    }
}