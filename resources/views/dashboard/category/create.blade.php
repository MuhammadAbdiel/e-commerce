@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/category">Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <form action="/dashboard/category" method="post">
            @csrf
            <div class="mb-3">
                <label for="category_code" class="form-label">Category Code</label>
                <input type="text" class="form-control @error('category_code') is-invalid @enderror"
                    name="category_code" id="category_code" placeholder="Enter the category code"
                    value="{{ old('category_code') }}">
                @error('category_code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                    name="category_name" id="category_name" placeholder="Enter the category name"
                    value="{{ old('category_name') }}">
                @error('category_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <a href="/dashboard/category" class="btn btn-danger"><span data-feather="arrow-left"></span> Back</a>
            <button type="submit" class="btn btn-primary"><span data-feather="save"></span> Submit</button>
        </form>
    </div>
</div>
@endsection