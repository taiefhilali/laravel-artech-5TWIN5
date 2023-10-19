<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'artist', 'creation_date',
        'dimensions', 'medium', 'image_url','quantity','product_type_id'
    ];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function cartItems() {
        return $this->hasMany(Cart::class, 'product_id');
    }
    public function favoritedBy()
{
    return $this->belongsToMany(User::class, 'favorites');
}

    
}
