<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderDetail;

class Checkout extends Component
{
    public $phone_number, $address;

    public function mount()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $this->phone_number = auth()->user()->phone_number;
        $this->address = auth()->user()->address;

        $this->order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();

        if (!$this->order) {
            return redirect('/');
        }
    }

    public function checkout()
    {
        $validate = $this->validate([
            'phone_number' => 'required',
            'address' => 'required|max:255'
        ]);

        User::where('id', auth()->user()->id)->update($validate);

        $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $order->status = 1;
        $order->update();

        $orderDetails = OrderDetail::where('order_id', $this->order->id)->get();
        foreach ($orderDetails as $orderDetail) {
            $product = Product::where('id', $orderDetail->product_id)->first();
            $product->stock -= $orderDetail->order_amount;
            $product->update();
        }

        $this->emit('cart');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil',
            'text' => 'Berhasil melakukan checkout!',
            'icon' => 'success'
        ]);

        return redirect('/cart/checkout/history');
    }

    public function render()
    {
        return view('livewire.checkout', [
            'order' => Order::where('user_id', auth()->user()->id)->where('status', 0)->first(),
            'orderDetails' => OrderDetail::where('order_id', $this->order->id)->get()
        ]);
    }
}
