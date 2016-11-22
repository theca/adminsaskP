<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Chantier.php';
require_once 'Modele/Client.php';
require_once 'Modele/Service.php';
require_once 'Modele/Utilisateur.php';
require_once 'vendor/autoload.php';

class ControleurNouveauchantier extends ControleurSecurise {

    private $chantiers;
    private $clients;
    private $services;
    private $title;
    

    public function __construct() {
        $this->chantiers = new Chantier();
        $this->clients= new Client();
        $this->services= new Service();
        $this->title = "Mon blog";
        
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $ID_membres = $this->requete->getSession()->getAttribut("idUtilisateur");
        $title= $this->title;
        $clients = $this->clients->getClients($ID_membres);
        //$services = $this->services->getClientService($idClient);
        $this->genererVue(array('clients'=> $clients));
    }
    public function selectService() {
        if($this->requete->existeParametre("id_client")){
            $idClient = $this->requete->getParametre("id_client");
            $services = $this->services->getClientService($idClient);
            $this->genererVueAjax(array('services'=>$services));
        }else{
            throw new Exception ("Le parametre id du client est absent!");
        }
        
    }
    public function createChantier() {
        $idMembre=  $this->requete->getSession()->getAttribut("idUtilisateur");
        $Nom_chantier = $this->requete->getParametre("Nom_chantier");;            
        $Date_debut = NULL;
        $Date_fin = NULL;
        $FK_decision = 1;
        $Date_inscription = date("Y-m-d");       
        $FK_membres= $idMembre;
        if($this->requete->existeParametre('Numero_lot_01')){
            $Numero_lot_01 = $this->requete->getParametre("Numero_lot_01");
        }else{
            $Numero_lot_01 = NULL;
        }
        if($this->requete->existeParametre('Numero_lot_01')){
            $Numero_lot_01 = $this->requete->getParametre("Numero_lot_01");
        }else{
            $Numero_lot_01 = NULL;
        }
        if($this->requete->existeParametre('Numero_lot_2')){
            $Numero_lot_02 = $this->requete->getParametre("Numero_lot_2");
        }else{
            $Numero_lot_02 = NULL;
        }
        if($this->requete->existeParametre('Numero_lot_3')){
            $Numero_lot_03 = $this->requete->getParametre("Numero_lot_3");
        }else{
            $Numero_lot_03 = NULL;
        }
        if($this->requete->existeParametre('Lot_01')){
            $Lot_01 = $this->requete->getParametre("Lot_01");
        }else{
            $Lot_01 = NULL;
        }
        if($this->requete->existeParametre('Lot_2')){
            $Lot_02 = $this->requete->getParametre("Lot_2");
        }else{
            $Lot_02 = NULL;
        }
        if($this->requete->existeParametre('Lot_3')){
            $Lot_03 = $this->requete->getParametre("Lot_3");
        }else{
            $Lot_03 = NULL;
        }
        $FK_client = $this->requete->getParametre('clientName');
        $FK_service = $this->requete->getParametre('FK_service');
        $Date_remise = $this->requete->getParametre('Date_remise');
        $Date_remise = new DateTime(trim($Date_remise));
        $Date_remise= $Date_remise->format('Y-m-d');
        if($this->requete->existeParametre('optionsmt')){
            $TypeLot01 = $this->requete->getParametre('optionsmt');
        }else{
            $TypeLot01 = NULL;
        }
        if($this->requete->existeParametre('optionsmt2')){
            $TypeLot02 = $this->requete->getParametre('optionsmt2');
        }else{
            $TypeLot02 = NULL;
        }
        if($this->requete->existeParametre('optionsmt3')){
            $TypeLot03 = $this->requete->getParametre('optionsmt3');
        }else{
            $TypeLot03 = NULL;
        }        
        $donnees =  array ($Nom_chantier,$Date_debut,$Date_fin,$FK_decision,$Date_inscription,
            $Numero_lot_01,$Numero_lot_02,$Numero_lot_03,$Lot_01,$Lot_02,$Lot_03,
            $FK_client,$FK_service,$FK_membres,$Date_remise,0,0,0,1,1,1);
        $add = $this->chantiers->addChantier($donnees);        
        if($add){
            if( $this->createDocument()){                
                $IdLastChantier=$this->chantiers->getLastInsert();                
                $this->rediriger('chantier/createdSuccess',$IdLastChantier['LAST_INSERT_ID()']);                
            }            
        }
        else {            
            throw new Exception ("Query Problem");
        }
        
    }
    public function createDocument(){
        $IdLastChantier=$this->chantiers->getLastInsert();
        $chantier = $this->chantiers->getChantier($IdLastChantier['LAST_INSERT_ID()']);       
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/dc1_prerempli.docx');
        $templateProcessor2 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/dc2_prerempli.docx');
        $templateProcessor3 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Lettre_accompagement.docx');
        if($this->requete->existeParametre('optionsmt') && $this->requete->getParametre('optionsmt')=='GO'){
            $templateProcessor4 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Memoire_Technique_GO.docx');
        }
        else{
            $templateProcessor4 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Memoire_Technique_Platrerie.docx');
        }if($this->requete->existeParametre('optionsmt2') && $this->requete->getParametre('optionsmt2')=='GO'){
            $templateProcessor5 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Memoire_Technique_GO.docx');
        }
        else{
            $templateProcessor5 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Memoire_Technique_Platrerie.docx');
        }

        $templateProcessor6 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Memoire_Technique_Troisieme_lot.docx');
        $templateProcessor7 = new \PhpOffice\PhpWord\TemplateProcessor('web/documents/docType/Liste_des_referneces.docx');
        if($chantier['Description']== "Sans service")
            $Service=" ";
        else
            $Service= "<w:br/>".$chantier['Description'];
        $Adresse2 =$chantier['Adresse'];                    
        $Adresse2 = str_replace("\r\n", "</w:t><w:br/><w:t>", $Adresse2);
        $docCandidature=array('DC1','DC2','KBIS','NOTI2','CCAP','Assurance','Qualibat','Attestation','Planning_candidature','Liste_reference','Autre_candidature');
        $docOffre=array('AE','CCTP','DPGF','DQE','MT','Planning','PGC','Plan','Autre_offre');
        
        //Ajout des variables au template DC1
        $templateProcessor->setValue('Nom', $chantier['Nom']);
        $templateProcessor->setValue('Service', $Service); 
        $templateProcessor->setValue('Adresse', $Adresse2);                    
        $templateProcessor->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor->setValue('Ville', $chantier['Ville']);
        $templateProcessor->setValue('Nom_chantier', $chantier['Nom_chantier']);
        if($chantier['Numero_lot_01']!= NULL){
            $templateProcessor->setValue('Numero_lot_01', 'Lot 0'.$chantier['Numero_lot_01']);
        }else{
            $templateProcessor->setValue('Numero_lot_01', $chantier['Numero_lot_01']);
        }
        if($chantier['Numero_lot_02']!= NULL){
            $templateProcessor->setValue('Numero_lot_02', ', Lot 0'.$chantier['Numero_lot_02']);
        }else{
            $templateProcessor->setValue('Numero_lot_02', $chantier['Numero_lot_02']);
        }
        if($chantier['Numero_lot_03']!= NULL){
            $templateProcessor->setValue('Numero_lot_03', ', Lot 0'.$chantier['Numero_lot_03']);
        }else{
            $templateProcessor->setValue('Numero_lot_03', $chantier['Numero_lot_03']);
        }
        if($chantier['Numero_lot_01']!= NULL){
            $templateProcessor->setValue('Numero_lot_01b', 'Lot 0'.$chantier['Numero_lot_01']);
        }else{
            $templateProcessor->setValue('Numero_lot_01b', $chantier['Numero_lot_01']);
        }
        if($chantier['Numero_lot_02']!= NULL){
            $templateProcessor->setValue('Numero_lot_02b', 'Lot 0'.$chantier['Numero_lot_02']);
        }else{
            $templateProcessor->setValue('Numero_lot_02b', $chantier['Numero_lot_02']);
        }
        if($chantier['Numero_lot_03']!= NULL){
            $templateProcessor->setValue('Numero_lot_03b', 'Lot 0'.$chantier['Numero_lot_03']);
        }else{
            $templateProcessor->setValue('Numero_lot_03b', $chantier['Numero_lot_03']);
        }  
        if($chantier['Lot_01']==NULL){
            $templateProcessor->setValue('Lot_01', $chantier['Lot_01']);
        }else{
            $templateProcessor->setValue('Lot_01', ' : '.$chantier['Lot_01']);
        }
        if($chantier['Lot_02']==NULL){
            $templateProcessor->setValue('Lot_02', $chantier['Lot_02']);
        }else{
            $templateProcessor->setValue('Lot_02', ' : '.$chantier['Lot_02']);
        } 
        if($chantier['Lot_03']==NULL){
            $templateProcessor->setValue('Lot_03', $chantier['Lot_03']);
        }else{
            $templateProcessor->setValue('Lot_03', ' : '.$chantier['Lot_03']);
        }
        $Date_remise = DateTime::createFromFormat('Y-m-d', $chantier['Date_de_remise']);
        $Date_remise= $Date_remise->format('d-m-Y');
        $templateProcessor->setValue('Date_de_remise', $Date_remise );
        
        //Ajout des variables au template DC2
        $templateProcessor2->setValue('Nom', $chantier['Nom']);
        $templateProcessor2->setValue('Service', $Service); 
        $templateProcessor2->setValue('Adresse', $Adresse2);                    
        $templateProcessor2->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor2->setValue('Ville', $chantier['Ville']);
        $templateProcessor2->setValue('Nom_chantier', $chantier['Nom_chantier']);                    

        foreach ($docCandidature as $value) {
            if ($this->requete->existeParametre($value)){
               $tmp=" ".$this->requete->getParametre($value)." ; ";
               $templateProcessor2->setValue($value, $tmp);               
            }else{
                $empty=" ";                            
                $templateProcessor2->setValue($value, $empty);
            }
        }
        foreach ($docOffre as $value) {                        
            if ($this->requete->existeParametre($value)){
               $tmp=" ".$this->requete->getParametre($value)." ; ";                                    
               $templateProcessor2->setValue($value, $tmp);               
            }else{
                $empty=" ";                            
                $templateProcessor2->setValue($value, $empty);
            }
        }
        
        //Ajout des variables au template lettre d'accompagnement
        $templateProcessor3->setValue('Nom', $chantier['Nom']);
        $templateProcessor3->setValue('Service', $Service); 
        $templateProcessor3->setValue('Adresse', $Adresse2);                    
        $templateProcessor3->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor3->setValue('Ville', $chantier['Ville']);
        $templateProcessor3->setValue('Nom_chantier', $chantier['Nom_chantier']);
        $templateProcessor3->setValue('Date_de_remise', $Date_remise );

        foreach ($docCandidature as $value) {
            if ($this->requete->existeParametre($value)){
               $tmp="<w:br/>- ".$this->requete->getParametre($value);
               $templateProcessor3->setValue($value, $tmp);                                
            }else{
                $empty=" ";                            
                $templateProcessor3->setValue($value, $empty);
            }
        }

        foreach ($docOffre as $value) {                        
            if ($this->requete->existeParametre($value)){
               $tmp="<w:br/>- ".$this->requete->getParametre($value);                                    
               $templateProcessor3->setValue($value, $tmp);                                
            }else{
                $empty=" ";                            
                $templateProcessor3->setValue($value, $empty);
            }
        }
        
        //Ajout des variables au template MT Gros-Oeuvre (MT 1)
        $templateProcessor4->setValue('Nom', $chantier['Nom']);
        $templateProcessor4->setValue('Service', $Service); 
        $templateProcessor4->setValue('Adresse', $Adresse2);                    
        $templateProcessor4->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor4->setValue('Ville', $chantier['Ville']);
        $templateProcessor4->setValue('Nom_chantier', $chantier['Nom_chantier']);
        $templateProcessor4->setValue('Date_de_remise', $Date_remise );
        if($this->requete->existeParametre('optionsmt')){
            $templateProcessor4->setValue('Numero_lot_01', $chantier['Numero_lot_01']);
            $templateProcessor4->setValue('Lot_01', $chantier['Lot_01']);
        }
        //Ajout des variables au template MT Platrerie (MT 2)
        $templateProcessor5->setValue('Nom', $chantier['Nom']);
        $templateProcessor5->setValue('Service', $Service); 
        $templateProcessor5->setValue('Adresse', $Adresse2);                    
        $templateProcessor5->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor5->setValue('Ville', $chantier['Ville']);
        $templateProcessor5->setValue('Nom_chantier', $chantier['Nom_chantier']);
        $templateProcessor5->setValue('Date_de_remise', $Date_remise );                    
        if($this->requete->existeParametre('optionsmt2')){                        
            $templateProcessor5->setValue('Numero_lot_01', $chantier['Numero_lot_02']);
            $templateProcessor5->setValue('Lot_01', $chantier['Lot_02']);
        }
        //Ajout des variables au template Liste de reference
        $templateProcessor7->setValue('Nom', $chantier['Nom']);
        $templateProcessor7->setValue('Service', $Service); 
        $templateProcessor7->setValue('Adresse', $Adresse2);                    
        $templateProcessor7->setValue('Code_postal', $chantier['Code_postal']);
        $templateProcessor7->setValue('Ville', $chantier['Ville']);
        $templateProcessor7->setValue('Nom_chantier', $chantier['Nom_chantier']);
        $templateProcessor7->setValue('Date_de_remise', $Date_remise );                    
        $templateProcessor7->setValue('Numero_lot_01', $chantier['Numero_lot_01']);

        //Création du dossier pour les documents du chantier.
        $dossier = 'web/documents/docChantier'.$chantier['ID_chantier'];
        if(!is_dir($dossier)){
           mkdir($dossier);
           mkdir($dossier.'/3 - Offre');
           mkdir($dossier.'/2 - Candidature');
           mkdir($dossier.'/4 - FT');
        }
        //Sauvegarde des fichiers
        $templateProcessor->saveAs($dossier.'/2 - Candidature/DC1.docx');
        $templateProcessor2->saveAs($dossier.'/2 - Candidature/DC2.docx');
        $templateProcessor3->saveAs($dossier.'/2 - Candidature/Lettre_accompagement.docx');
        if(isset($_POST['optionsmt']) && $_POST['optionsmt']=='GO'){
            $templateProcessor4->saveAs($dossier.'/3 - Offre/Memoire_Technique_Gros-oeuvre.docx');
        }
        else{
            $templateProcessor4->saveAs($dossier.'/3 - Offre/Memoire_Technique_Platrerie.docx');
        }
        if(isset($_POST['optionsmt2'])){
            if($_POST['optionsmt2']=='GO'){
                $templateProcessor5->saveAs($dossier.'/3 - Offre/Memoire_Technique_Gros-oeuvre.docx');
            }
            else{
                $templateProcessor5->saveAs($dossier.'/3 - Offre/Memoire_Technique_Platrerie.docx');
            }
        }

        $templateProcessor7->saveAs($dossier.'/2 - Candidature/Liste_des_referneces.docx');
        if (is_file($dossier.'/2 - Candidature/Liste_des_referneces.docx')){
            return TRUE;
        }
        
    }
            

}