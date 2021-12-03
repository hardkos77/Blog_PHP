<?php

require_once 'modeles/Recette.php';
require_once 'modeles/Commentaire.php';
require_once 'framework/Controller.php';
require_once 'framework/Vue.php';

class controllerRecette extends Controller{
    private $recette;
    private $commentaire;

    public function __construct(){
        $this->recette = new Recette();
        $this->commentaire = new Commentaire();
    }
    public function index(){
        $var = null;
        return $var;
    }


    public function recette(){
        $selectedRecette = $this->recette->getRecette($_GET['id']);
        $ingredients =$this->recette->getIngredients($_GET['id']);
        $commentaires = $this->commentaire->getCommentaires($_GET['id']);
        $this->genererVue(array('selectedRecette' => $selectedRecette, 'ingredients'=> $ingredients, 'commentaires' => $commentaires));
    }

    public function commenter(){
        $this->commentaire->ajouterCommentaire($_GET['id'],$_POST['auteur'], $_POST['note'],$_POST['contenu']);
        $stringLocation ='Location: index.php?controller=recette&action=recette&id='.$_GET['id'];
        header($stringLocation);
    }

}

?>
