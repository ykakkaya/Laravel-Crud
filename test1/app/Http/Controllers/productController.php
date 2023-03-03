<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList=Product::all();
        return view("product.index",compact("productList"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.productAdd");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect("product");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("product.productUpdate",compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->productName = $request->productName;
        $product->productCategory = $request->productCategory;
        $product->productDescription = $request->productDescription;
        $product->productPrice = $request->productPrice;

        $product->save();
        return redirect("product");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect("product");
    }
}
