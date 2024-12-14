<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'price']; // Specify the fillable attributes

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class); // Each product belongs to one category
    }
}