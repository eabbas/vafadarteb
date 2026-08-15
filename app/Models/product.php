<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\brand;
use App\Models\pro_medias;
use App\Models\Category;
use App\Models\attribute;
use App\Models\package;
class product extends Model
{
    protected $fillable=[
        'title',
        'description',
        'summary',
        'brand_id',
        'is_active',
        'show_in_home',
        'featured',
        'slug',
        'stock',
        'price',
        'discunt',
    ];
    public function brand(){
        return $this->belongsTo(brand::class , 'brand_id');
    }
    public function medias(){
        return $this->hasMany(product_media::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class , 'product_categories' , 'product_id' , 'category_id');
    }
    public function attributes(){
        return $this->belongsToMany(attribute::class , 'product_attributes' , 'product_id' , 'attribute_id')->withPivot(['value','id']);
    }
    public function packages(){
        return $this->hasMany(package::class);    
    }
    
}
