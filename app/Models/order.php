<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable=[
        'address_id',
        'user_id',
        'order_status_id',
        'order_code',
    ];

    public function carts(){
        return $this->hasMany(cart::class,'order_id');
    }    
    public function address(){
        return $this->belongsTo(address::class);
    }
}