<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $sizes = Size::get();
        $colors = Color::get();
        return view('backend.product.add',compact('categories','sizes','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productSize = $request->sizes ? $request->sizes : ['n/a'];
        $product = new Product;
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/assets/img/products/', $filename);
			$product['image'] = trim($filename);
		}         
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->size = serialize($productSize);
        $product->color = serialize($request->colors);
        $product->quantity = $request->quantity;
        $product->original_price = $request->original_price;
        $product->selling_price = $request->selling_price;
        $product->description = $request->description;
        $product->trending = $request->trending;
        $product->status = $request->status;
        $product->save();
        return redirect()->back()->with("message","Product Added!");
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
        $categories = Category::get();
        $sizes = Size::get();
        $colors = Color::get();
        return view('backend.product.edit',compact('categories','sizes','colors','product'));    
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
        $productSize = $request->sizes ? $request->sizes : ['n/a'];
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/assets/img/products/', $filename);
			$product['image'] = trim($filename);
		}         
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->size = serialize($productSize);
        $product->color = serialize($request->colors);
        $product->quantity = $request->quantity;
        $product->original_price = $request->original_price;
        $product->selling_price = $request->selling_price;
        $product->description = $request->description;
        $product->trending = $request->trending;
        $product->status = $request->status;
        $product->save();
        return redirect()->back()->with("message","Product Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Product successfully deleted');
    }
    public static function attributes($type=false){
        if($type){
            $attributes = new Product();
        }
		if (request()->has('image')) {
			$file = request()->file('image');
			$name = $file->getClientOriginalName();
			$filename = time() . '.' . $name;
			$file->move(public_path() . '/assets/img//', $filename);
			$attributes['image'] = trim($filename);
		}  
        $attributes['title'] = request('title');
        $attributes['category_id'] = request('category_id');
        $attributes['size'] = request('sizes');
        $attributes['color'] = request('colors');
        $attributes['quantity'] = request('quantity');
        $attributes['original_price'] = request('original_price');
        $attributes['selling_price'] = request('selling_price');
        $attributes['description'] = request('description');
        $attributes['status'] = request('status');
        $attributes['trending'] = request('trending');
        return $attributes;
    }    
}
