@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
               <h3>Update Brand Here</h3>
               <div class="card">
                   <div class="card-body">
                       <form action="{{ route("brand.update",$brand) }}" method="POST">
                        @method("put")
                           @csrf
                           <div class="mb-3">
                               <label for="">Title</label>
                               <input type="text" name="brand_title" class="form-control" value="{{ $brand->brand_title }}">
                               @error('brand_title')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <input type="submit" value="Update Brand" class="btn btn-success w-100">
                           </div>
                           
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection