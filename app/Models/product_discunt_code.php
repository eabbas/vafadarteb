<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\discunt_code;
class product_discunt_code extends Model
{
    public $fillable=[
        'product_id',
        'discunt_code_id',
    ];
}
