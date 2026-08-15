<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role_permision extends Model
{
    protected $fillable=[
        'id',
        'permision_id',
        'role_id',
    ];
}
