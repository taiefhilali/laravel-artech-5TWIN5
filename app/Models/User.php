<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone',
    
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function favorites()
{
    return $this->belongsToMany(Product::class, 'favorites');
}
public function participant()
{
    return $this->hasOne(Participant::class);
}
// public function isParticipatingInEvent($event)
// {
//     // Check if the user is participating in the event
//     return $this->participant->where('event_id', $event->id)->exists();
// }
  
public function feedback()
{
    return $this->hasMany(Feedback::class);
}


public function is_admin(): bool {
    return $this->role === 1;
    // Si vous avez stocké 1 pour les administrateurs dans la base de données
}

public function is_client(): bool {
    return $this->role === 0;
    // Si vous avez stocké 1 pour les administrateurs dans la base de données
}

public function is_livreur(): bool {
    return $this->role === 2;
    // Si vous avez stocké 1 pour les administrateurs dans la base de données
}
}
