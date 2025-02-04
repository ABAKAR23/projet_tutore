<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Vos balises <head> existantes ici -->
    <style>
        .titre {
            text-align: center;
        }

        body {
            color: #566787;
            background-image: url(bac.jpg);
            background-size: 600px;


            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
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

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>
    <h1 class="titre">Bienvenue Administrateur</h1>
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Gestion des <b>classements</b></h2>
                        </div>
                        <div class="col-xs-6">
                            <a href="#addClassementModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter des résultats</span></a>
                            <a href="#deleteClassementModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Equipe</th>
                            <th>Victoires</th>
                            <th>Défaites</th>
                            <th>Nombre de Points</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classements as $classement)
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox{{ $classement->id }}" name="options[]" value="{{ $classement->id }}">
                                    <label for="checkbox{{ $classement->id }}"></label>
                                </span>
                            </td>
                            <td>{{ $classement->equipe }}</td>
                            <td>{{ $classement->victoires }}</td>
                            <td>{{ $classement->defaites }}</td>
                            <td>{{ $classement->points }}</td>
                            <td>
                                <a href="#editClassementModal" class="edit" data-toggle="modal" data-id="{{ $classement->id }}" data-equipe="{{ $classement->equipe }}" data-victoires="{{ $classement->victoires }}" data-defaites="{{ $classement->defaites }}" data-points="{{ $classement->points }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Ajouter classement HTML -->
    <div id="addClassementModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('classement.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter Classements</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nom de l'équipe</label>
                            <input type="text" name="equipe" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Victoires</label>
                            <input type="number" name="victoires" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Défaites</label>
                            <input type="number" name="defaites" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Points</label>
                            <input type="number" name="points" class="form-control" required>
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

    <!-- Editer classement HTML -->
    <div id="editClassementModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('classement.update')}}" id="editClassementForm">
                    @csrf
                    <input type="hidden" name="id" id="edit-id">
                    <div class="modal-header">
                        <h4 class="modal-title">Modifier Classement</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="form-group">
                        <label>Nom de l'équipe</label>
                        <input type="text" name="edit-equipe" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Victoires</label>
                        <input type="number" name="edit-victoires" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Défaites</label>
                        <input type="number" name="edit-defaites" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Points</label>
                        <input type="number" name="edit-points" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-info" value="Modifier">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteClassementModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('classement.delete'), $classement->id }}" id="deleteClassementForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $classement->id }}">
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimer classement</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer ces enregistrements ?</p>
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

    <script>
        $(document).ready(function() {
            // Activation des tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Remplissage du formulaire de modification avec les données de l'utilisateur
            $('.edit').click(function() {
                var id = $(this).data('id');
                var equipe = $(this).data('equipe');
                var victoires = $(this).data('victoires');
                var defaites = $(this).data('defaites');
                var points = $(this).data('points');

                // Remplir les champs du formulaire
                $('#edit-id').val(id);
                $('#editClassementForm input[name="equipe"]').val(equipe);
                $('#editClassementForm input[name="victoires"]').val(victoires);
                $('#editClassementForm input[name="defaites"]').val(defaites);
                $('#editClassementForm input[name="points"]').val(points);

                // Mise à jour de l'action du formulaire pour inclure l'ID
                var actionUrl = '/classements/update';
                $('#editClassementForm').attr('action', actionUrl);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Activation des tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Afficher le modal de suppression et définir l'action du formulaire
            $('.delete').click(function() {
                var id = $(this).data('id');
                $('#deleteClassementForm').attr('action', 'classements/delete');
            });
        });
    </script>
</body>

</html>