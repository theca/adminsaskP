<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Client.php';
require_once 'Modele/Service.php';

class ControleurClients extends ControleurSecurise {

    private $clients;
    private $client;
    private $services;
    private $service;
    private $title;
    

    public function __construct() {
        $this->clients = new Client();
        $this->client = new Client();
        $this->services = new Service();
        $this->service = new Service();        
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $title= $this->title;
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $clients = $this->clients->getClients($ID_membres);
        $services = $this->services->getServices($ID_membres);
        $this->genererVue(array('clients' => $clients, 'services' => $services, 'title' => $title));
    }
    
    public function addClientView() {
        $this->genererVueAjax();
    }
    public function addServiceView() {
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $clients = $this->clients->getClients($ID_membres);
        $this->genererVueAjax(array('clients'=>$clients));
    }
    public function editClientView() {
        $idClient = $this->requete->getParametre("edit_id");
        $client = $this->client->getClient($idClient);
        $this->genererVueAjax(array('client' => $client));
    }
    public function editServiceView() {
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $idService = $this->requete->getParametre("edit_id_service");
        $service = $this->service->getService($idService);
        $clients = $this->clients->getClients($ID_membres);
        $this->genererVueAjax(array('clients'=>$clients, 'service'=>$service));
    }
    public function ajouterClient() {
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $donnees=  $this->requete->getParametreForRequete();
        $donnees[] = $this->requete->getSession()->getAttribut("idUtilisateur");
        $this->client->addClient($donnees);
        $IdLastClient=$this->client->getLastInsert();
        $IdLastClient=$IdLastClient['LAST_INSERT_ID()'];        
        $this->service->addService(array ('Sans service',$IdLastClient,$ID_membres));
        echo 'Success';
    }
    public function supprimerClient(){        
        $idClient = $this->requete->getParametre("del_id");        
        $this->client->deleteClient($idClient);
        echo 'Success';
    }
    public function ajouterService() {
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $donnees=  $this->requete->getParametreForRequete();
        $donnees[]=$ID_membres;
        $this->service->addService($donnees);
        echo 'Success';
    }
    public function supprimerService(){        
        $idService = $this->requete->getParametre("del_id");        
        $this->service->deleteService($idService);
        echo 'Success';
    }
    public function editerClient() {
        
        $idClient=  $this->requete->getParametre('id');        
        $donnees=  $this->requete->getParametreForRequete();
        $donnees[]=$idClient;        
        $this->client->editClient($donnees);
        echo 'Success';
    }
    public function editerService(){        
        $idService = $this->requete->getParametre("id");
        $donnees=  $this->requete->getParametreForRequete();
        $donnees[]=$idService;
        $this->service->editService($donnees);
        echo 'Success';
    }

}