<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// Contrôleur frontal : instancie un routeur pour traiter la requête entrante
require('smarty/Smarty.class.php');
require_once 'vendor/autoload.php';


require 'Framework/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();


