<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function brand(){
         return $this->hasOne(Brand::class,"id","brand_id");
    }
    public function category(){
         return $this->hasOne(Category::class,"id","category_id");
    }
}
