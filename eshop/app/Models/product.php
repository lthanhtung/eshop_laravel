<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    Use HasFactory;
    protected $fillable =[
        'name',
        'price',
        'description',
        'image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function cartItems(){
        return $this->belongsToMany(CartItem::class);
    }
}
