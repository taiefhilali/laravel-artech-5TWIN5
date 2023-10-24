<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MuseumCategory;

class Museum extends Model
{
    protected $table = 'museums';

    protected $fillable = [
        'name',
        'description',
        'founding_date',
        'address',
        'zip_code',
        'phone_number',
        'website',
        'email',
        'category_id'
        // Add other attributes here
    ];

    public function category()
{
    return $this->belongsTo(MuseumCategory::class);
}
}
