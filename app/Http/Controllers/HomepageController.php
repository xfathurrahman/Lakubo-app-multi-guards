<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    protected function index(){
        return view('layout.app.pages.home');
    }
}
