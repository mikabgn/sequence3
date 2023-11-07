<?php

// Présentation des règles
echo "\nBienvenue dans le jeu de devinette !\n";
echo "Le but du jeu est de deviner un nombre entre 1 et 100.\n";
echo "Vous avez entre 10 et 15 tentatives pour trouver le nombre.\n";
echo "Bonne chance ! \n\n";

while (true) {
    // Menu
    echo "1. Jouer\n";
    echo "2. Voir les résultats\n";
    echo "3. Voir les résultats d'un jour\n";
    echo "4. Voir les résultats d'un joueur\n";
    echo "5. Quitter\n";

    // Choix de l'utilisateur
    $choix = readline("Votre choix (1, 2, 3, 4 ou 5) : ");
    echo PHP_EOL;

    // Début du jeu (choix 1)
    if ($choix == 1){

        // Demande du pseudo et initialisation des valeurs pour le jeu
        $pseudo = readline ("saisiser votre pseudo : ") ;
        $nbADeviner = random_int (1,100) ;
        $nbChoisie = 0 ;
        $tentative = 0 ;
        $tentativeAutoriser = random_int (10,15) ;

        // Initialisation de la boucle qui vérifie si l'utilisateur a deviné et si il lui reste des tentatives
        while ($nbChoisie != $nbADeviner && $tentative < $tentativeAutoriser){

            // l'utilisateur choisie son nombre
            $nbChoisie = readline("Deviné un chiffre etre 1 et 100 : ");

            // Vérifie que le nombre est correct
            if ($nbChoisie >= 1 && $nbChoisie <= 100) {

                // Indique si le nombre choisie est trop petit ou trop grand
                if ($nbChoisie < $nbADeviner) {

                    echo "le nombre est trop petit\n";

                } elseif ($nbChoisie > $nbADeviner) {

                    echo "Le nombre est trop grand\n";

                }
                // Ajoute une tentative au tentatives totals
                $tentative += 1;

            }
        }
        // Le joueur na pas deviné avec le nombre de tentatives donné
        if ($tentative >= $tentativeAutoriser) {

            echo "Dommage tu a mis plus de $tentative tentatives et tu n'as pas trouver, c'était $nbADeviner";
            $content = "Dommage tu n'as pas trouver, c'était $nbADeviner\n";
            echo PHP_EOL;

        // Le joueur a deviné en 10 ou moins tentatives
        } elseif ($tentative <= 10) {

            echo "Exellent $pseudo vous avez trouvé le nombre $nbADeviner en $tentative tentatives ! ";
            $content = "Exellent vous avez trouvé le nombre en $tentative tentatives ! \n";
            echo PHP_EOL;

        // Le joueur a deviner en plus de 10 tentatives
        } else {

            echo "Bien joué $pseudo vous avez trouvé le nombre $nbADeviner en $tentative tentatives ! ";
            $content = "Bien joué vous avez trouvé le nombre en $tentative tentatives ! \n";
            echo PHP_EOL;

        }
        // Écrit les résultats dans un fichier text
        $today = date("d/m/y H:i:s");
        $path = fopen('resultats.txt','a+');
        fwrite($path, "$today - Pseudo: $pseudo - Résultat: $content\n",);

    } elseif ($choix == 2) {

        $path = fopen('resultats.txt','r');
            while (!feof($path)){
            echo fgets($path);
            }

    } elseif ($choix == 3) {
        // Demande à l'utilisateur de saisir la date au format j/m/a (jour/mois/année)
        $dateChoisie = readline("Choisissez la date (j/m/a) pour laquelle vous souhaitez afficher les résultats : ");
        $path = fopen('resultats.txt', 'r');

        if ($path) {
            $resultatTrouve = false;

            while (!feof($path)) {
                $ligne = fgets($path);

                // Utilise strpos pour rechercher la date choisie dans chaque ligne
                if (strpos($ligne, $dateChoisie) !== false) {
                    echo $ligne; // Affiche la ligne si la date est trouvée
                    $resultatTrouve = true;
                }
            }

            fclose($path);

            if (!$resultatTrouve) {
                echo "Aucun résultat trouvé pour la date $dateChoisie.\n";
            }
        } else {
            echo "Erreur lors de la lecture du fichier de résultats.\n";
        }

        echo PHP_EOL;

    } elseif ($choix == 4) {

        // Demande à l'utilisateur de saisir le pseudo
        $pseudoChoisie = readline("Choisie le pseudo pour le quel tu veux afficher les résultats: ");
        echo PHP_EOL;
        $path = fopen('resultats.txt', 'r');

        if ($path) {
            $resultatTrouver = false;

            while (!feof($path)) {
                $ligne = fgets($path);

                // Utilise strpos pour rechercher le pseudo choisie dans chaque ligne
                if (strpos($ligne, "Pseudo: $pseudoChoisie")) {
                    echo $ligne; //Affiche la ligne si la date est trouvée
                    $resultatTrouver = true;
                }

            }

            fclose($path);

            if (!$resultatTrouver) {
                echo "Aucun résultat trouvé pour le joueur $pseudoChoisie";
            }

        } else {
            echo "Erreur lors de la lecture du fichier de résultats.";
        }
        echo PHP_EOL;

    // L'utilisateur a Quitter (choix 5)
    } elseif ($choix == 5) {

        exit();

    }
}