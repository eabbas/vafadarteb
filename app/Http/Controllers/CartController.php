<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\attribute;
use App\Models\user;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product_attribute;
use App\Models\package;
use App\Models\attribute_package;
use App\Models\package_media;
use App\Models\brand;
use App\Models\cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function store(Request $request){
        $cart=cart::create([
            'user_id'=>$request->user_id,
            'product_id'=>$request->product_id,
            'order_id'=>null,
            'quantity'=>1,
        ]);
        $cart->product;
        foreach ($cart->product->medias as $media) {
            if($media->is_main==1){
                $cart->product->path=$media->path;
            }
        }
        return response()->json(['cart'=>$cart , 'product'=>$cart->product]);
    }
    public function update(Request $request , cart $cart){
        $cart->quantity=$request->quantity;
        $cart->save();
        return response()->json(['cartId'=>$cart->id , 'quantity'=>$cart->quantity]);
        dd('update');
    }
    public function delete(cart $cart){
        $cart->delete();
        return response()->json(true);
        dd('delete');
    }
    public function list(){
        dd('list');
    }
}
