<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function seller() {
        return $this->hasMany(Seller::class, 'seller_category');
    }

    public function products() {
        return $this->hasMany(Products::class, 'category_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
