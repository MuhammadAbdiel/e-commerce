@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Order</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>User Name</th>
                        <th class="text-center">Product</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Unique Code</th>
                        <th>Price Total</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->user->name }}</td>

                        <td class="d-flex justify-content-center">

                            @php
                            $orderDetails = \App\Models\OrderDetail::where('order_id', $order->id)->get();
                            @endphp

                            @foreach ($orderDetails as $orderDetail)
                            @if ($orderDetail->product->image)
                            <img src="{{ asset('storage/'. $orderDetail->product->image) }}" width="50">
                            @else
                            <img src="{{ asset('assets/img/product/'. $orderDetail->product->product_code .'.png') }}"
                                alt="product" width="50">
                            @endif
                            @endforeach

                        </td>

                        @if ($order->status > 1)
                        <td>
                            <div class="badge bg-success text-white">Sudah dibayar</div>
                        </td>
                        @else
                        <td>
                            <div class="badge bg-danger text-white">Belum dibayar</div>
                        </td>
                        @endif

                        <td>Rp. {{ number_format($order->price_total) }}</td>
                        <td>Rp. {{ number_format($order->unique_code) }}</td>
                        <td>Rp. {{ number_format($order->price_total - $order->unique_code) }}</td>
                        <td>{{ $order->updated_at }}</td>
                        <td>
                            <a href="/dashboard/order/{{ $order->order_code }}/edit"
                                class="btn btn-warning px-1 pt-0"><i data-feather="edit"></i></a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection