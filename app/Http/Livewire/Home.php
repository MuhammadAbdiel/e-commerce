<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::where('product_code', 'PA00016')
                ->orWhere('product_code', 'PA00002')
                ->orWhere('product_code', 'PA00067')->get(),
        ]);
    }
}
