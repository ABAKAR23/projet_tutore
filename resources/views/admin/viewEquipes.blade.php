<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Équipes</title>
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

        .manage-members-btn {
            display: inline-flex;
            align-items: center;
            background-color: white;
            color: white;
            padding: 2px 2px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .manage-members-btn i {
            margin-right: 5px;
        }

        .manage-members-btn:hover {
            background-color: #0056b3;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons form {
            display: inline;
        }

        .action-buttons button {
            background: none;
            border: none;
            padding: 0;
        }

        .action-buttons button i {
            color: #f44336;
        }

        .action-buttons button:hover i {
            color: #d32f2f;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Gestion des <b>Équipes</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEquipeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une nouvelle Équipe</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipes as $equipe)
                    <tr>
                        <td>{{ $equipe->id }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td class="action-buttons">
                            <a href="#editEquipeModal" class="edit" data-toggle="modal" data-id="{{ $equipe->id }}" data-nom="{{ $equipe->nom }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="{{ route('admin.manageMembers', $equipe->id) }}" class="manage-members-btn"><i class="material-icons">group</i></a>
                            <form action="{{ route('admin.deleteEquipe', $equipe->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Equipe Modal HTML -->
    <div id="addEquipeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addEquipeForm" method="post" action="{{ route('admin.storeEquipe') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter Équipe</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-success" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Equipe Modal HTML -->
    <div id="editEquipeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editEquipeForm" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit-id">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifier Équipe</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" id="edit-nom" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-info" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Equipe Modal HTML -->
    <div id="deleteEquipeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="deleteEquipeForm" method="post" action="">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimer Équipe</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer cette équipe ?</p>
                        <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-danger" value="Supprimer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#editEquipeModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var nom = button.data('nom')

            var modal = $(this)
            modal.find('.modal-body #edit-id').val(id)
            modal.find('.modal-body #edit-nom').val(nom)
            modal.find('form').attr('action', '{{ route("admin.updateEquipe", "") }}/' + id)
        })

    </script>
</body>
</html>
