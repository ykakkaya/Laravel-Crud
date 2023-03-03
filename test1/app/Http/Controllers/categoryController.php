<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList=Category::all();
        return view("category.index",compact("categoryList"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.categoryAdd");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Category::create($request->all());
        return redirect("category");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("category.categoryUpdate",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->categoryName = $request->categoryName;
        $category->categoryDescription = $request->categoryDescription;
        $category->save();
        return redirect("category");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect("category");
    }
}
