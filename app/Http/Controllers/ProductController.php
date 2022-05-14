<?php

namespace App\Http\Controllers;

use App\Models\{Product,Category,Brand};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['product'] = Product::all();
        return view("admin.manageProducts",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category']= Category::all();
        $data['brand']= Brand::all();
        return view('admin.insertProduct',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>"required",
            'category_id' =>"required",
            'brand_id' =>"required",
            'price' =>"required",
            'discount_price' =>"required",
            'image' =>"required",
            'description' =>"required",
            'stock' =>"required",
        ]);
        $data = new Product();
        $data->title = $request->title;
        $data->category_id = $request->category_id;
        $data->brand_id = $request->brand_id;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $filename = $request->image->getClientOriginalName();
         $request->image->move(public_path("images"),$filename);
        $data->image = $filename;
        $data->stock = $request->stock;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
