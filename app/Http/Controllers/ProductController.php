<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(){
        $products= Product::latest()->paginate(5);
        return view('product', compact('products'));
    }
    public function addproduct(Request $request){

      $request->validate(
        [
            'name'=>'required|unique:products',
            'price'=>'required'
        ],
        [
            'name.required'=>'name is required',
            'name.unique'=>'product already exits',
            'price.required'=>'price is required'
        ]
        );


        $product = new Product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->save();
        return response()->json([
            'status'=>'success'
        ]);

    }

   
    public function updateproduct(Request $request){

      $request->validate(
        [
            'up_name'=>'required|unique:products,name'.$request->up_id,
            'up_price'=>'required'
        ],
        [
            'up_name.required'=>'name is required',
            'up_price.unique'=>'product already exits',
            'up_price.required'=>'price is required'
        ]
        );

        
            $product=Product::find($request->up_id);
            $product->name=$request->input('up_name');
            $product->price=$request->input('up_price');
            $product->save();
            return response()->json([
               'status'=>'success'
           ]);
     

         

    }
    // public function deleteproduct(Request $request){
        
    // }
}
