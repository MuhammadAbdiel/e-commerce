<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderDetail;

class ProductDetail extends Component
{
    public $product, $order_amount;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function addToCart()
    {
        $this->validate([
            'order_amount' => 'required|min:1',
        ]);

        if (auth()->guest()) {
            return redirect('/login');
        }

        $price_total = $this->order_amount * $this->product->price;

        $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();

        if (empty($order)) {
            Order::create([
                'user_id' => auth()->user()->id,
                'order_code' => 'OR' . mt_rand(10000, 99999),
                'status' => 0,
                'price_total' => $price_total,
                'unique_code' => mt_rand(100, 999)
            ]);

            $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        } else {
            $order->price_total += $price_total;
            $order->update();
        }

        OrderDetail::create([
            'product_id' => $this->product->id,
            'order_id' => $order->id,
            'order_amount' => $this->order_amount,
            'price_total' => $price_total
        ]);

        $this->emit('cart');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil',
            'text' => 'Pesanan berhasil masuk keranjang!',
            'icon' => 'success'
        ]);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
