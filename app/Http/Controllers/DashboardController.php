<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $order = Order::all()->count();
        if (!$order) {
            $order = 0;
        }

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'user' => User::all()->count(),
            'product' => Product::all()->count(),
            'category' => Category::all()->count(),
            'order' => $order
        ]);
    }
}
