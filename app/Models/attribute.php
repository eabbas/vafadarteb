<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    protected $fillable=[
    'title',
    'category_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }
    public function products(){
        return $this->belongsToMany(Product::class , 'pro_attributes' , 'attribute_id' , 'product_id');
    }
    public function package(){
        return $this->belongsToMany(package::class , 'pack_attributes' , 'attribute_id' , 'pack_id');
    }
}
