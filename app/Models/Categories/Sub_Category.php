<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model  {
    use HasFactory;

    protected $fillable = [
        'sub_cat_name',
        'sub_cat_descriptioin',
        'sub_cat_created_by_uid'
    ];
}
