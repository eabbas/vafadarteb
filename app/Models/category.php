<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable=[
        'title',
        'description',
        'summary',
        'parent_id',
        'show_in_home',
        'is_active',
        'image_path',
        'slug',
    ];
    public function children(){
        return $this->hasMany(category::class,'parent_id')->with('children');
    }
    public function products(){
        return $this->belongsToMany(Product::class , 'product_categories' , 'product_id' , 'category_id');
    }
    public function attributes(){
        return $this->hasMany(attribute::class);
    }
}
