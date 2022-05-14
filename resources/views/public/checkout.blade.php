@extends('public.master')

@section('content')
<div class="container-fluid text-white p-3 shadow sticky-top mb-3" style="background-color: #F1654C">
    <div class="container">
        <h4 class="h2 fw-lighter">Checkout </h4>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-8 mt-3">
                <h4>Fill Address Details</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="">contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                                    @error('contact')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="">Alternative contact</label>
                                    <input type="text" name="alt_contact" class="form-control" value="{{ old('alt_contact') }}">
                                    @error('alt_contact')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">Street/Village</label>
                                    <input type="text" name="street" class="form-control" value="{{ old('street') }}">
                                    @error('street')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">landmark</label>
                                    <input type="text" name="landmark" class="form-control" value="{{ old('landmark') }}">
                                    @error('landmark')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">city</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}">
                                    @error('city')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">state</label>
                                    <input type="text" name="state" class="form-control" value="{{ old('state') }}">
                                    @error('state')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="">pincode</label>
                                    <input type="text" name="pincode" class="form-control" value="{{ old('pincode') }}">
                                    @error('pincode')
                                        <p class="small text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="submit" class="btn btn-success w-100 mt-4" value="Submit & Pay">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3 bg-light h-100">
                <h4>Select Saved Address</h4>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5 class="h6">Sadique hussain (987654325)</h5>
                        <p class="small">Nagina bagh, Near - landmark, <br> Purnea city Purnea (Bihar) - 854301</p>

                        <a href="" class="btn btn-info small">Use this Address</a>
                    </div>
                </div>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5 class="h6">Sadique hussain (9546805580)</h5>
                        <p class="small">Nagina bagh, Near - landmark, <br> Purnea city Purnea (Bihar) - 854301</p>

                        <a href="" class="btn btn-info small">Use this Address</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection