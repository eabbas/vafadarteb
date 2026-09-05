<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staticUser extends Model
{
    public $fillable=[
        'name',
        'role',
        'message',
    ];
}
