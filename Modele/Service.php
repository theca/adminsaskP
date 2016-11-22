<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Service extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getServices($ID_membres) {
        $sql = 'SELECT * FROM Service, Client,membres WHERE FK_client=ID_client and ID_membres=Service.FK_membres and Service.FK_membres=?';
        $services = $this->executerRequete($sql, array($ID_membres));
        return $services;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getService($idService) {
        $sql = 'SELECT * FROM Service, Client WHERE ID_service= ? AND FK_client= ID_client';
        $service = $this->executerRequete($sql, array($idService));
        if ($service->rowCount() > 0)
            return $service->fetch(PDO::FETCH_ASSOC);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idService'");
    }
    public function getClientService($idClient) {
        $sql = 'SELECT * FROM Service, Client WHERE FK_client= ? AND FK_client=ID_client';
        $clientServices = $this->executerRequete($sql, array($idClient));
        if ($clientServices->rowCount() > 0)
            return $clientServices->fetchAll(PDO::FETCH_ASSOC);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idClient'");
    }
    public function addService($donnees) {
        $sql = 'INSERT INTO Service(Description,FK_client,FK_membres) VALUES(?,?,?)';        
        $this->executerRequete($sql, $donnees);
    }
    public function editService($donnees) {
        $sql = 'UPDATE Service SET Description=?, FK_client=? WHERE ID_Service=?';        
        $this->executerRequete($sql, $donnees);
    }
    public function deleteService($idService) {
        $sql = 'DELETE FROM Service WHERE ID_service= ?';        
        $this->executerRequete($sql, array($idService));
    }
}