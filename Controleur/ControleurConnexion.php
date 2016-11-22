<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Utilisateur.php';

/**
 * Contrôleur gérant la connexion au site
 *
 * @author Baptiste Pesquet
 */
class ControleurConnexion extends Controleur
{   
    private $title;
    private $utilisateur;

    public function __construct()
    {
        $this->utilisateur = new Utilisateur();
        $this->title = "Mon Blog - Connexion";
    }

    public function index()
    {
        $ID_membres = 1;
        
        $this->genererVue(array('title' => $this->title , 'ID_membres'=> $ID_membres));
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->utilisateur->connecter($login, $mdp)) {
                $utilisateur = $this->utilisateur->getUtilisateur($login, $mdp);
                $this->requete->getSession()->setAttribut("idUtilisateur",
                        $utilisateur['idUtilisateur']);
                $this->requete->getSession()->setAttribut("login",
                        $utilisateur['login']);
                $this->rediriger("chantiers");
            }
            else
                $ID_membres = '0';
                $this->genererVue(array('msgErreur' => 'Login ou mot de passe incorrects','ID_membres'=>$ID_membres),
                        "index");
        }
        else{
            //throw new Exception("Action impossible : login ou mot de passe non défini");
            $ID_membres = '0';
            $this->genererVue(array('msgErreur' => 'Login ou mot de passe non défini','ID_membres'=>$ID_membres),
                        "index");
        }
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

}
