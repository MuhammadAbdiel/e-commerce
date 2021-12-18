<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class History extends Component
{
    public $orders;

    public function render()
    {
        if (auth()->check()) {
            $this->orders = Order::where('user_id', auth()->user()->id)->where('status', '!=', 0)->latest()->get();
        }

        return view('livewire.history');
    }
}
