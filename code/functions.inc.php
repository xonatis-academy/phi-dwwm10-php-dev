<?php

include './models/Utilisatore.php';

function estUtilisateurValide(string $login, string $password): bool
{
    $users = Utilisatore::all();
    foreach($users as $user)
    {
        if ($user->email == $login && $user->mdp == $password)
        {
            return true;
        }
    }

    return false;
}


function verifierEmail(string $login): bool
{
    $result = strpos($login, '@');
    if ($result == false)
    {
        return false;
    }
    else
    {
        return true;
    }
}
