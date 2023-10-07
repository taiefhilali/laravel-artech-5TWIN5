<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Livraison;
use Illuminate\Http\Request;

class LivraisonController extends Controller {
    public function index() {
        $Livraisons = Livraison::whereIn('etat_livraison', ['Accepter', 'Pas_Accepter'])->get();
        $livraisonsTunis = Livraison::where( 'region', 'Tunis' )->get();
        $livraisonsAriana = Livraison::where( 'region', 'Ariana' )->get();
        $livraisonsBen = Livraison::where( 'region', 'Ben_Arous' )->get();
        $livraisonsNab = Livraison::where( 'region', 'Nabeul' )->get();
        return view( 'Livraison.index', compact( 'Livraisons','livraisonsTunis', 'livraisonsAriana', 'livraisonsBen','livraisonsNab' ) );
    }
    public function calendriertunis() {
        $livraisonsTunis = Livraison::where( 'region', 'Tunis' )->get();
        $livraisonsAriana = Livraison::where( 'region', 'Ariana' )->get();
        $livraisonsBen = Livraison::where( 'region', 'Ben_Arous' )->get();
        $Livraisons = Livraison::all();
        $livraisonsNab = Livraison::where( 'region', 'Nabeul' )->get();


        return view( 'Livraison.index', compact('Livraisons', 'livraisonsTunis', 'livraisonsAriana', 'livraisonsBen','livraisonsNab' ) );
    }
    public function store( Request $request ) {
        $validatedData = $request->validate( [
            'date' => 'required|date',
            'region' => 'required',
            'quantite_max' => 'required|integer',
        ] );

        $commandes = Commande::where( 'region', $request->input( 'region' ) )
        ->where( 'etat_livraison', 'Non Pris' )
        ->whereDate( 'date', '=', date( 'Y-m-d', strtotime( '-2 days', strtotime( $request->input( 'date' ) ) ) ) )
        ->where( 'quantite_produits', '<=', $request->input( 'quantite_max' ) )
        ->orderBy( 'quantite_produits', 'desc' )
        ->get();

        $errors = [];

        if ( $commandes->isEmpty() ) {

            if ( Commande::where( 'region', $request->input( 'region' ) )->count() === 0 ) {
                $errors[] = 'Aucune commande trouvée pour la région.';
                return response()->json( [ 'errors' => $errors ] );

            }

            if ( Commande::where( 'etat_livraison', 'Non Pris' )->count() === 0 ) {
                $errors[] = "Aucune commande 'Non Pris' trouvée pour la région.";
                return response()->json( [ 'errors' => $errors ] );

            }

            if ( Commande::where( 'date', '=', date( 'Y-m-d', strtotime( '-2 days', strtotime( $request->input( 'date' ) ) ) ) )->count() === 0 ) {
                $errors[] = "Aucune commande 'Non Pris' trouvée pour la région avant deux jours de cette date.";
                return response()->json( [ 'errors' => $errors ] );

            }

            if ( Commande::where( 'quantite_produits', '<=', $request->input( 'quantite_max' ) )->count() === 0 ) {
                $errors[] = 'Problème : aucune commande "Non Pris" avec une quantité inférieure ou égale au maximum.';
                return response()->json( [ 'errors' => $errors ] );

            }

        }
        $livraison = Livraison::create( [
            'date' => $request->input( 'date' ),
            'region' => $request->input( 'region' ),
            'etat_livraison' => 'Pas_Accepter',
            'quantite_max' => $request->input( 'quantite_max' ),
        ] );
        $livraisonQuantiteMax = $livraison->quantite_max;

        foreach ( $commandes as $commande ) {
            $commandeQuantite = $commande->quantite_produits;
            if ( $commandeQuantite <= $livraisonQuantiteMax ) {
                $commande->livraison_id = $livraison->id;
                $commande->etat_livraison = 'En_Attente';
                $commande->save();
                // Utilisez save() pour enregistrer les modifications.
                $livraisonQuantiteMax -= $commandeQuantite;
            }
        }
        // Afficher le message de succès avec Swal
        $swalMessage = 'Livraison ajoutée avec succès.';

        // Vous devez renvoyer un message JSON que votre JavaScript Swal peut traiter
        return response()->json( [ 'success' => $swalMessage, 'livraison'=>$livraison ] );
    }

    public function getLivraisonDetails( $livraisonId ) {
        $livraison = Livraison::findOrFail( $livraisonId );
        //  dd( $livraison->commandes()->count() );

        return response()->json( $livraison );
    }

    public function edit( Request $request, $livraisonId ) {
        $livraison = Livraison::findOrFail( $livraisonId );
        $errors = [];
    if ($livraison->etat_livraison === 'Accepter') {
        $errors[] = 'Cette livraison est affectée à un livreur et ne peut pas être editer.';

    }
        $validatedData = $request->validate( [
            'date' => 'required|date',
            'region' => 'required',
            'quantite_max' => 'required|integer',
        ] );

        // Détachez temporairement les commandes liées à la livraison
        $livraison->commandes->each ( function ( $commande ) {
            $commande->livraison_id = null;
            $commande->etat_livraison = 'Non Pris';
            $commande->save();
        }
    );

    // Obtenez la liste de commandes qui respectent les critères de mise à jour
    $commandes = Commande::where( 'region', $request->input( 'region' ) )
    ->where( 'etat_livraison', 'Non Pris' )
    ->whereDate( 'date', '=', date( 'Y-m-d', strtotime( '-2 days', strtotime( $request->input( 'date' ) ) ) ) )
    ->where( 'quantite_produits', '<=', $request->input( 'quantite_max' ) )
    ->orderBy( 'quantite_produits', 'desc' )
    ->get();


    if ( $commandes->isEmpty() ) {
        if ( Commande::where( 'region', $request->input( 'region' ) )->count() === 0 ) {
            $errors[] = 'Aucune commande trouvée pour la région.';
        }

        if ( Commande::where( 'etat_livraison', 'Non Pris' )->count() === 0 ) {
            $errors[] = "Aucune commande 'Non Pris' trouvée pour la région.";
        }

        if ( Commande::where( 'date', '=', date( 'Y-m-d', strtotime( '-2 days', strtotime( $request->input( 'date' ) ) ) ) )->count() === 0 ) {
            $errors[] = "Aucune commande 'Non Pris' trouvée pour la région avant deux jours de cette date.";
        }

        if ( Commande::where( 'quantite_produits', '<=', $request->input( 'quantite_max' ) )->count() === 0 ) {
            $errors[] = 'Problème : aucune commande "Non Pris" avec une quantité inférieure ou égale au maximum.';
        }
    }

    if ( !empty( $errors ) ) {
        return response()->json( [ 'errors' => $errors ] );
    }

    // Si tout est valide, mettez à jour la livraison
    $livraison->update( $validatedData );

    $livraisonQuantiteMax = $livraison->quantite_max;

    foreach ( $commandes as $commande ) {
        $commandeQuantite = $commande->quantite_produits;
        if ( $commandeQuantite <= $livraisonQuantiteMax ) {
            $commande->livraison_id = $livraison->id;
            $commande->etat_livraison = 'En_Attente';
            $commande->save();
            $livraisonQuantiteMax -= $commandeQuantite;
        }
    }

    $swalMessage = 'Livraison mise à jour avec succès.';

    return response()->json( [ 'success' => $swalMessage, 'livraison' => $livraison, 'commandes'=>$commandes ] );
}

public function delete( $livraisonId ) {
    // Recherchez la livraison par son ID
    $livraison = Livraison::findOrFail( $livraisonId );
    if ($livraison->etat_livraison === 'Accepter') {
        return response()->json(['error' => 'Cette livraison est affectée à un livreur et ne peut pas être supprimée.'], 422);
    }
    // Vérifiez si la livraison existe
    if ( !$livraison ) {
        return response()->json( [
            'error' => 'La livraison n\'existe pas.',
        ], 404);
    }

    // Vérifiez s'il y a des commandes liées à cette livraison
            if ( $livraison->commandes()->count() > 0 ) {
                // Détachez les commandes de la livraison
                $livraison->commandes->each ( function ( $commande ) {
                    $commande->livraison_id = null;
                    $commande->etat_livraison = 'Non Pris';
                    $commande->save();
                }
            );
                $livraison->delete();

                return response()->json( [
                    'success' => 'La livraison a été supprimée avec succès, et les commandes ont été détachées.',
                ] );
            }

            // Si aucune commande n'est liée, supprimez simplement la livraison
    $livraison->delete();

    return response()->json([
        'success' => 'La livraison a été supprimée avec succès.',
        ] );
    }

}
