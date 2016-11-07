<?php
require_once 'ControleurSecurise.php';

require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
/**
 * Contrôleur des actions liées aux billets
 *
 * @author Baptiste Pesquet
 */
class ControleurBillet extends Controleur {

    private $billet;
    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un billet
    public function index() {
        $title = 'billet 2';
        $idBillet = $this->requete->getParametre("id");        
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet)->fetchAll(PDO::FETCH_ASSOC);        
        $this->genererVue(array('billet' => $billet, 'commentaires' => $commentaires,'title' => $title ));
    }

    // Ajoute un commentaire sur un billet
    public function commenter() {
        $idBillet = $this->requete->getParametre("id");
        $auteur = $this->requete->getParametre("auteur");
        $contenu = $this->requete->getParametre("contenu");
        echo $idBillet;
        echo $auteur;
        echo $contenu;
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
}

