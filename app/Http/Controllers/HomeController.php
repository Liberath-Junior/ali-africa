<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();

        $products = Product::where('is_active', true)
            ->where('is_available', true)
            ->with('category')
            ->get();

        return view('welcome', compact('categories', 'products'));
    }

    public function category(Category $category)
    {
        $categories = Category::where('is_active', true)->get();

        $products = Product::where('category_id', $category->id)
            ->where('is_active', true)
            ->where('is_available', true)
            ->with('category')
            ->get();

        return view('welcome', compact('categories', 'products'));
    }
}
