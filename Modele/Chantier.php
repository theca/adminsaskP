<?php

require_once 'Framework/Modele.php';

/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Chantier extends Modele {

    /** Renvoie la liste des billets du blog
     * 
     * @return PDOStatement La liste des billets
     */
    public function getChantiers($ID_membres) {
        $sql = 'SELECT * From Chantier, Client, Service, Decision WHERE Chantier.FK_client=Client.ID_client and Chantier.FK_service=Service.ID_service and Chantier.FK_decision=Decision.ID_decision and Chantier.FK_membres= ?';
        $chantiers = $this->executerRequete($sql, array($ID_membres));
        return $chantiers;
    }

    /** Renvoie les informations sur un billet
     * 
     * @param int $id L'identifiant du billet
     * @return array Le billet
     * @throws Exception Si l'identifiant du billet est inconnu
     */
    public function getChantier($idChantier) {
        $sql = 'SELECT * FROM Chantier, Client, Service, Decision WHERE ID_chantier= ? and Chantier.FK_client=Client.ID_client and Chantier.FK_service=Service.ID_service and Chantier.FK_decision=Decision.ID_decision';
        $chantier = $this->executerRequete($sql, array($idChantier,));
        if ($chantier->rowCount() > 0)
            return $chantier->fetch(PDO::FETCH_ASSOC);  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idChantier'");
    }
    
    public function getLastInsert() {
        $sql = 'SELECT LAST_INSERT_ID() FROM chantier';        
        $lastChantier=$this->executerRequete($sql);
        return $lastChantier->fetch(PDO::FETCH_ASSOC);
    }
    
    public function addChantier($donnees) {
        $sql = "INSERT INTO Chantier (Nom_chantier,Date_debut,Date_fin,FK_decision,Date_inscription,"
                . "Numero_lot_01,Numero_lot_02,Numero_lot_03,Lot_01,Lot_02,Lot_03,"
                . "FK_client,FK_service,FK_membres,Date_de_remise,Prix_lot_01,Prix_lot_02,Prix_lot_03)"
                . " VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $chantier = $this->executerRequete($sql, $donnees);
        return $chantier;
    }
    public function updateChantier($colonne, $donnees, $id) {
        $sql ="UPDATE Chantier SET ".$colonne." = ? WHERE ID_chantier=".$id."";
        $chantier = $this->executerRequete($sql, array($donnees));
    }
    public function deleteChantier($idChantier) {
        $sql = 'DELETE FROM Chantier WHERE ID_chantier= ?';        
        $this->executerRequete($sql, array($idChantier));
    }
}