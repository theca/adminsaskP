<?php
require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Client extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getClients($idMembres) {
        $sql = 'SELECT * From Client, membres WHERE ID_membres= FK_membres and FK_membres =?';
        $clients = $this->executerRequete($sql, array($idMembres));
        return $clients->fetchAll(PDO::FETCH_ASSOC);;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getClient($idClient) {
        $sql = 'SELECT * FROM Client WHERE ID_client= ? ';
        $client = $this->executerRequete($sql, array($idClient));
        if ($client->rowCount() > 0)
            return $client->fetch(PDO::FETCH_ASSOC);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idClient'");
    }
    
    public function addClient($donnees) {
        $sql = 'INSERT INTO Client(Nom, Adresse, Code_postal, Ville,FK_membres) VALUES(?,?,?,?,?)';        
        $this->executerRequete($sql, $donnees);
    }
    public function deleteClient($idClient) {
        $sql = 'DELETE FROM Client WHERE ID_client= ?';        
        $this->executerRequete($sql, array($idClient));
    }
    public function editClient($donnees) {
        $sql = 'UPDATE Client SET Nom=?, Adresse=?, Code_postal=?, Ville=? WHERE ID_client=?';        
        $this->executerRequete($sql, $donnees);
    }
    public function getLastInsert() {
        $sql = 'SELECT LAST_INSERT_ID() FROM client';        
        $lastClient=$this->executerRequete($sql);
        return $lastClient->fetch(PDO::FETCH_ASSOC);
    }
}