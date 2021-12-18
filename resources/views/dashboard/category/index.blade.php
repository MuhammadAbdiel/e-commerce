@extends('dashboard.layouts.main')

@section('content')
<h1 class="h2">{{ $title }}</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Category</li>
    </ol>
</nav>
@endsection

@section('data')
<div class="row mb-5">
    <div class="col-md-12">
        <a href="/dashboard/category/create" class="btn btn-primary"><i data-feather="plus-square"></i> Insert</a>
        <div class="table-responsive mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a href="/dashboard/category/{{ $category->category_code }}/edit" class="btn btn-warning"><i
                                    data-feather="edit"></i> Edit</a>

                            <form id="data-{{ $category->category_code }}" class="d-inline-block"
                                action="/dashboard/category/{{ $category->category_code }}" method="post">
                                @method('delete')
                                @csrf
                                <button data-name="{{ $category->category_name }}"
                                    data-productCode="{{ $category->category_code }}" type="submit"
                                    class="btn btn-danger delete"><i data-feather="trash-2"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection