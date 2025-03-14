<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['dateComment','descriptionComment'];

   

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
    
}
