<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Billet.php';

class ControleurAccueil extends ControleurSecurise {

    private $billet;
    private $title;

    public function __construct() {
        $this->billet = new Billet();
        $this->title = "Mon blog";
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $title= $this->title;
        $billets = $this->billet->getBillets();
        $this->genererVue(array('billets' => $billets, 'title' => $title));
    }

}

