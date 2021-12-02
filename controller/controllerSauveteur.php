<?php

require_once file::build_path(array("model", "modelSauveteur.php"));

Class controllerSauveteur extends modelSauveteur {

    protected static $object = 'Sauveteur';

    public function readAll(){
        $view = "list.php";
        $pagetitle = "Liste des sauveteurs";
        $tab = modelSauveteur::selectAll();
        require file::build_path(array("view", "view.php"));
    }

    public function read($id){
        $view = "details.php";
        $pagetitle = "";
        $tab = modelSauveteur::select($id);
        require file::build_path(array("view", "view.php"));
    }



}
