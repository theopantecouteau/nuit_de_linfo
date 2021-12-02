<?php
require_once file::build_path(array("model", "modelSaved.php"));
class controllerSaved extends modelSaved
{
    protected static $object = 'Saved';

    public function readAll(){
        $view = "listSaved.php";
        $pagetitle = "Liste des personnes secourues";
        require file::build_path(array("view", "view.php"));
    }

    public function read($id){
        $view = "details.php";
        $pagetitle = modelSaved::getSaved($id)->getNom();
        $tab = modelSaved::getSaved($id);
        require file::build_path(array("view", "view.php"));
    }
}