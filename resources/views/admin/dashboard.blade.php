@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h2 class="display-3">55+</h2>
                                <h5>Total Products</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h2 class="display-3">553+</h2>
                                <h5>Total orders</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h2 class="display-3">155+</h2>
                                <h5>Total Users</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h2 class="display-3">512312</h2>
                                <h5>Total payments</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-warning text-dark">
                            <div class="card-body">
                                <h2 class="display-3">553+</h2>
                                <h5>Total Category</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h2 class="display-3">155+</h2>
                                <h5>Total Brand</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection