<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package_media extends Model
{
    protected $fillable=[
        'path',
        'package_id',
        'is_main',
        'is_active',
        'type',
    ];
}
