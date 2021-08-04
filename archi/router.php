<?php

$demande = $_SERVER['PATH_INFO']; //    /cheeseburger

if ($demande == '/cheeseburger')
{
    include __DIR__ . '/controllers/burger.php';
    cheeseBurgerDelaMortTue();
}
else if ($demande == '/burger-boeuf')
{
    include __DIR__ . '/controllers/burger.php';
    steakHouseBurger();
}
