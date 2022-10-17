@extends('admin.master')

@section('contant')
<div class="container py-5 mb-lg-1">
    <div class="col-md-12">
        <div class="card" style="" >
            <div class="card-header">
                <h1>All Category
                    <a href="{{ url('/add-post') }}" class="btn btn-primary float-end">Post</a>
                </h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <td>#Sl</td>
                            <td>Category name</td>
                            <td>Title</td>
                            <td>Short Description</td>
                            <td>Description</td>
                            <td>Thamnail</td>
                            <td>Cover</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $key =>  $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->Category->name }}</td>
                            <td>{{ $item->name }}</td>

                            <td>
                                    @php($pDesc = strip_tags(htmlspecialchars_decode($item->short_description)))
                                    <p>
                                            {!! (strlen($pDesc) > 50) ? substr($pDesc,0,50).'...' : $pDesc; !!}
                                    </p>
                            </td>

                            <td>
                                    @php($pDesc = strip_tags(htmlspecialchars_decode($item->description)))
                                    <p>
                                            {!! (strlen($pDesc) > 80) ? substr($pDesc,0,80).'...' : $pDesc; !!}
                                    </p>
                            </td>
                            <td><img src="{{ asset('thamnail/'.$item->thamnail) }}" style="height:50px;" alt=""></td>
                            <td><img src="{{ asset('cover/'.$item->cover) }}" style="height:50px;" alt=""></td>
                            <td><img src="{{ asset('image/'.$item->image) }}" style="height:50px;" alt=""></td>
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
