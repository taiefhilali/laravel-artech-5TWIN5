@extends('layouts.layout')
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js"></script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css' rel='stylesheet' />


</head>
<style>

.small-calendar {
    width: 100%; /* Largeur du calendrier */
    height: 400px; /* Hauteur du calendrier */
}



    .text-success {
    color: green; /* Texte en vert pour l'état "Accepter" */
}

.text-danger {
    color: orange; /* Texte en rouge pour l'état "Pas_Accepter" */
}

.text-purple {
    color: purple; /* Texte en violet pour d'autres états */
}
</style>
@section('content')
    <section id="basic-horizontal-layouts">
        <div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="calendarModalLabel">Calendrier des Livraisons</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="calendar" class="small-calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addLivraisonModal" tabindex="-1" role="dialog" aria-labelledby="addLivraisonModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLivraisonModalLabel">Ajouter une Livraison</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <form id="livraisonForm" method="post" action="{{ route('livraison.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>

                            <div class="form-group">
                                <label for="quantite_max">Quantité maximale</label>
                                <input type="number" class="form-control" id="quantite_max" name="quantite_max">
                            </div>

                            <div class="form-group">
                                <label for="region">Région</label>
                                <select class="form-control" id="region" name="region">
                                    <option value="Tunis">Tunis</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Ben_Arous">Ben Arous</option>
                                    <option value="Nabeul">Nabeul</option>
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="button" id="saveLivraison" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>






        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addLivraisonModal">
                        Ajouter Livraison
                    </button>
                </div>
                <div class="mb-3">

                    <button id="showCalendar" class="btn btn-secondary">Calendrier</button>

                </div>
                <table class="table" id="livraisonTable">
                    <thead>
                        <tr>
                            <th>#Num</th>
                            <th>Date</th>
                            <th>État de livraison</th>
                            <th>Quantité maximale</th>
                            <th>Région</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Livraisons as $livraison)
                        <tr>
                            <td>{{ $livraison->id }}</td>
                            <td>{{ $livraison->date }}</td>
                            <th class="{{ $livraison->etat_livraison === 'Accepter' ? 'text-success' : ($livraison->etat_livraison === 'Pas_Accepter' ? 'text-danger' : 'text-purple') }}">
                                {{ $livraison->etat_livraison }}
                            </th>
                            <td>{{ $livraison->quantite_max }}</td>
                            <td>{{ $livraison->region }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm edit-livraison" data-livraison-id="{{ $livraison->id }}" data-toggle="modal" data-target="#editLivraisonModal">Edit</a>
                            </td>
                            <td>
                                <button class="btn btn-danger deleteBtn" data-id="{{ $livraison->id }}">Supprimer</button>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Commandes</a>
                            </td>
                        </tr>


                        <div class="modal fade" id="editLivraisonModal" tabindex="-1" role="dialog" aria-labelledby="editLivraisonModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLivraisonModalLabel">Éditer une Livraison</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulaire de modification de la livraison -->
                                        <form id="editLivraisonForm">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="livraison_id" name="livraison_id" value="{{ $livraison->id }}">
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="button" id="saveEditLivraison" class="btn btn-primary">Enregistrer les modifications</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>




                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

<script>
  $('#saveLivraison').on('click', function() {
    var formData = $('#livraisonForm').serialize();

    $.ajax({
        type: 'POST',
        url: '{{ route('livraison.store') }}',
        data: formData,
        success: function(response) {
            console.log(response);
            if (response.errors) {
                var errorMessages = response.errors.join("<br>");
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    html: errorMessages,
                });
            } else if (response.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: response.success,
                });


            }
        },
        error: function(error) {

            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Une erreur s\'est produite lors de l\'ajout de la livraison.',
            });
        }
    });
});

function getLivraisonDetails(livraisonId,callback) {
    $.ajax({
        type: 'GET',
        url: '/livraison/' + livraisonId, // Remplacez l'URL par votre propre URL de requête
        dataType: 'json',
        success: function(response) {
            console.log (response);

            callback(response);
        },
        error: function(error) {
            // Gérez les erreurs de la requête AJAX ici
            console.log('Erreur lors de la récupération des détails de la livraison.');
        }
    });
}



$('.edit-livraison').on('click', function() {
    // Obtenez l'ID de la livraison à partir de l'attribut data-livraison-id
    var livraisonId = $(this).data('livraison-id');

    // Récupérez les données de la livraison à partir de la liste des Livraisons
    getLivraisonDetails(livraisonId, function(livraison) {
        console.log(livraison);
        // Remplissez le formulaire d'édition avec les données de la livraison
        $('#livraison_id').val(livraison.id);
        $('#edit_date').val(livraison.date);
        $('#edit_quantite_max').val(livraison.quantite_max);
        $('#edit_region').val(livraison.region);
    });
});


$('#saveEditLivraison').on('click', function() {
    var formData = $('#editLivraisonForm').serialize();
    var livraisonId = $('#livraison_id').val();

    $.ajax({
        type: 'PUT',
        url: '/livraison/' + livraisonId+'/edit', // Assurez-vous que l'URL correspond à votre route Laravel
        data: formData,
        success: function(response) {
            if (response.errors) {
                // Gérez les erreurs de validation ici, par exemple, affichez des messages d'erreur à l'utilisateur
                var errorMessages = response.errors.join("<br>");
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur de validation',
                    html: errorMessages,
                });
            } else if (response.success) {
                var updatedLivraison = {
                    id: livraisonId,
                    date: $('#edit_date').val(),
                    quantite_max: $('#edit_quantite_max').val(),
                    region: $('#edit_region').val(),
                };

                // Recherche de la ligne correspondant à la livraison modifiée et mise à jour des cellules
                $('#livraisonTable tbody tr').each(function() {
                    var row = $(this);
                    if (row.find('td:first').text() === livraisonId) {
                        row.find('td:nth-child(2)').text(updatedLivraison.date);
                        row.find('td:nth-child(4)').text(updatedLivraison.quantite_max);
                        row.find('td:nth-child(5)').text(updatedLivraison.region);
                        return false; // Sortez de la boucle each
                    }
                });
                Swal.fire({
                    icon: 'success',
                    title: 'Mise à jour réussie',
                    text: response.success,
                });

                // Fermez la fenêtre modale de mise à jour
                $('#editLivraisonModal').modal('hide');
            }
        },
        error: function(error) {
            console.log('Erreur lors de la mise à jour de la livraison.');
            // Gérez les erreurs d'ajax ici, par exemple, affichez un message d'erreur générique
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Une erreur s\'est produite lors de la mise à jour de la livraison.',
            });
        }
    });
});



$('.deleteBtn').on('click', function() {
    var deleteButton = $(this);
    var row = deleteButton.closest('tr');
    var livraisonId = $(this).data('id');
    console.log(livraisonId);
    var csrfToken = '{{ csrf_token() }}';

    Swal.fire({
        title: 'Confirmation',
        text: "Cette livraison est liée à d'autres commandes prises par des livreurs. Voulez-vous vraiment la supprimer ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url: '/livraison/' + livraisonId + '/delete',
                headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                success: function(response) {
                    row.remove();
                    Swal.fire({
                        icon: 'success',
                        title: 'Suppression réussie',
                        text: 'La livraison a été supprimée avec succès.',
                    });
                },
                error: function(error) {
                    console.error(error);

                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Une erreur s\'est produite lors de la suppression de la livraison.',
                    });
                }
            });
        }
    });
});



</script>

<script>
   function initCalendar() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        initialView: 'dayGridMonth',
        events: [
            @foreach($livraisonsTunis as $livraison)
            {
                title: 'Tunis - Livraison {{ $livraison->id }}',
                start: '{{ $livraison->date }}',
            },
            @endforeach

            @foreach($livraisonsAriana as $livraison)
            {
                title: 'Ariana - Livraison {{ $livraison->id }}',
                start: '{{ $livraison->date }}',
            },
            @endforeach
            @foreach($livraisonsBen as $livraison)
            {
                title: 'Ben Arous - Livraison {{ $livraison->id }}',
                start: '{{ $livraison->date }}',
            },
            @endforeach
            @foreach($livraisonsNab as $livraison)
            {
                title: 'Nabeul - Livraison {{ $livraison->id }}',
                start: '{{ $livraison->date }}',
            },
            @endforeach
        ].sort(function(a, b) {
    return new Date(a.start) - new Date(b.start);
}),
        eventClick: function(info) {
            // Gérer le clic sur un événement
            console.log('ID de la livraison : ' + info.event.id);
        },
        // Autres options de configuration...
    });

    calendar.render();
}

$(document).ready(function() {
    $('#showCalendar').on('click', function() {
        $('#calendarModal').modal('show'); // Ouvrir le modal
        initCalendar(); // Initialiser et afficher le calendrier
    });
});
</script>


@endsection
