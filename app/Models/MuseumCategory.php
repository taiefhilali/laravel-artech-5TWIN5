<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuseumCategory extends Model
{
    protected $table = 'museum_categories';

    protected $fillable = [
        'name',
        'description',
        'type'
        // Add other attributes here
    ];

    public function museums()
{
    return $this->hasMany(Museum::class);
}
}
