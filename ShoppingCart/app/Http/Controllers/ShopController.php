<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\klCartItem;
use Auth;
use App\User;
use App\Cart;
use DB;

class ShopController extends Controller
{
    public function index()
    {
    	$products = Product::all();

    	return view('shop.index', compact('products'));
    }

    public function getCart()
    {
        if (Auth::guest()) {

        } else {
            $userId = \Auth::user()->id;
        	$carts = klCartItem::where('customer_id' , $userId)->get();
        }

    	return view('shop.cart', compact('carts'));
    }

    public function addToCart(Request $request, $id)
    {
        $user = \Auth::user()->id;
        $proInCart = klCartItem::find($id);

        if ($proInCart != []) {
            DB::table('kl_cart_items')->where('product_id', $id)->increment('quantity');
        }
        if ($proInCart == []) {
            $pro = Product::find($id);
            $user = \Auth::user()->id;

            $carts = new klCartItem;
            $carts->customer_id = $user;
            $carts->product_id = $pro->id;
            $carts->photo = $pro->photo;
            $carts->name = $pro->name;
            $carts->quantity = 1;
            $carts->price = $pro->price;
            $carts->save();
        }
	       return redirect()->back();
    }
}
