<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-lg-10 col-md-9">
            <div class="d-flex justify-content-center">
                <input wire:model="search" type="text" class="form-control" placeholder="Apa yang Anda cari?">
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">

        @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 mb-3 mx-4">
            <div class="card shadow">

                @if ($product->image)
                <img class="card-img-top" src="{{ asset('storage/'. $product->image) }}" style="max-height: 170px">
                @else
                <img src="{{ asset('assets/img/product/'. $product->product_code .'.png') }}" class="card-img-top"
                    alt="product" style="max-height: 170px">
                @endif

                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">Rp. {{ number_format($product->price) }}</p>
                    <a href="/product/{{ $product->product_code }}" class="btn btn-primary btn-block"><i
                            class="fas fa-shopping-cart"></i> Tambah</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="row justify-content-start">
        <div class="col-lg-3 col-md-5 mx-auto">
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>