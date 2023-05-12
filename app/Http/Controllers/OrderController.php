<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){
        $orders = Order::all();
        foreach($orders as $order)
        {
            $order_details = OrderDetails::where('order_id',$order->id)->get();
            foreach($order_details as $details)
            {
                $product = Product::where('id',$details->product_id)->first();
                $details['product_name'] = $product->product_name;
            }
            $order['order_details'] = $order_details; 
        }
        return view('admin.order.index',compact('orders'));
    }

    function changeOrderDetails(Request $request,$id){
        $order = Order::find($id);
        $order->payment_status = $request->payment_status;
        $order->order_status = $request->order_status;
        $order->save();

        return back()->with('message','Order Details Updated');

    }
}
