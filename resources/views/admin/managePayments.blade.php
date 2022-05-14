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
                        <h6>Manage Payments</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add New Payment</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>type</th>
                        <th>bank name</th>
                        <th>mode</th>
                        <th>txn id</th>
                        <th>status</th>
                        <th>order id</th>
                        <th>date of payment</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
@endsection