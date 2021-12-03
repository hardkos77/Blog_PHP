<?php

require_once 'modeles/Recette.php';
require_once 'framework/Controller.php';
require_once 'framework/Vue.php';

class ControllerAccueil extends Controller{
    private $recette;

    public function __construct(){
        $this->recette = new Recette();
    }

    public function index(){
        //Tableau de recettes
        $recettes = $this->recette->getRecettes();
        $this->genererVue(array('recette' => $recettes));
    }
}

?>
