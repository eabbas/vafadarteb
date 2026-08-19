<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
    protected $fillable=[
        'title',
        'summary',
        'addres',
        'background_image_path',
        'hero_image_path',
        'is_active',
    ];
}
