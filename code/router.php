<?php

$path = $_SERVER['PATH_INFO'];

if ($path == '/authentifier')
{
    include './controllers/login.php';
    index();
} else if ($path == '/index')
{
    include './controllers/login.php';
    index2();
}
else if ($path == '/inscription')
{
    include './controllers/register.php';
    index();
}
else if ($path == '/inscription/creer')
{
    include './controllers/register.php';
    create();
}