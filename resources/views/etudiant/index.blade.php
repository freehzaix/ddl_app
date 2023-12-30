<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Etudiant en Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>CRUD Etudiant en Laravel</h1>
            </div>
            <div class="col mt-2">
                <a href="{{ route('etudiant.add') }}" class="btn btn-primary">Ajouter un étudiant</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h3>Liste des étudiants</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($etudiants as $item)
                        <tr>
                          <th scope="row">{{ $item->id }}</th>
                          <td>{{ $item->nom }}</td>
                          <td>{{ $item->prenom }}</td>
                          <td>{{ $item->classe->libelle }}</td>
                          <td>
                              <a href="{{ route('etudiant.show', $item->id) }}" class="btn btn-primary">Modifier</a>
                              <a href="#" class="btn btn-danger">Supprimer</a>
                          </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>