<?php

include './SimpleOrm.class.php';

class Utilisatore extends SimpleOrm
{
    public $id;
    public $email;
    public $mdp;
    public $pseudo;
}
