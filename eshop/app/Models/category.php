<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    Use HasFactory;

    protected $fillable = ['name','description','image'];

    public function products()
    {
        return $this->hasMany(product::class);
    }
}
