<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::query()
            ->with('category')
            ->where('is_active', true)
            ->latest()
            ->paginate(12);

        return view('frontend.home', compact('products'));
    }
}
