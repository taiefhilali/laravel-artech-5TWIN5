<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model {
    protected $fillable = [ 'name', 'description', 'date', 'price', 'region', 'image', 'etat_livraison', 'quantite_produits' ];

    public function livraison() {
        return $this->belongsTo( Livraison::class, 'livraison_id' );
    }

}
