<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('home',compact('products'));
    }

    public function show(string $id)
    {
        $product = product::with('category')->find($id);
        return view('detail',compact('product'));
    }
}
