<?php

// 1. Faire une fonction qui prend un texte en paramètre
// et qui retourne le texte avec "Nike"
function ajouter(string $texte): string
{
    $resultat = $texte . ' Nike';
    return $resultat;
}

// 2. Récupérer les données "q" dans l'URL (vous aurez besoin de $_GET)
$recherche = $_GET['q'];

// 3. Appeler la fonction pour ajouter Nike aux donnnées d'au-dessus
$nouvelle = ajouter($recherche);

// 4. Rediriger l'utilisateur vers google avec ce nouveau texte systématiquement
header('LOCATION: https://www.google.com/search?q=' . $nouvelle);