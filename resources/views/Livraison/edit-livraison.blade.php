<div class="modal-body">
    <!-- Formulaire de modification de la livraison -->
    <form id="editLivraisonForm">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="edit_date">Date</label>
            <input type="date" class="form-control" id="edit_date" name="date" value="{{ $livraison->date }}">
        </div>
        <div class="form-group">
            <label for="edit_region">Région</label>
            <input type="text" class="form-control" id="edit_region" name="region" value="{{ $livraison->region }}">
        </div>
        <div class="form-group">
            <label for="edit_quantite_max">Quantité maximale</label>
            <input type="number" class="form-control" id="edit_quantite_max" name="quantite_max" value="{{ $livraison->quantite_max }}">
        </div>
        <button type="button" id="editLivraison" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
