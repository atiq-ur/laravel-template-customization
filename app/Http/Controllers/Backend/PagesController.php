<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('backend.pages.home.index');
    }

    public function products()
    {
        return view('backend.pages.products.index');
    }
}
