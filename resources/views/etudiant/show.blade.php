<!doctype html>
<html lang="fr">
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
                
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                
                <h2>Formulaire d'inscription - N°{{ $etudiant->id }}</h2>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                
                <form action="{{ route('etudiant.edit') }}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{ $etudiant->id }}" hidden>

                    <div class="row">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}" id="nom" placeholder="Entrez votre nom">
                          </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}" id="prenom" placeholder="Entrez votre nom">
                          </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="classe" class="form-label">Classe</label>
                            <select id="classe" name="classe_id" class="form-control">
                                <option value="{{ $etudiant->classe_id }}">élément sélectionné: {{ $etudiant->classe->libelle }}</option>
                                @foreach ($classes as $item)
                                    <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Modifier un étudiant</button>
                            <a href="{{ route('etudiant.index') }}" class="btn btn-info"> Liste des étudiants </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>