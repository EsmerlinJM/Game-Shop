<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'description', 'long_description', 'price', 'category_id', 'featured'];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
