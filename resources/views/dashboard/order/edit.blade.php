@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/order">Order</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <form action="/dashboard/order/{{ $order->order_code }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="order_code" class="form-label">Order Code</label>
                <input type="text" readonly class="form-control @error('order_code') is-invalid @enderror"
                    name="order_code" id="order_code" placeholder="Enter the order code"
                    value="{{ old('order_code', $order->order_code) }}">
                @error('order_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" readonly class="form-control @error('name') is-invalid @enderror" name="name"
                    id="name" placeholder="Enter the user name" value="{{ old('name', $order->user->name) }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class=" mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                    <option selected>Select your option</option>

                    @if (old('status', $order->status) == 1)
                    <option value="1" selected>Belum dibayar</option>
                    <option value="2">Sudah dibayar</option>
                    @elseif (old('status', $order->status) == 2)
                    <option value="1">Belum dibayar</option>
                    <option value="2" selected>Sudah dibayar</option>
                    @else
                    <option value="">No Option</option>
                    @endif

                </select>
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price_total" class="form-label">Price</label>
                <input type="number" readonly class="form-control @error('price_total') is-invalid @enderror"
                    name="price_total" id="price_total" placeholder="Enter the price"
                    value="{{ old('price_total', $order->price_total) }}">
                @error('price_total')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="unique_code" class="form-label">Unique Code</label>
                <input type="number" readonly class="form-control @error('unique_code') is-invalid @enderror"
                    name="unique_code" id="unique_code" placeholder="Enter the price"
                    value="{{ old('unique_code', $order->unique_code) }}">
                @error('unique_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <a href="/dashboard/order" class="btn btn-danger"><i data-feather="arrow-left"></i> Back</a>
            <button type="submit" class="btn btn-primary"><i data-feather="save"></i> Submit</button>
        </form>
    </div>
</div>
@endsection