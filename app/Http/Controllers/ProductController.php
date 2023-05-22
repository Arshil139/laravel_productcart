<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    
    public function addproduct(Request $request)
    {
        return view('create');
    }
    public function listproduct()
    {
       $products= Product :: all();
        return view('welcome',compact('products'));
    }

    public function store(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->info = $request->info;
      
        $product->save();
        return redirect('listproduct');
    }
    public function cart(Request $request)
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
          
        } else {
            $cart[$id] = [
                "name" => $product->name,
                
                "price" => $product->price,
                "info" => $product->info
                
            ];
        }
          
        session()->put('cart', $cart);
        return redirect('/cart');
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
