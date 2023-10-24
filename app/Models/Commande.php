<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['name', 'description', 'date', 'price','qte' ,'image', 'status','product_id','region','etat_livraison', 'quantite_produits'];


public function products(){
    return $this->belongsToMany('App\Models\Product', 'commande_product', 'commande_id', 'product_id')->withPivot('quantity');
}
public function livraison() {
    return $this->belongsTo( Livraison::class, 'livraison_id' );
}

}


