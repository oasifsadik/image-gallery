@extends('admin.master')

@section('contant')
<div class="container py-5 mb-lg-1">
    <div class="card">
        <div class="card-header">
            <h1>Add Category
                <a href="{{ url('/post') }}" class="btn btn-primary float-end">Back</a>
            </h1>
        </div>
        <div class="card-body">
            <form action="{{ url('save') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Post Title</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Post Title" required >
                </div>
                <div class="form-group mt-3">
                    <label for="">Short Description</label>
                    <input type="text" class="form-control" name="short_description" placeholder="Enter short description" required >
                </div>
                <div class="form-group mt-3">
                    <label for="">Short Description</label>
                    <br>
                    <textarea name="description" id="" cols="80" rows="10" ></textarea>
                </div>
                <div class="form-group mt-3" >
                    <label>Choose Images</label>
                    <input type="file"  name="images" multiple>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
