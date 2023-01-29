<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;

class CheckoutController extends Controller
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
        $cart = Cart::with('product')->where('user_id', auth()->id())->get();
        foreach ($cart as $cartProduct) {
            $product = Product::find($cartProduct->product_id);
            if(!$product || $product->quantity < $cartProduct->quantity) {
                return back()
                    ->with('error', $cartProduct->product['name'].' not found in stock');
            }
        }
        
        $order = $this->createOrder($request);
        $this->resetCart();
        return redirect()->back()->with('success', 'Thank you for your shopping. Your order is successfully placed');        
    }
    public function createOrder(Request $request)
    {
            $order = Order::create([
                'user_id'   =>  auth()->id(),
                'order_number'  =>  'ORD-' . strtoupper(uniqid()),
                'status'    =>  'pending',
                'grand_total'   =>  $request->sub_total,
                'item_count'    =>  1,
                'name'  =>  $request->name,
                'phone'  =>  $request->phone,
                'address'  =>  $request->address,
                'notes' =>  $request->notes
            ]);
        return $order;
    }
    public function resetCart()
    {
        $carts = auth()->user()->carts;
        foreach ($carts as $cartProduct) {
            $product = Product::find($cartProduct->product_id)->decrement('quantity', $cartProduct['quantity']);
        }
        Cart::where('user_id', auth()->id())->delete();
    }    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
