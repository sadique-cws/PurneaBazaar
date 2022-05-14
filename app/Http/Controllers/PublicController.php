<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
<<<<<<< HEAD
    //
    public function index(){
        return view("public.home");
    }
    
    public function viewProduct($p_id){
        return view("public.viewProduct");
    }

    public function cart(){
        return view("public.cart");
    }
    public function checkout(){
        return view("public.checkout");
=======
    public function index(){
        return view("public/home");
    }
    public function viewProduct($p_id){
        return view("public/viewProduct");
    }
    public function cart(Request $request){

        return view("public/cart");
    }
    public function checkOut(){
        return view("public/checkout");
>>>>>>> e4a8f6efdc602f3f196cfdc25a1bf4fe6af1d277
    }
}
