<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $product = DB::table('tbl_product')->get();
        return view('cart',compact('products'));
    }

    public function add_cart(Request $request ,$product_id){
        $product = DB::table('tbl_product')->where('product_id', $product_id)->first();
        if($product != null){
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $product_id);
            
            $request->session()->put('cart', $newCart);
        }
         return view('pages.cart.cart-item', compact('newCart'));
    }
}
