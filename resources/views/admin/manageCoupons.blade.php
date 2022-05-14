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
                        <h6>Manage Coupons</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add New Coupons</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Code</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
@endsection