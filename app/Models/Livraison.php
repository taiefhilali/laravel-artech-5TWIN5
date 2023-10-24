<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model {
    protected $fillable = [
        'date',
        'etat_livraison',
        'quantite_max',
        'region',
    ];

    public function commandes() {
        return $this->hasMany( Commande::class );
    }

    public function livraisons() {
        return $this->hasMany( Livraison::class, 'user_id' );
    }

}
