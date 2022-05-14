@extends('public.master')

@section('content')
   <div class="container mt-3">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
                <a href="" class="list-group-item list-group-item-action">Item 1</a>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <img src="https://via.placeholder.com/500.jpg" class="w-100" alt="">
                </div>
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>this is product title</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>Mobile</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><h5><del>600/-</del></h5></td>
                        </tr>
                        <tr>
                            <th>Offer Price</th>
                            <td><h5>200/-</h5></td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>TCS</td>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <td>55</td> 
                        </tr>
                    </table>

                    <div class="row">
                        <div class="col">
                            <a href="{{ route('cart') }}" class="btn btn-success">Add To Cart</a>
                            <a href="" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card">
                    <div class="card-header">
                        <h6>Description</h6>
                    </div>
                    <div class="card-body">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat culpa aliquid atque repudiandae aspernatur velit animi harum quidem officia delectus beatae est accusantium, blanditiis, reiciendis placeat! Qui, corporis a.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection