<?php

class Vue{
    private $fichier;
    private $titre;

    public function __construct($action, $controller = ""){
        $fichier = "vues/";
        if ($controller != ""){
            $fichier = $fichier . $controller . "/";
        }
        $this->fichier = $fichier . $action . ".php";
    }

    public function generer($donnees){
        $contenu = $this->genererFichier($this->fichier, $donnees);
        $vue = $this->genererFichier('vues/gabarit.php', array('titre' => $this->titre, 'contenu' => $contenu));
        echo $vue;
    }

    private function genererFichier($fichier, $donnees){
        if(file_exists($fichier)){
            extract($donnees);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else{
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }
}

?>
