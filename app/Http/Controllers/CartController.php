<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(!auth()->user()) return response()->json(['error' => 'Please login to continue']);

        $product = Product::find($request->product_id);
        if(empty($product)) return response()->json(['error' => 'Requested product not found']);

        $quantity = $request->quantity ?? 1;
        $existingCartItem = Cart::where(['user_id'=>auth()->id(), 'product_id'=>$request->product_id, 'size'=>$request->size, 'color'=>$request->color])->first();

        if($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem['quantity'] + $quantity
            ]);
            $existingCartItem->save();
        }
        else {
            Cart::create([
                'user_id'   =>  auth()->id(),
                'product_id' => $request->product_id,
                'size'      =>  $request->size,
                'color'     =>  $request->color,
                'quantity'  =>  $quantity
            ]);
        }

        return response()->json(['success' => 'Product successfully added to cart']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        dd($cart->delete());
        return redirect()->back()->with('success', 'Cart item deleted');
    }
}
