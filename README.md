
## Formation gratuite pour devenir développeur Laravel

Voici le lien de ma chaîne YouTube pour devenir développeur Laravel :

- [DevenirDeveloppeurLaravel](https://www.youtube.com/@DevenirDeveloppeurLaravel?sub_confirmation=1).

## Comment installer le projet ?

Voici les instructions à suivre pour installer le projet en local:

    - Dupliquer et le fichier '.env.example' puis renommer en fichier '.env'

    - Remplacer "mysql" dans le fichier ".env" par "sqlite" dans la chaine du fichier ".env" "DB_CONNECTION=mysql"

    - Supprimer la ligne du fichier .env qui contient:
        "DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=laravel
         DB_USERNAME=root
         DB_PASSWORD="

Exécuter la migration de la base de données:

    - php artisan migrate

Exécuter les seeders pour insérer les données dans la base de données SQLITE:

    - php artisan db:seed --class=ClasseSeeder


Cette commande va créer les classes Licence 1, Licence 2 et Licence 3.