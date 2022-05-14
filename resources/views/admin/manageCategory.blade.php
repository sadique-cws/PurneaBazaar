@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="container">
                    @if ($msg = Session::get("success"))
                        <div class="alert bg-success text-white">
                            {{ $msg }}
                        </div>
                    @endif
                    @if ($msg = Session::get("error"))
                        <div class="alert bg-danger text-white">
                            {{ $msg }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-8">
                        <h6>Manage Categories</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{ route("category.create") }}" class="btn btn-success">Add New Category</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Parent Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($category as $item)
                        <tr>
                            <th>{{ $item->id }}</th>
                            <th>{{ $item->cat_title }}</th>
                            <th>
                                @if ($item->parent_id ==0)
                                main 
                                @else
                                {{ $item->parent->cat_title }}
                                @endif</th>
                            <th> 
                                <form action="{{ route("category.destroy", [$item]) }}" class="d-inline" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" class="btn btn-danger" value="X">
                                </form>
                                <a href="{{ route("category.edit",$item) }}" class="btn btn-info">Edit</a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection