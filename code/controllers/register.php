<?php

function index()
{
    include './templates/register_index.html.php';
}

function create()
{
    include './models/Utilisatore.php';

    $user = new Utilisatore();
    $user->email = $_POST['reg-email'];
    $user->mdp = $_POST['reg-mdp'];
    $user->pseudo = $_POST['reg-pseudo'];
    $user->save();
}