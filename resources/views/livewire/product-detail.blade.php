<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/product">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 mb-3">
            <div class="card">
                <div class="card-body">

                    @if ($product->image)
                    <img class="card-img-top" src="{{ asset('storage/'. $product->image) }}">
                    @else
                    <img src="{{ asset('assets/img/product/'. $product->product_code .'.png') }}" class="card-img-top"
                        alt="product" style="max-height: 400px">
                    @endif

                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h1>
                <strong>{{ $product->product_name }}</strong>
                <h4>

                    @if ($product->stock == 0)
                    <span class="badge bg-danger text-white"><i class="fas fa-times"></i> Not Available</span>
                    @else
                    <span class="badge bg-success text-white"><i class="fas fa-check"></i> Ready</span>
                    @endif

                </h4>
            </h1>
            <h2 class="text-danger">Rp. {{ number_format($product->price) }}</h2>
            <p>{!! $product->description !!}</p>
            <div class="mt-5">
                <form wire:submit.prevent="addToCart">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <input type="number" value="" wire:model="order_amount"
                                class="form-control mb-3 @error('order_amount') is-invalid @enderror">
                            @error('order_amount')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block" @if ($product->stock == 0) disabled
                                @endif>
                                <i class="fas fa-shopping-cart"></i> Tambah
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td><strong>Weight</strong></td>
                            <td></td>
                            <td>{{ $product->weight }} kg</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>