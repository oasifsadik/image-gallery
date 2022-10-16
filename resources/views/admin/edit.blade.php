@extends('admin.master')

@section('contant')
<div class="container py-5 mb-lg-1">
    <div class="card">
        <div class="card-header">
            <h1>Edit Category
                <a href="{{ url('/dashboard') }}" class="btn btn-primary float-end">Back</a>
            </h1>
        </div>
        <div class="card-body">
            <form action="{{ url('update/'.$category->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Enter Category name" required >
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
