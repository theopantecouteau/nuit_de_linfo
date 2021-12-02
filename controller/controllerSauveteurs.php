<?php

require_once file::build_path(array("model", "modelSauveteurs.php"));

Class controllerSauveteurs extends modelSauveteurs {

    protected static $object = 'Sauveteurs';

    public function readAll($lettre){
        $view = "list.php";
        $pagetitle = "Liste des sauveteurs";
        require file::build_path(array("view", "view.php"));
    }

    public function read($id){
        $view = "details.php";
        $pagetitle = "";
        $tab = modelSauveteurs::select($id);
        require file::build_path(array("view", "view.php"));
    }



}
