<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <div class="jumbotron jumbotron-fluid rounded bg-info">
                <div class="container hero text-center">
                    <h1>Selamat Berbelanja</h1>
                    <p>Semoga hari Anda menyenangkan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <h1>Best Product</h1>
    </div>
    <div class="row justify-content-center mb-3">
        <p>Ini adalah produk terbaik yang kami sajikan</p>
    </div>
    <div class="row justify-content-center">

        @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 mb-3 mx-4">
            <div class="card shadow">

                @if ($product->image)
                <img class="card-img-top" src="{{ asset('storage/'. $product->image) }}" style="max-height: 250px">
                @else
                <img src="{{ asset('assets/img/product/'. $product->product_code .'.png') }}" class="card-img-top"
                    alt="product" style="max-height: 250px">
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
</div>