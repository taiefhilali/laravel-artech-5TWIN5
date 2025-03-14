<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'date','owner', 'image'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function participants()
{
    return $this->hasMany(User::class,'participations');
}
    // Define any relationships here
}
