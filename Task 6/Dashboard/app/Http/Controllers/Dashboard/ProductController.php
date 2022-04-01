<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.products.index');
    }
    public function create()
    {
        return view('dashboard.products.create');
    }
    public function edit()
    {
        return view('dashboard.products.edit');
    }
}
