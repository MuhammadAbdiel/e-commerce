<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;

class Cart extends Component
{
    public $order, $orderDelete, $orderDetailDelete, $orderDetail = [];
    protected $listeners = ['deleteConfirmed' => 'destroy'];

    public function delete(OrderDetail $orderDetail)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation');

        $this->orderDelete = Order::where('id', $orderDetail->order_id)->first();
        $this->orderDetailDelete = OrderDetail::find($orderDetail->id);
    }

    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail = $this->orderDetailDelete;
        if (!empty($orderDetail)) {
            $order = $this->orderDelete;
            $orderDetailAmount = OrderDetail::where('order_id', $order->id)->count();

            if ($orderDetailAmount == 1) {
                $order->delete();
            } else {
                $order->price_total -= $orderDetail->price_total;
                $order->update();
            }

            $orderDetail->delete();
        }

        $this->emit('cart');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil',
            'text' => 'Pesanan berhasil dihapus!',
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        if (auth()->check()) {
            $this->order = Order::where('user_id', auth()->user()->id)->where('status', 0)->first();
            if ($this->order) {
                $this->orderDetail = OrderDetail::where('order_id', $this->order->id)->get();
            }
        }

        return view('livewire.cart', [
            'order' => $this->order,
            'orderDetails' => $this->orderDetail
        ]);
    }
}
