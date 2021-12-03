<?php

require_once 'framework/Modele.php';

class Recette extends Modele{

    public function getRecettes(){
        return $this->executerRequete('SELECT * FROM recette')->fetchAll();
    }
    public function getRecette($idRecette){
        return $this->executerRequete('SELECT * FROM recette WHERE id=?',[$idRecette])->fetch();

    }
    public function getIngredients($idRecette){
        return $this->executerRequete('SELECT * FROM ingredient WHERE idRecette=?',[$idRecette])->fetchAll();
    }
}

?>
