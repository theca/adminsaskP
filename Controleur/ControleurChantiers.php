<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Chantier.php';

class ControleurChantiers extends ControleurSecurise {

    private $chantiers;
    private $title;

    public function __construct() {
        $this->chantiers = new Chantier();
        $this->title = "Mon blog";
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $title= $this->title;
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $chantiers = $this->chantiers->getChantiers($ID_membres);
        $this->genererVue(array('chantiers' => $chantiers, 'title' => $title));
    }
    
    public function supprimerChantier() {
        $idChantier = $this->requete->getParametre("del_id");
        $this->chantiers->deleteChantier($idChantier);
        echo 'Success';
    }
}

