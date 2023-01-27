<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sizes()
    {
        return $this->hasMany(Size::class,'size_id');
    }
    public function colors()
    {
        return $this->hasMany(Color::class,'color_id');
    }          
}
