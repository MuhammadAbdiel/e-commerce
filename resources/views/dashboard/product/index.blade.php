@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-3">
                <a href="/dashboard/product/create" class="btn btn-primary"><i data-feather="plus-square"></i>
                    Insert</a>
            </div>
            <div class="col-md-3">
                <form action="/dashboard/product" method="get">
                    <div class="input-group mb-3">

                        @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        <input type="text" class="form-control" name="search" placeholder="Search"
                            value="{{ request('search') }}">
                        <button type="submit" class="input-group-text" id="search">
                            <i data-feather="search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/dashboard/product">All</a></li>
                        <hr>

                        @foreach ($categories as $category)
                        <li>
                            <a href="/dashboard/product?category={{ $category->category_code }}"
                                class="dropdown-item">{{ $category->category_name }}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Product</th>
                        <th></th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Weight</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>

                            @if ($product->image)
                            <img src="{{ asset('storage/'. $product->image) }}" width="100">
                            @else
                            <img src="{{ asset('assets/img/product/'. $product->product_code .'.png') }}" alt="product"
                                width="100">
                            @endif

                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>Rp. {{ number_format($product->price) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->weight }} kg</td>
                        <td>
                            <a href="/dashboard/product/{{ $product->product_code }}" class="btn btn-info">
                                <i data-feather="info"></i> Detail
                            </a>
                            <a href="/dashboard/product/{{ $product->product_code }}/edit" class="btn btn-warning"><i
                                    data-feather="edit"></i> Edit</a>

                            <form id="data-{{ $product->product_code }}" class="d-inline-block"
                                action="/dashboard/product/{{ $product->product_code }}" method="post">
                                @method('delete')
                                @csrf
                                <button data-name="{{ $product->product_name }}"
                                    data-productCode="{{ $product->product_code }}" type="submit"
                                    class="btn btn-danger delete"><i data-feather="trash-2"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

            {{ $products->links() }}

        </div>
    </div>
</div>
@endsection