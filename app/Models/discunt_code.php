<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\role;
use App\Models\role_user;
use App\Models\permision;
use App\Models\role_permision;
use App\Models\headerSetting;
use App\Models\hero;
use App\Models\category;
use App\Models\product;
use App\Models\address;
use App\Models\brand;
use App\Models\order;
use App\Models\cart;
use App\Models\advertisement;
use App\Models\referralCode;
use App\Models\product_labels;
use App\Models\phone_code;
use App\Models\staticUser;
use App\Models\support_information;
use App\Models\banner;
use App\Models\category_discunt_code;
use App\Models\product_discunt_code;
use App\Models\user_discunt_code;
class discunt_code extends Model
{
    protected $fillable=
    [
        "title",
        "code",
        "number",
        "percent",
        "is_active",
        'free_shipping',
        'start_date',
        'end_date',
        'usage_limit',
        'discunt_type',
        'discunt_value',
    ];
    public function products(){
        return $this->belongsToMany(product::class,'product_discunt_codes','discunt_code_id','product_id');
    }
    public function categories(){
        return $this->belongsToMany(category::class,'category_discunt_codes','discunt_code_id','category_id');
    }
    public function users(){
        return $this->belongsToMany(user::class,'user_discunt_codes','discunt_code_id','user_id');
    }
}
