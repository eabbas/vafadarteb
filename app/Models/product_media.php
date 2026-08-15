<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_media extends Model
{
    protected $fillable=[
        'path',
        'product_id',
        'is_main',
        'is_active',
        'type',
    ];
    public function product(){
        return $this->belongsTo(Product::class , 'product_id');
    }
}
