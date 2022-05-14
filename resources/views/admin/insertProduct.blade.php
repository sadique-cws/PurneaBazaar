@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
               <h3>Insert product Here</h3>
               <div class="card">
                   <div class="card-body">
                       <form action="{{ route("product.store") }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="mb-3">
                               <label for="">Title</label>
                               <input type="text" name="title" class="form-control" value="{{ old("title") }}">
                               @error('title')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">category</label>
                              <select  name="category_id" class="form-select" value="{{ old("category_id") }}">
                                <option selected value="">Select Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->cat_title }}</option>
                                 @endforeach
                            </select>
                               @error('category_id')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Brand </label>
                               <select  name="brand_id" class="form-select" value="{{ old("brand_id") }}">
                                <option selected value="">Select Brand</option>
                                @foreach ($brand as $item)
                                    <option value="{{ $item->id }}">{{ $item->brand_title }}</option>
                                 @endforeach
                            </select>
                               @error('brand_id')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for=""> Price</label>
                               <input type="text" name="price" class="form-control" value="{{ old("price") }}">
                               @error('price')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Discount Price</label>
                               <input type="text" name="discount_price" class="form-control" value="{{ old("discount_price") }}">
                               @error('discount_price')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Stock</label>
                               <input type="text" name="stock" class="form-control" value="{{ old("stock") }}">
                               @error('stock')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Image</label>
                               <input type="file" name="image" class="form-control" value="{{ old("image") }}">
                               @error('image')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <label for="">Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                   @error('description')
                                   <p class="small text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           <div class="mb-3">
                               <input type="submit" value="Create Product" class="btn btn-success w-100">
                           </div>
                           
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection