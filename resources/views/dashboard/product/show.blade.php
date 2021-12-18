@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/product">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Product</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row">
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">

                @if ($product->image)
                <img src="{{ asset('storage/'. $product->image) }}" class="card-img-top">
                @else
                <img src="{{ asset('assets/img/product/'. $product->product_code .'.png') }}" class="card-img-top"
                    alt="product">
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-7">
        <h1>{{ $product->product_name }}
            <h4>

                @if ($product->stock == 0)
                <span class="badge bg-danger text-white px-2 pt-1"><i data-feather="x-circle"></i></span>
                @else
                <span class="badge bg-success text-white">{{ $product->stock }}</span>
                @endif

            </h4>
        </h1>
        <h2 class="text-danger">Rp. {{ number_format($product->price) }}</h2>
        <p>{!! $product->description !!}</p>
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
        <a href="/dashboard/product" class="btn btn-danger"><i data-feather="arrow-left"></i> Back</a>
    </div>
</div>
@endsection