<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_description',
        'cat_created_by_uid'
    ];


    public function user(){
        $this->belongsTo('User::class');
    }
}
