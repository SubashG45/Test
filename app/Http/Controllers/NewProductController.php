<?php

namespace App\Http\Controllers;

use App\Models\Admin\NewProduct;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.Newproduct.index', compact('categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\NewProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function show(NewProduct $newProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\NewProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(NewProduct $newProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\NewProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewProduct $newProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\NewProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewProduct $newProduct)
    {
        //
    }
}
