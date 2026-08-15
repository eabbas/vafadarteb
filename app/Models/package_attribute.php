<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package_attribute extends Model
{
    protected $fillable=[
        'attribute_id',
        'package_id',
        'value',
    ];
}
