<?php
require_once 'ControleurSecurise.php';
require_once 'Modele/Chantier.php';

class ControleurChantier extends ControleurSecurise {

    private $chantier;
    private $title;

    public function __construct() {
        $this->chantier = new Chantier();
        $this->title = "Mon blog";
    }

    // Affiche la liste de tous les billets du blog
    public function index() {
        $title= $this->title;
        $idChantier = $this->requete->getParametre("id");
        $chantier = $this->chantier->getChantier($idChantier);
        $this->genererVue(array('chantier' => $chantier, 'title' => $title));
    }
    public function createdSuccess() {
        $title= $this->title;
        $idChantier = $this->requete->getParametre("id");
        $chantier = $this->chantier->getChantier($idChantier);
        $msg = "<div class='alert alert-success'>Chantier et document crées avec succés</div>";
        $this->genererVue(array('chantier' => $chantier, 'title' => $title, 'msg'=>$msg));
    }
    
    public function modifierChantier(){
        $idChantier = $this->requete->getParametre("id_client");
        $donnee = $this->requete->getParametre("donnee");
        $colonne = $this->requete->getParametre("colonne");        
        $this->chantier->updateChantier($colonne, $donnee, $idChantier);
        $decision=$this->chantier->getChantier($idChantier);        
        $chantier[$colonne]=$donnee;        
        $this->genererVueAjax(array('decision'=>$decision,'chantier' => $chantier,'colonne'=>$colonne));
    }
    
    public function downloadDoc() {
        if($this->requete->existeParametre("id_chantier")){
            $id=$this->requete->getParametre("id_chantier");
            $the_folder = 'web/documents/docChantier'.$id;
            if(file_exists($the_folder)){
                $zip_file_name = 'chantier'.$id.'.zip';
                   /* $download_file= true;
                // create object
                $zip = new ZipArchive();
                // open archive
                if ($zip->open($zip_file_name, ZIPARCHIVE::CREATE) !== TRUE) {
                die ("Could not open archive");
                }
                // initialize an iterator
                // pass it the directory to be processed
                $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($the_folder));
                // iterate over the directory
                // add each file found to the archive
                foreach ($iterator as $key=>$value) {
                $zip->addFile(realpath($key), $key) or die ("ERROR: Could not add file: $key");
                }
                // close and save archive
                $zip->close();
                echo "Archive created successfully.";

                    if ($download_file)
                    {
                        header('Content-Type: application/zip');
                        header("Content-Disposition: attachment; filename = $zip_file_name");
                        header('Content-Length: ' . filesize($zip_file_name));
                        header("Location: $zip_file_name");

                    }*/
                 $this->Zip($the_folder,$zip_file_name);
                    if(file_exists($zip_file_name)){
                        //Set Headers:
                        header('Pragma: public');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($zip_file_name)) . ' GMT');
                        header('Content-Type: application/force-download');
                        header('Content-Disposition: inline; filename="'.$zip_file_name.'"');
                        header('Content-Transfer-Encoding: binary');
                        header('Content-Length: ' . filesize($zip_file_name));
                        header('Connection: close');
                        ob_clean();
                        readfile($zip_file_name);
                    }
                    if(file_exists($zip_file_name)){
                        unlink($zip_file_name);
                    }
            }else{
                           echo "Attention! Le dossier de ce chantier n'existe pas! Veuillez contactez votre administrateur web!";
            }
        }
    }
    public function Zip($source, $destination)
    {
        if (!extension_loaded('zip') || !file_exists($source)) {
            return false;
        }
        $zip = new ZipArchive();
        if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
            return false;
        }
        $source = str_replace('\\', '/', realpath($source));
        if (is_dir($source) === true)
        {
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
            foreach ($files as $file)
            {
                $file = str_replace('\\', '/', realpath($file));
                if (is_dir($file) === true)
                {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                }
                else if (is_file($file) === true)
                {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        }
        else if (is_file($source) === true)
        {
            $zip->addFromString(basename($source), file_get_contents($source));
        }
        return $zip->close();
    }

}