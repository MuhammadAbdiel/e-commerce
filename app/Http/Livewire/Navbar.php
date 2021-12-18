<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;

class Navbar extends Component
{
    public $amount = 0;

    protected $listeners = [
        'cart' => 'notification'
    ];

    public function notification()
    {
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
            if ($order) {
                $this->amount = OrderDetail::where('order_id', $order->id)->count();
            } else {
                $this->amount = 0;
            }
        }
    }

    public function mount()
    {
        if (auth()->check()) {
            $order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
            if ($order) {
                $this->amount = OrderDetail::where('order_id', $order->id)->count();
            } else {
                $this->amount = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.navbar', [
            'categories' => Category::all(),
            'order_amount' => $this->amount
        ]);
    }
}
