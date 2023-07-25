# zelp

#Creation de la bdd
1. modification du fichier .env
2. dans le terminal tapez la commande : symfony console d:d:c
3. faire une migration :
                           - php bin/console make:migration
                           - php bin/console doctrine:migrations:migrate

4. lancer symfony : symfony server:start
