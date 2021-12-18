@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/product">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <form action="/dashboard/product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="product_code" class="form-label">Product Code</label>
                <input type="text" class="form-control @error('product_code') is-invalid @enderror" name="product_code"
                    id="product_code" placeholder="Enter the product code" value="{{ old('product_code') }}">
                @error('product_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name"
                    id="product_name" placeholder="Enter the product name" value="{{ old('product_name') }}">
                @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-2">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                    onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class=" mb-3">
                <label for="category" class="form-label">Product Category</label>
                <select class="form-select @error('category_id') is-invalid @enderror" id="category" name="category_id">
                    <option selected>Select your option</option>

                    @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endif
                    @endforeach

                </select>
                @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                @error('description')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                    placeholder="Enter the price">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" id="stock"
                    placeholder="Enter the stock">
                @error('stock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" id="weight"
                    placeholder="Enter the weight">
                @error('weight')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <a href="/dashboard/product" class="btn btn-danger"><span data-feather="arrow-left"></span> Back</a>
            <button type="submit" class="btn btn-primary"><span data-feather="save"></span> Submit</button>
        </form>
    </div>
</div>

@include('dashboard.component.preview-image')

@endsection