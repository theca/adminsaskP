<?php

require_once 'Configuration.php';

/**
 * Classe modélisant une vue.
 *
 * @author Baptiste Pesquet
 */
class Vue
{
    /** Nom du fichier associé à la vue */
    private $fichier;

    /** Titre de la vue (défini dans le fichier vue) */
    private $titre;

    /**
     * Constructeur
     * 
     * @param string $action Action à laquelle la vue est associée
     * @param string $controleur Nom du contrôleur auquel la vue est associée
     */
    public function __construct($action, $controleur = "")
    {
        // Détermination du nom du fichier vue à partir de l'action et du constructeur
        // La convention de nommage des fichiers vues est : Vue/<$controleur>/<$action>.php
        $fichier = "Vue/";
        if ($controleur != "") {
            $fichier = $fichier . $controleur . "/";
        }
        $this->fichier = $fichier . $action . ".tpl";
    }

    /**
     * Génère et affiche la vue
     * 
     * @param array $donnees Données nécessaires à la génération de la vue
     */
    public function generer($donnees)
    {        
        // Génération de la partie spécifique de la vue
        // On définit une variable locale accessible par la vue pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URI de type controleur/action/id
        $racineWeb = Configuration::get("racineWeb", "/");
        $contenu = $this->genererFichier($this->fichier, $donnees, $racineWeb);
        
        // Génération du gabarit commun utilisant la partie spécifique
    }
    public function genererAjax($donnees)
    {        
        // Génération de la partie spécifique de la vue
        // On définit une variable locale accessible par la vue pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URI de type controleur/action/id
        
        $contenu = $this->genererFichierAjax($this->fichier, $donnees);
        
        // Génération du gabarit commun utilisant la partie spécifique
    }

    /**
     * Génère un fichier vue et renvoie le résultat produit
     * 
     * @param string $fichier Chemin du fichier vue à générer
     * @param array $donnees Données nécessaires à la génération de la vue
     * @return string Résultat de la génération de la vue
     * @throws Exception Si le fichier vue est introuvable
     */
    private function genererFichier($fichier, $donnees, $racineWeb)
    {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            //extract($donnees);
            // Initialisation Smarty
            $smarty = new Smarty();
            $smarty->assign('racineWeb', $racineWeb);
            $smarty->assign('donnees', $donnees);
            
			
            // Démarrage de la temporisation de sortie
            $smarty->display('Vue/header.tpl');
            $smarty->display($this->fichier);
            $smarty->display('Vue/footer.tpl');
           
            // Arrêt de la temporisation et renvoi du tampon de sortie
            
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
    private function genererFichierAjax($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            //extract($donnees);
            // Initialisation Smarty
            $smarty = new Smarty();            
            $smarty->assign('donnees', $donnees);
            // Démarrage de la temporisation de sortie
            $smarty->display($this->fichier);           
            // Arrêt de la temporisation et renvoi du tampon de sortie
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }

    /**
     * Nettoie une valeur insérée dans une page HTML
     * Doit être utilisée à chaque insertion de données dynamique dans une vue
     * Permet d'éviter les problèmes d'exécution de code indésirable (XSS) dans les vues générées
     * 
     * @param string $valeur Valeur à nettoyer
     * @return string Valeur nettoyée
     */
    private function nettoyer($valeur)
    {
        // Convertit les caractères spéciaux en entités HTML
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }

}
