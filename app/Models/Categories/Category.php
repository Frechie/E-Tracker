<?php

namespace App\Models\Categories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_description',
        'cat_created_by_uid'
    ];


    public function getUser(){
        return $this->belongsTo(User::class, 'cat_created_by_uid', 'id');
    }
}
