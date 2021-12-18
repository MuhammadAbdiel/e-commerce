<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <div class="shadow p-5 rounded bg-white">
                <h2><strong>Shipment Information</strong></h2>
                <hr>
                <form wire:submit.prevent="checkout">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shadow card p-3">
                                <h4><strong>Your Identity</strong></h4>
                                <hr>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" readonly class="form-control"
                                        value="{{ $order->user->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" readonly
                                        value="{{ $order->user->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" readonly
                                        value="{{ $order->user->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="number" wire:model="phone_number" id="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        placeholder="Enter your phone number" value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" wire:model="address" id="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Enter your address" value="{{ old('address') }}">
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="shadow card p-3 mb-3">
                                        <h4><strong>Payment Method</strong></h4>
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
                                <div class="col-md-12">
                                    <div class="shadow card p-3">
                                        <h4><strong>Your Order</strong></h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if (!empty($order))
                                                    @foreach ($orderDetails as $orderDetail)
                                                    <tr>
                                                        <td>{{ $orderDetail->product->product_name }}</td>
                                                        <td class="text-right">Rp.
                                                            {{ number_format($orderDetail->price_total) }}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    @endif

                                                    <tr>
                                                        <td>
                                                            <h5><strong>Subtotal</strong></h5>
                                                        </td>
                                                        <td class="text-right">
                                                            <h5><strong>Rp.
                                                                    {{ number_format($order->price_total) }}</strong>
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5><strong>Total</strong></h5>
                                                        </td>
                                                        <td class="text-right text-danger">
                                                            <h5><strong>Rp.
                                                                    {{ number_format($order->price_total - $order->unique_code) }}</strong>
                                                            </h5>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fas fa-credit-card"></i> Checkout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>