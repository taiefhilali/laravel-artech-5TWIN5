@extends('Livraison.livraisonbase')
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


.table th, .table td {
    color: white; /* Couleur du texte en blanc */
    border: 1px solid white; /* Bordure blanche autour des cellules */
}

.modal-text {
        color: black; /* Couleur du texte en noir à l'intérieur du modal */
    }


</style>
@section('content')
<div class="modal fade" id="commandesModal" tabindex="-1" role="dialog" aria-labelledby="commandesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commandesModalLabel">Commandes de la livraison</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" id="commandesTable">
                    <thead>
                        <tr>
                            <th class="modal-text" style="color: black">#</th>
                            <th class="modal-text" style="color: black">adresse</th>
                            <th class="modal-text" style="color: black">etat</th>
                            <th class="modal-text" style="color: black">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ici, vous allez ajouter les lignes des commandes dynamiquement -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

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


        <div class="row">
            <div class="col-md-6 col-12">

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

                            <td class="etat-livraison {{ $livraison->etat_livraison === 'Accepter' ? 'text-success' : ($livraison->etat_livraison === 'Pas_Accepter' ? 'text-danger' : 'text-purple') }}">
                                {{ $livraison->etat_livraison }}
                            </td>
                            <td>{{ $livraison->quantite_max }}</td>
                            <td>{{ $livraison->region }}</td>
                            <td>
                                @if($livraison->etat_livraison === 'Pas_Accepter')
                                    <a href="#" class="btn btn-success btn-sm accept-livraison" data-livraison-id="{{ $livraison->id }}">Accepter</a>
                                @endif
                            </td>
                            <td>
                                @if($livraison->etat_livraison === 'Accepter' && $livraison->user_id === Auth::user()->id)
                                    <a href="#" class="btn btn-primary btn-sm view-commandes" data-livraison-id="{{ $livraison->id }}">Commandes</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

<script>
        var csrfToken = '{{ csrf_token() }}';


// Fonction d'acceptation de la livraison
$(document).on('click', '.accept-livraison', function() {
    var livraisonId = $(this).data('livraison-id');

    $.ajax({
        type: 'PUT',
        url: '/livraison/' + livraisonId + '/accept', // Assurez-vous que l'URL correspond à votre route Laravel pour l'acceptation
        headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
        success: function(response) {
            if (response.success) {
                // Mettez à jour l'affichage de l'état de la livraison à "Accepter"
                var livraisonCell = $('#livraisonTable tbody tr[data-livraison-id="' + livraisonId + '"] td.etat-livraison');
                livraisonCell.removeClass('text-danger text-purple').addClass('text-success').text('Accepter');

                // Affichez une notification de succès
                Swal.fire({
                    icon: 'success',
                    title: 'Livraison acceptée',
                    text: response.success,
                }).then(function() {
                    // Redirigez l'utilisateur vers la page de la fenêtre modale que vous souhaitez charger
                    window.location.href = '/livreur/livraisonslist'; // Remplacez '/votre-page-modale' par l'URL de votre fenêtre modale
                });
            } else {
                // Gérez les erreurs ici
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: response.error,
                });
            }
        },
        error: function(error) {
            console.log('Erreur lors de l\'acceptation de la livraison.');
            // Gérez les erreurs d'ajax ici
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Une erreur s\'est produite lors de l\'acceptation de la livraison.',
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


$(document).on('click', '.view-commandes', function() {
    var livraisonId = $(this).data('livraison-id');
    console.log(livraisonId);

    $.ajax({
        type: 'GET',
        url: '/livraison/' + livraisonId + '/commandes',
        success: function(response) {
            console.log(response);
            var commandesTable = $('#commandesTable tbody');
            commandesTable.empty();

            response.commandes.forEach(function(commande) {
                var row = '<tr><td style="color: black">' + commande.id + '</td><td style="color: black">' + commande.date + '</td><td style="color: black">' + commande.etat_livraison + '</td><td> <button type="button" class="btn btn-secondary annuler-commande" data-order-id="' + commande.id + '">Annuler</button>  <button type="button" class="btn btn-primary payer-commande" data-order-id="' + commande.id + '">Payée</button></td></tr>';
                commandesTable.append(row);
            });

            $('#commandesModal').modal('show');
        },
        error: function(error) {
            console.log('Erreur lors de la récupération des commandes.');
        }
    });
});

$(document).on('click', '.annuler-commande', function() {
    var orderId = $(this).data('order-id');
    console.log(orderId);

    // Effectuez une requête AJAX pour marquer la commande comme annulée
    $.ajax({
        type: 'PUT',
        url: '/livraison/commande/' + orderId + '/annuler',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            if (response.success) {
                // Mettez à jour l'état de la commande en "Annulée"
                var orderCell = $('#commandesTable tbody tr td[data-order-id="' + orderId + '"]');
                orderCell.text('Annulée');

                // Masquez le bouton "Annuler" et le bouton "Payée"
                $(this).hide(); // Ajoutez cette ligne

                Swal.fire({
                    icon: 'success',
                    title: 'Commande Annulée',
                    text: response.success,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: response.error,
                });
            }
        },
        error: function(error) {
            console.log('Erreur lors de l\'annulation de la commande.');
        }
    });
});

$(document).on('click', '.payer-commande', function() {
    var orderId = $(this).data('order-id');
    console.log(orderId);

    // Effectuez une requête AJAX pour marquer la commande comme payée
    $.ajax({
        type: 'PUT',
        url: '/livraison/commande/' + orderId + '/payee',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {

           if (response.success) {
                // Mettez à jour l'état de la commande en "Payée"
                var orderCell = $('#commandesTable tbody tr td[data-order-id="' + orderId + '"]');
                orderCell.text('Payée');

                // Masquez le bouton "Annuler" et le bouton "Payée"
                $(this).hide(); // Ajoutez cette ligne

                Swal.fire({
                    icon: 'success',
                    title: 'Commande Payée',
                    text: response.success,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: response.error,
                });
            }
        },
        error: function(error) {
            console.log('Erreur lors du paiement de la commande.');
        }
    });
});


</script>


@endsection
