<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10 col-md-9">
            <div class="shadow p-5 rounded bg-white">
                <div class="table-responsive mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th></th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (!empty($order))
                            @foreach ($orderDetails as $orderDetail)
                            <tr>
                                <td>

                                    @if ($orderDetail->product->image)
                                    <img src="{{ asset('storage/'. $orderDetail->product->image) }}" width="70">
                                    @else
                                    <img src="{{ asset('assets/img/product/'. $orderDetail->product->product_code .'.png') }}"
                                        alt="product" width="70">
                                    @endif

                                </td>
                                <td>
                                    <h4>{{ $orderDetail->product->product_name }}</h4>
                                </td>
                                <td>
                                    Rp. {{ number_format($orderDetail->product->price) }}
                                </td>
                                <td>{{ $orderDetail->order_amount }}</td>
                                <td>Rp. {{ number_format($orderDetail->price_total) }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger py-0 px-1"
                                        wire:click.prevent="delete({{ $orderDetail->id }})">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-12">
                        <a href="/product" class="btn btn-primary btn-block">
                            <i class="fas fa-arrow-left"></i> Continue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (!empty($order))
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <div class="shadow p-5 rounded bg-white">
                <h3><strong>Cart Total</strong></h3>
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h4><strong>Subtotal</strong></h4>
                        <h4 class="text-danger"><strong>Rp. {{ number_format($order->price_total) }}</strong></h4>
                    </div>
                    <div class="col-md-12 d-flex justify-content-between">
                        <h4><strong>Unique Code</strong></h4>
                        <h4 class="text-danger"><strong>Rp. {{ number_format($order->unique_code) }}</strong></h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h4><strong>Total</strong></h4>
                        <h4 class="text-danger">
                            <strong>Rp. {{ number_format($order->price_total - $order->unique_code) }}</strong>
                        </h4>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12">
                        <a href="/cart/checkout" class="btn btn-primary btn-block"><i class="fas fa-credit-card"></i>
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>