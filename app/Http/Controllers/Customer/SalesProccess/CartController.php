<?php

namespace App\Http\Controllers\Customer\SalesProccess;

use App\Http\Controllers\Controller;
use App\Models\Market\CartItem;
use App\Models\Market\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        if (Auth::check())
        
        {
            $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
            $relatedProducts = Product::all();
            return view('customer.sales-process.cart', compact('cartItems', 'relatedProducts'));
        }
        
        else {

            return redirect()->route('auth.customer.login-register-form');  
        }

    }

    public function updateCart(Request $request)
    {   
        $inputs = $request->all();
       
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();

        foreach($cartItems as $cartItem) 
        {

            if(isset($inputs['number'][$cartItem->id]))
            {
                $cartItem->update([ 'number' => $inputs['number'][$cartItem->id]]);

            }

        }

        return redirect()->route('');


    }

    public function addToCart(Product $product, Request $request)
    {

        if (Auth::check()) {

            $request->validate([

                'numder' => 'numeric|min:1|max:5',

            ]);

            $cartItems = CartItem::where('product_id', $product->id)->where('user_id', auth()->user()->id)->get();


            foreach ($cartItems as $cartItem) {
                    if ($cartItem->number != $request->number) {

                        $cartItem->update(['number' => $request->number]);
                    }
                    return back();

            }

            $inputs = [];
            $inputs['user_id'] = auth()->user()->id;
            $inputs['product_id'] = $product->id;

            CartItem::create($inputs);

            return back();

        }
        
        else {

            return redirect()->route('auth.customer.login-register-form');

        }

    }

    public function removeFromCart(CartItem $cartItem)
    {

        if( $cartItem->user_id === Auth::user()->id)
        {
            $cartItem->delete();

        }
       
        return back();

    }
}
