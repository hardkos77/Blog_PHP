<?php

require_once 'framework/Modele.php';

class Commentaire extends Modele{
    public function getCommentaires($idRecette){
        return $this->executerRequete('SELECT * FROM commentaire WHERE idRecette=?',[$idRecette])->fetchAll();
    }
    public function ajouterCommentaire($idRecette, $auteur, $note,$contenu){
        return $this->executerRequete('INSERT INTO commentaire (idRecette,auteur,contenu,note,dateCreation) VALUES(?,?,?,?,?)',[$idRecette,$auteur,$contenu,$note,$this->getDate()]);
    }

    public function getDate(){
        return date("Y-m-d H:i:s");
    }
}
?>
