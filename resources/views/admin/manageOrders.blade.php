@extends('admin.base')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h6>Manage Orders</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add New Orders</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>User</th>
                        <th>coupon</th>
                        <th>address</th>
                        <th>ordered</th>
                        <th>isDelivered</th>
                        <th>isProcessed</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
@endsection