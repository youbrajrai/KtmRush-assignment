<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function getNetPrice(): Attribute {
        return Attribute::make(
            get: fn () => $this->selling_price,
        );
    }         
}
