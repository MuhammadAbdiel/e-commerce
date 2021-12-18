<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search) {
            $product = Product::where('product_name', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')->paginate(12);
        } else {
            $product = Product::orderBy('category_id')->paginate(12);
        }

        return view('livewire.product-index', [
            'products' => $product
        ]);
    }
}
