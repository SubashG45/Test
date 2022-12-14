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
    public function create(Request $request)
    {
        $newProducts = NewProduct::all();
        return view('admin.Product.index', compact('newProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $image->move('images', $new_image);
        // dd($request->all());
        $newProduct = NewProduct::create([
            'name' => $request['name'],
            'image' => 'images/' . $new_image,
            'category_id' => $request['category_id'],
            'subcategory_id' => $request['subcategory_id'],
            'description' => $request['description'],
            'price' => $request['price'],
        ]);
        return redirect()->back();
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
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.Product.edit', compact('newProduct', 'categories', 'subcategories'));
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
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $newProduct->update($request->all());
        return redirect()->route('new-product.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\NewProduct  $newProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewProduct $newProduct)
    {
        $newProduct->delete();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $search = $_GET['search'];
        $newProducts= NewProduct::where('name', "LIKE", "%" . $search . "%")->get();
        return view('admin.Product.search', compact('newProducts'));
    }

    public function sort()
        {
            // dd("being sorting");
            $newProducts = NewProduct::orderBy('name')->get();
            return view('admin.Product.index', compact('newProducts'));
        }
    
}
