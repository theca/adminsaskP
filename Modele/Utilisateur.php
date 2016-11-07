<?php

require_once 'Framework/Modele.php';

/**
 * Modélise un utilisateur du blog
 *
 * @author Baptiste Pesquet
 */
class Utilisateur extends Modele {

    /**
     * Vérifie qu'un utilisateur existe dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return boolean Vrai si l'utilisateur existe, faux sinon
     */
    public function connecter($login, $mdp)
    {
        $sql = "select ID_membres from membres where nom_utilisateur=? and mot_de_passe=?";
        $utilisateur = $this->executerRequete($sql, array($login, md5($mdp)));
        return ($utilisateur->rowCount() == 1);
    }

    /**
     * Renvoie un utilisateur existant dans la BD
     * 
     * @param string $login Le login
     * @param string $mdp Le mot de passe
     * @return mixed L'utilisateur
     * @throws Exception Si aucun utilisateur ne correspond aux paramètres
     */
    public function getUtilisateur($login, $mdp)
    {
        $sql = "select ID_membres as idUtilisateur, nom_utilisateur as login, mot_de_passe as mdp 
            from membres where nom_utilisateur=? and mot_de_passe=?";
        $utilisateur = $this->executerRequete($sql, array($login, md5($mdp)));
        if ($utilisateur->rowCount() == 1)
            return $utilisateur->fetch(PDO::FETCH_ASSOC);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun utilisateur ne correspond aux identifiants fournis");
    }

}

