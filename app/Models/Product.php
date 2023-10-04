<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'artist', 'artwork_title', 'creation_date',
        'dimensions', 'medium', 'frame', 'image_url','quantity','product_type_id'
    ];
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
