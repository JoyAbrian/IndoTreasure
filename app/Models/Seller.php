<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'seller_category');
    }

    public function product() {
        return $this->hasMany(Products::class, 'seller_id');
    }
}
