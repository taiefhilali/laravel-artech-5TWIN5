<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name', 'email', 'date','description','ratings'];

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
