<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attribute_package extends Model
{
    protected $fillable=[
        'attribute_id',
        'package_id',
        'value',
    ];
}
