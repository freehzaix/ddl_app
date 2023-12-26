<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etudiant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="containeur">
        
        <h2 class="title-form">Formulaire d'inscription d'un étudiant</h2>

        <form action="#" method="post">
            <div class="row">
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Votre nom" id="nom">
            </div>
            <div class="row">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" placeholder="Votre prénom" id="prenom">
            </div>
            <div class="row">
                <label for="classe">Classe</label>
                <select name="classe" id="classe">
                    @foreach ($classes as $item)
                        <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <input type="submit" value="Valider mon inscription">
            </div>
        </form>
    </div>

</body>
</html>