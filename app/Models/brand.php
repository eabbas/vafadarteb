<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable=[
        "title",
        "description",
        "slug",
        "logo_path",
        "is_active",
        "show_in_home",
    ];
    
    public function products(){
        return $this->hasMany(product::class);
    }
}
