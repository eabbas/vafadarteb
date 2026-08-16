<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\attribute;
use App\Models\attribute_package;
use App\Models\brand;
use App\Models\category;
use App\Models\package_attribute;
use App\Models\package_media;
use App\Models\permision;
use App\Models\product_attribute;
use App\Models\product_category;
use App\Models\product_media;
use App\Models\product;
use App\Models\role;
use App\Models\role_permision;
use App\Models\role_user;
use App\Models\User;
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
        return $this->belongsTo(product::class , 'product_id');
    }
    public function medias(){
        return $this->hasMany(package_media::class);
    }
    public function attributes(){
        return $this->belongsToMany(attribute::class , 'attribute_packages' , 'package_id' , 'attribute_id')->withPivot(['value','id']);
    }
}
