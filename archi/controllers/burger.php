<?php


function superBurger()
{

}

function steakHouseBurger()
{

}

function cheeseBurgerDelaMortTue()
{
    // Récupération des matières premieres
    include __DIR__ . '/../models/Pain.php';
    $pain = new Pain();

    include __DIR__ . '/../models/Cheese.php';
    $cheese = new Cheese();

    include __DIR__ . '/../functions.php';
    allerChercherCafe();

    // ALGO secret
    $cheeburger = 'fdsélfdskfsjfldsljfdskjfsdfdsf';

    // Le dressage
    include __DIR__ . '/../views/cheeseburger.html.php';
}
