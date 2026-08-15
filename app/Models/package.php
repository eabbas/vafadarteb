<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable=[
        'product_id',
        'description',
        'summary',
        'is_active',
        'stock',
        'price',
        'discunt',
        'featured',
    ];
    public function product(){
        return $this->belongsTo(Product::class , 'product_id');
    }
    public function medias(){
        return $this->hasMany(package_media::class);
    }
    public function attributes(){
        return $this->belongsToMany(attribute::class , 'attribute_packages' , 'package_id' , 'attribute_id')->withPivot(['value','id']);
    }
}
