<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Tournois</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .table-wrapper {
            width: 100%;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -20px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            background: #19baaa;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn:hover,
        .table-title .btn:focus {
            color: #fff;
            background: #10a798;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table td a {
            color: #2196f3;
            display: inline-block;
            text-decoration: none;
        }

        table.table td a:hover {
            color: #f44336;
        }

        table.table td a.edit {
            color: #ff9800;
        }

        table.table td a.delete {
            color: #f44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Gestion des <b>Tournois</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addTournamentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouveau Tournoi</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tournois as $tournoi)
                    <tr>
                        <td>{{ $tournoi->id }}</td>
                        <td>{{ $tournoi->nom }}</td>
                        <td>{{ $tournoi->type }}</td>
                        <td>{{ $tournoi->dateDebut }}</td>
                        <td>{{ $tournoi->dateFin }}</td>
                        <td>{{ $tournoi->statut }}</td>
                        <td>
                            <a href="#editTournamentModal" class="edit" data-toggle="modal" data-id="{{ $tournoi->id }}" data-nom="{{ $tournoi->nom }}" data-type="{{ $tournoi->type }}" data-datedebut="{{ $tournoi->dateDebut }}" data-datefin="{{ $tournoi->dateFin }}" data-statut="{{ $tournoi->statut }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <form action="{{ route('tournament.delete', $tournoi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none; background:none; color: #F44336;"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Tournament Modal HTML -->
    <div id="editTournamentModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editTournamentForm" method="post" action="{{ route('tournament.update') }}">
                    @csrf
                    <input type="hidden" name="id" id="edit-id">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifier Tournoi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" id="edit-nom" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" id="edit-type" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date de début</label>
                            <input type="date" name="dateDebut" id="edit-dateDebut" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date de fin</label>
                            <input type="date" name="dateFin" id="edit-dateFin" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Statut</label>
                            <input type="text" name="statut" id="edit-statut" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-info" value="Sauvegarder">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Fill the edit form with the selected tournament data
            $('.edit').on('click', function() {
                var id = $(this).data('id');
                var nom = $(this).data('nom');
                var type = $(this).data('type');
                var dateDebut = $(this).data('datedebut');
                var dateFin = $(this).data('datefin');
                var statut = $(this).data('statut');

                $('#edit-id').val(id);
                $('#edit-nom').val(nom);
                $('#edit-type').val(type);
                $('#edit-dateDebut').val(dateDebut);
                $('#edit-dateFin').val(dateFin);
                $('#edit-statut').val(statut);
            });
        });

    </script>
</body>
</html>
