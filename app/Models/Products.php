<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function seller() {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function payment() {
        return $this->hasMany(Payments::class, 'product_id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
