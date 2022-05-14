@extends('public.master')

@section('content')
    <div class="container-fluid text-dark p-3 shadow sticky-top mb-3" style="background-color: #2CC990">
        <div class="container">
            <h4 class="h2 fw-lighter">Your Cart </h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                <div class="row">
                    {{-- repeated part --}}
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/200.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>this is product Title</h5>
                                    <p>Mobile</p>
                                    <h6>Rs. 500/- <del>1000/-</del></h6>
                                    <a href="" class="btn btn-danger">-</a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-success">+</a>
    
                                    <a href="" class="btn btn-dark float-end">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/200.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>this is product Title</h5>
                                    <p>Mobile</p>
                                    <h6>Rs. 500/- <del>1000/-</del></h6>
                                    <a href="" class="btn btn-danger">-</a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-success">+</a>
    
                                    <a href="" class="btn btn-dark float-end">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/200.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>this is product Title</h5>
                                    <p>Mobile</p>
                                    <h6>Rs. 500/- <del>1000/-</del></h6>
                                    <a href="" class="btn btn-danger">-</a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-success">+</a>
    
                                    <a href="" class="btn btn-dark float-end">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>
               
            </div>
            <div class="col-4 mt-3">
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">Total Amount <span class="float-end">Rs. 5000/-</span></div>
                    <div class="list-group-item list-group-item-action bg-success text-white">Total Discount <span class="float-end">Rs. 4000/-</span></div>
                    <div class="list-group-item list-group-item-action">TAX (18%) <span class="float-end">Rs. 400/-</span></div>
                    <div class="list-group-item list-group-item-action bg-warning">Coupon Discount <span class="float-end">Rs. 100/-</span></div>
                    <div class="list-group-item list-group-item-action"><h5> Payable Amount <span class="float-end">Rs. 103330/-</span></h5></div>
                </div>

                <div class="row mt-3 px-2">
                    <a href="" class="btn btn-success col">Continue Shopping</a>
                    <a href="{{ route('checkout') }}" class="btn btn-danger col ms-2">Checkout</a>
                </div>
            </div>
        </div>
    </div>

@endsection