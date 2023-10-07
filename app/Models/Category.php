<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description']; // Specify the fields that can be mass-assigned

    // Define the relationship with the Event model
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}

