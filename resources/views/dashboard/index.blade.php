@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow p-3">
            <h4>Welcome, {{ auth()->user()->name }}</h4>
            <img src="{{ asset('assets/icon/hero.png') }}" alt="hero" class="w-100">
        </div>
    </div>
</div>
<div class="row justify-content-center mt-3">
    <div class="col-lg-3 col-md-5 mb-3">
        <div class="card shadow p-3">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/icon/users.png') }}" alt="icon" width="70">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-muted">User</h6>
                        </div>
                        <div class="col-md-12">
                            <h3>{{ $user }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 mb-3">
        <div class="card shadow p-3">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/icon/order.png') }}" alt="icon" width="70">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-muted">Order</h6>
                        </div>
                        <div class="col-md-12">
                            <h3>{{ $order }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 mb-3">
        <div class="card shadow p-3">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/icon/product.png') }}" alt="icon" width="70">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-muted">Product</h6>
                        </div>
                        <div class="col-md-12">
                            <h3>{{ $product }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 mb-3">
        <div class="card shadow p-3">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/icon/category.png') }}" alt="icon" width="70">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-muted">Category</h6>
                        </div>
                        <div class="col-md-12">
                            <h3>{{ $category }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection