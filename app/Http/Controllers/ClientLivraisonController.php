<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Livraison;
use Auth;
use Illuminate\Http\Request;

class ClientLivraisonController extends Controller {
    public function index() {
        $Livraisons = Livraison::all();
        $livraisonsTunis = Livraison::where( 'region', 'Tunis' )->get();
        $livraisonsAriana = Livraison::where( 'region', 'Ariana' )->get();
        $livraisonsBen = Livraison::where( 'region', 'Ben_Arous' )->get();
        $livraisonsNab = Livraison::where( 'region', 'Nabeul' )->get();
        return view( 'Livraison.livraisonbase', compact( 'Livraisons', 'livraisonsTunis', 'livraisonsAriana', 'livraisonsBen', 'livraisonsNab' ) );
    }

    public function index2() {
        $Livraisons = Livraison::all();
        $livraisonsTunis = Livraison::where( 'region', 'Tunis' )->get();
        $livraisonsAriana = Livraison::where( 'region', 'Ariana' )->get();
        $livraisonsBen = Livraison::where( 'region', 'Ben_Arous' )->get();
        $livraisonsNab = Livraison::where( 'region', 'Nabeul' )->get();
        return view( 'Livraison.livreurlistelivraison', compact( 'Livraisons', 'livraisonsTunis', 'livraisonsAriana', 'livraisonsBen', 'livraisonsNab' ) );
    }

    public function accepter( Request $request, $livraisonId ) {
        try {
            // Récupérez l'utilisateur connecté
            $user = auth()->user();

            // Récupérez la livraison en fonction de $livraisonId
            $livraison = Livraison::findOrFail($livraisonId);

            // Assurez-vous que la livraison n'a pas déjà été acceptée
            if ( $livraison->etat_livraison === 'Accepter' ) {
                return response()->json( [ 'error' => 'Cette livraison a déjà été acceptée.' ], 400 );
            }

            // Mettez à jour l'état de la livraison à 'Accepter'
            $livraison->etat_livraison = 'Accepter';

            // Associez la livraison à l'utilisateur connecté
            $livraison->user_id = $user->id;

            $livraison->save();

            return response()->json( [ 'success' => 'La livraison a été acceptée avec succès.' ], 200 );
        } catch ( \Exception $e ) {
            return response()->json( [ 'error' => 'Une erreur est survenue lors de l\'acceptation de la livraison.' ], 500 );
        }
    }


    public function getCommandesLiv($livraisonId)
    {
        // Récupérez la livraison en fonction de son ID
        $livraison = Livraison::findOrFail($livraisonId);

        // Récupérez les commandes associées à cette livraison
        $commandes = $livraison->commandes()->get();

        // Retournez ces commandes en tant que réponse JSON
        return response()->json(['commandes' => $commandes ] );
        }




        public function annulerCommande($id)
        {
            $commande = Commande::find($id);

            if ($commande) {
                // Mettez à jour l'état de la commande en "annuler"
                $commande->etat_livraison = 'annuler';
                $commande->save();

                // Après avoir mis à jour l'état de la commande, vérifiez l'état de la livraison
                $this->verifierEtatLivraison($commande->livraison_id);

                return response()->json(['success' => 'Commande annulée avec succès']);
            }

            return response()->json(['error' => 'Commande non trouvée'], 404);
        }

        // Méthode pour marquer une commande comme payée
        public function payerCommande($id)
        {
            $commande = Commande::find($id);

            if ($commande) {
                // Mettez à jour l'état de la commande en "payee"
                $commande->etat_livraison = 'payee';
                $commande->save();

                // Après avoir mis à jour l'état de la commande, vérifiez l'état de la livraison
                $this->verifierEtatLivraison($commande->livraison_id);

                return response()->json(['success' => 'Commande payée avec succès']);
            }

            return response()->json(['error' => 'Commande non trouvée'], 404);
        }





        private function verifierEtatLivraison($livraisonId)
        {
            $livraison = Livraison::find($livraisonId);

            if ($livraison) {
                $commandes = $livraison->commandes;
                $livraisonTerminee = true;

                // Parcourez toutes les commandes pour vérifier si elles sont toutes "annuler" ou "payee"
                foreach ($commandes as $commande) {
                    if ($commande->etat_livraison !== 'annuler' && $commande->etat_livraison !== 'payee') {
                        $livraisonTerminee = false;
                        break;
                    }
                }

                if ($livraisonTerminee) {
                    // Mettez à jour l'état de la livraison en "terminer"
                    $livraison->etat_livraison = 'terminer';
                    $livraison->save();
                }
            }
        }






    }
