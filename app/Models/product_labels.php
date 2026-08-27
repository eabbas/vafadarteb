<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_labels extends Model
{
    protected $fillable=[
        'image',
        'label_1',
        'label_2',
        'label_3'
    ];
}
