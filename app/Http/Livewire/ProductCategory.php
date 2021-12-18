<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategory extends Component
{
    use WithPagination;

    public $search, $category;
    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        if ($this->search) {
            $product = Product::where('category_id', $this->category->id)->where('product_name', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')->paginate(6);
        } else {
            $product = Product::where('category_id', $this->category->id)->paginate(6);
        }

        return view('livewire.product-index', [
            'products' => $product
        ]);
    }
}
