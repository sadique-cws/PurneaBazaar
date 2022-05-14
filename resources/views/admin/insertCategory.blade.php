@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
               <h3>Insert Category Here</h3>
               <div class="card">
                   <div class="card-body">
                       <form action="{{ route("category.store") }}" method="POST">
                           @csrf
                           <div class="mb-3">
                            <label for="">Parent</label>
                            <select  name="parent_id" class="form-select" value="{{ old("parent_id") }}">
                                <option value="0">Main Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <p class="small text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                           <div class="mb-3">
                               <label for="">Category Title</label>
                               <input type="text" name="cat_title" class="form-control" value="{{ old("cat_title") }}">
                               @error('cat_title')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <input type="submit" value="Create Category" class="btn btn-success w-100">
                           </div>
                           
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection