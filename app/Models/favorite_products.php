<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class favorite_products extends Model
{
    public $fillable=[
        'product_id',
        'user_id',
    ];
}
