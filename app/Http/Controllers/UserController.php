<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('user.index');
    }

    function viewProduct($id){
        $product = Product::find($id);
        return view('user.viewProduct',compact('product'));
        
    }
}
