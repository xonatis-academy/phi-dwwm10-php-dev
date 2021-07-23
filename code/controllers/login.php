<?php

include './functions.inc.php';

function index(): void
{
    $login = $_POST['identifiant'];
    $password = $_POST['mdp'];
    $remember = isset($_POST['remember']);

    if ($remember == true)
    {
        $sauvegarde = [
            'login' => $login,
            'password' => $password
        ];
        $str = json_encode($sauvegarde);
        setcookie('coords', $str);
    }
    
    /*
    On verifie si il y un @ dans le login
    si ce n'est pas le cas:
        on affiche "Votre login est mal formatté"
    sinon:
        on verifie le login et le mot de passe
        si c'est correct:
            on affiche "Bienvenue dans votre espace client"
        sinon:
            on affiche "Votre mot de passe est incorrect"
    */
    
    // On verifie si il y un @ dans le login
    $result = verifierEmail($login);
    
    // si ce n'est pas le cas:
    if ($result == false)
    {
        // on affiche "Votre login est mal formatté"
        include './templates/tesbete.html.php';
    }
    // sinon:
    else
    {
        // on verifie le login et le mot de passe
        $result = estUtilisateurValide($login, $password);
    
        // si c'est correct:
        if ($result == true)
        {
            // on affiche "Bienvenue dans votre espace client"
            include './templates/espace.html.php';
        }
        // sinon:
        else
        {
            // on affiche "Votre mot de passe est incorrect"
            include './templates/errormdp.html.php';
        }
    }    
}

function index2(): void
{
    $login = '';
    $password = '';
    $result = isset($_COOKIE['coords']);
    if ($result == true)
    {
        $str = $_COOKIE['coords'];
        $tab = json_decode($str, true);
        $login = $tab['login'];
        $password = $tab['password'];
    }

    include './templates/index.html.php';
}

