<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Page d'accueil</h1>

    <ul>
       @foreach ($classes as $item)
           <li>{{ $item->libelle }}</li>
       @endforeach
    </ul>
    
    <x-menu />

</body>
</html>