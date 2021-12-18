<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
                    <li class="breadcrumb-item"><a href="/cart/checkout">Checkout</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <div class="shadow card p-3 mb-3">
                <div class="d-flex">
                    <div class="flex-shrink-0 mr-3">
                        <img src="{{ asset('assets/img/bank_bri.png') }}" alt="logo" width="40">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5 class="m-0">Bank BRI</h5>
                        Rekening 01234-567-890 a/n <strong>Admin E-Toko</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <div class="shadow p-5 rounded bg-white">
                <h4><strong>Order History</strong></h4>
                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Order Date</th>
                                <th>Order Code</th>
                                <th class="text-center">Order</th>
                                <th>Status</th>
                                <th>Price Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->order_code }}</td>
                                <td class="d-flex justify-content-center">

                                    @php
                                    $orderDetails = \App\Models\OrderDetail::where('order_id', $order->id)->get();
                                    @endphp

                                    @foreach ($orderDetails as $orderDetail)
                                    @if ($orderDetail->product->image)
                                    <img src="{{ asset('storage/'. $orderDetail->product->image) }}" width="70">
                                    @else
                                    <img src="{{ asset('assets/img/product/'. $orderDetail->product->product_code .'.png') }}"
                                        alt="product" width="70">
                                    @endif
                                    @endforeach

                                </td>
                                <td>

                                    @if ($order->status > 1)
                                    <div class="badge bg-success text-white">
                                        Sudah dibayar
                                    </div>
                                    @else
                                    <div class="badge bg-danger text-white">
                                        Belum dibayar
                                    </div>
                                    @endif

                                </td>
                                <td>Rp. {{ number_format($order->price_total - $order->unique_code) }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <a href="/cart" class="btn btn-danger btn-block"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>