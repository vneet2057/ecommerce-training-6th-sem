<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function addToCart(Request $request,$id){
        if(Auth::user()){
            // add to cart
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->quantity = $request->quantity;
            $product = Product::find($id);
            $cart->unit_price = $product->product_price;
            $cart->save();
            
            return back()->with('message','Product Added To Cart Successfully');
        }else{
            return redirect('/login');
        }
    }
}
