<?php

require_once 'Requete.php';
require_once 'Vue.php';

abstract class Controller{
    private $action;
    protected $requete;
    public function setRequete(Requete $requete){
        $this->requete = $requete;
    }


    public function executerAction($action){
        if(method_exists($this, $action)){
            $this->action = $action;
            $this->{$this->action}();
        }
        else{
            $classeController = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classeController");
        }
    }

    public abstract function index();

    protected function genererVue($donneesVue = array()){
        $classeController = get_class($this);
        $controller = str_replace("controller", "", strtolower($classeController));
        $vue = new Vue($this->action, $controller);
        $vue->generer($donneesVue);
    }
}

?>
