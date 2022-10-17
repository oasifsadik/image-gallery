@extends('admin.master')

@section('contant')
<div class="container py-5 mb-lg-1">
    <div class="col-md-12">
        <div class="card" style="">
            <div class="card-header">
                <h1>All Category
                    <a href="{{ url('/add-category') }}" class="btn btn-primary float-end">Add Category</a>
                </h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <td>#Sl</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key =>  $item)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ url('edit/'.$item->id) }}" class="btn btn-primary btn-sm" >Edit</a>
                                <a href="{{ url('delete/'.$item->id) }}" class="btn btn-danger btn-sm" >Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
