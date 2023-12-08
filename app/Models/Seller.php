<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Seller extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

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
