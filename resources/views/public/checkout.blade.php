<<<<<<< HEAD
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
=======
@extends('public/master')

@section('content')
<div class="container-fluid bg-secondary text-white p-3 shadow-sm sticky-top">
    <div class="container">
        <h4 class=" h2 fw-lighter">CheckOut </h4>
    </div>
 </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 mt-3">
                <h4>Address Fill</h4>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
<<<<<<< HEAD
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
=======
                                <div class="col-lg-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" value="{{ old('contact') }}" class="form-control" placeholder="Enter Contact">
                                    @error('contact')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label for="">Alternative Contact</label>
                                    <input type="text" name="alt_contact" value="{{ old('alt_contact') }}" class="form-control" placeholder="Enter Alternamtive Conttact">
                                    @error('alt_contact')
                                        <p class="text-danger small">{{$message}}</p>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
<<<<<<< HEAD
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
=======
                                <div class="col-lg-6">
                                    <label for="">Street / Village</label>
                                    <input type="text" name="street" value="{{ old('street') }}" class="form-control" placeholder="Enter Street">
                                    @error('street')
                                        <p class="text-danger small">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">LandMark</label>
                                    <input type="text" name="landmark" value="{{ old('landmark') }}" class="form-control" placeholder="Enter Landmark">
                                    @error('landmark')
                                        <p class="text-danger small">{{ $message}}</p>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
<<<<<<< HEAD
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
=======
                                <div class="col-lg-6">
                                    <label for="">City</label>
                                    <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="Enter City">
                                    @error('city')
                                        <p class="small text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="">State</label>
                                    <input type="text" name="state" value="{{ old('state') }}" class="form-control" placeholder="Enter State">
                                    @error('state')
                                        <p class="small text-danger">{{ $message}}</p>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
<<<<<<< HEAD
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
=======
                                <div class="col-lg-6">
                                    <label for="">Pincode</label>
                                    <input type="text" name="pincode" value="{{ old('pincode') }}" class="form-control" placeholder="Enter Pincode">
                                    @error('pincode')
                                        <p class="small text-danger">{{ $message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                  <input type="submit" value="Submit & Pay " class="btn btn-success mt-4 w-100">
                                </div>
                            </div>

>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                        </form>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <div class="col-4 mt-3 bg-light h-100">
                <h4>Select Saved Address</h4>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5 class="h6">Sadique hussain (987654325)</h5>
                        <p class="small">Nagina bagh, Near - landmark, <br> Purnea city Purnea (Bihar) - 854301</p>

                        <a href="" class="btn btn-info small">Use this Address</a>
=======
            <div class="col-lg-4 mt-3">
                <h4>Select Address Sved</h4>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
                        <h5>Aaditya Kumar(8359393284)</h5>
                         <p class="small">Kalimandir Old bus stand road Purnea</p>
                         <a href="" class="btn  btn-sm btn-primary">Use This Address</a>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                    </div>
                </div>
                <div class="card mt-3 bg-light">
                    <div class="card-body">
<<<<<<< HEAD
                        <h5 class="h6">Sadique hussain (9546805580)</h5>
                        <p class="small">Nagina bagh, Near - landmark, <br> Purnea city Purnea (Bihar) - 854301</p>

                        <a href="" class="btn btn-info small">Use this Address</a>
=======
                        <h5>Aaditya Kumar(8359393284)</h5>
                         <p class="small">Kalimandir Old bus stand road Purnea</p>
                         <a href="" class="btn  btn-sm btn-primary">Use This Address</a>
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD

=======
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
@endsection