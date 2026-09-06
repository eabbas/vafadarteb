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
    public function store($cart){
        return response()->json($cart);
    }
    public function update(){
        dd('update');
    }
    public function delete(){
        dd('delete');
    }
    public function list(){
        dd('list');
    }
}
