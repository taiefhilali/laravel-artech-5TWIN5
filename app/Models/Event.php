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
    return $this->hasMany(Participant::class);
}
    // Define any relationships here
}
