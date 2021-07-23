<?php

include './models/Utilisatore.php';

function estUtilisateurValide(string $login, string $password): bool
{
    $user1 = new Utilisatore();
    $user1->email = 'tata@gmail.com';
    $user1->mdp = 'toto';

    $user2 = new Utilisatore();
    $user2->email = 'toto@gmail.com';
    $user2->mdp = 'tata';

    $users = [
        $user1,
        $user2
    ];

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
