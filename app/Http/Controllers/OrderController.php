<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard.order.index', [
            'title' => 'Data Order',
            'orders' => Order::where('status', '!=', 0)->latest()->get(),
        ]);
    }

    public function edit(Order $order)
    {
        return view('dashboard.order.edit', [
            'title' => 'Edit Data',
            'order' => $order
        ]);
    }

    public function update(Request $request, Order $order)
    {
        $rules = [
            'status' => 'required',
            'price_total' => 'required',
            'unique_code' => 'required'
        ];

        if ($request->order_code != $order->order_code) {
            $rules['order_code'] = 'required|unique:orders';
        }

        $validatedData = $request->validate($rules);

        Order::where('id', $order->id)->update($validatedData);
        return redirect('/dashboard/order')->with('success', 'Order has been updated');
    }
}
