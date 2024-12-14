<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Specify the fillable attributes

    // Relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class); // One category can have many products
    }
}
