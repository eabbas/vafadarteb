<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    protected $fillable=[
        'title',
        'subtitle',
        'summary',
        'category_id',
        'image_path',
    ];
}
