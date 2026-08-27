<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_labels;
use App\Models\category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductLabelsController extends Controller
{
    public function create(){
        return view('admin.product_label.create');
    }
    public function store(Request $request){
        $PL=product_labels::find(1);
        if(isset($request->image)){
            if($PL){
                Storage::disk('public')->delete($PL->image);
            }
            $fullName=$request->image->getClientOriginalName();
            $path=$request->file("image")->storeAs("product_labels_media",$fullName,"public");
        }else{
            $path=$PL->image;
        }
        product_labels::upsert(
        [
            'id'=>1,
            'image'=>$path,
            'label_1'=>$request->label_1,
            'label_2'=>$request->label_2,
            'label_3'=>$request->label_3,

        ],[
            "id"
        ],[
            'image',
            'label_1',
            'label_2',
            'label_3',

        ]);
        return redirect('/');
    }
}
