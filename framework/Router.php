<?php

require_once 'Requete.php';
require_once 'Vue.php';

class Router{
    public function routerRequete(){
        try {
            $requete = new Requete(array_merge($_GET, $_POST));
            $controller = $this->creerController($requete);
            $action = $this->creerAction($requete);
            $controller->executerAction($action);
        }
        catch (Exception $e){
            $this->gererErreur($e);
        }
    }

    private function creerController(Requete $requete){
        $controller = "Accueil";
        if ($requete->existeParametre('controller')){
            $controller = $requete->getParametre('controller');
            $controller = ucfirst(strtolower($controller));
        }
        $classeController = "Controller" . $controller;
        $fichierController = "controllers/" . $classeController . ".php";
        if (file_exists($fichierController)){
            require($fichierController);
            $controller = new $classeController();
            $controller->setRequete($requete);
            return $controller;
        }
        else{
            throw new Exception("Fichier '$fichierController' introuvable");
        }
    }
    private function creerAction(requete $requete){
        $action = "index";
        if ($requete->existeParametre('action')){
            $action = $requete->getParametre('action');
        }
        return $action;
    }
    private function gererErreur(Exception $exception){
        $vue = new Vue('erreur');
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }
}

?>
