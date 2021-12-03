<?php
require_once file::build_path(array("model", "modelSaved.php"));
require_once file::build_path(array("model", "modelSavedForms.php"));
class controllerSaved
{
    protected static $object = 'Saved';

    public static function readAll(){
        $view = "listSaved.php";
        $pagetitle = "Liste des personnes secourues";
        require file::build_path(array("view", "view.php"));
    }

    public static function read($id){
        $view = "details.php";
        $pagetitle = modelSaved::getSaved($id)->getNom();
        $tab = modelSaved::getSaved($id);
        require file::build_path(array("view", "view.php"));
    }

    public static function create(){
        $view = "addSaved.php";
        $pagetitle = "Suggestion d'ajout";
        require file::build_path(array("view", "view.php"));
    }

    public static function created(){
        $p = new modelSaved(NULL, $_POST['nom'], $_POST['prenom'], $_POST['date'], NULL, $_POST['sortie']);
        $p->saveNew();
        $view = "addedSaved.php";
        $pagetitle = "Liste des personnes secourues";
        require file::build_path(array("view", "view.php"));
    }

    public static function update(){
        $view = "updateSaved.php";
        $pagetitle = "Suggestion de modification";
        require file::build_path(array("view", "view.php"));
    }

    public static function updated(){
        $id = rawurldecode($_GET['id']);
        $p = new modelSaved($id, $_POST['nom'], $_POST['prenom'], $_POST['date'], NULL, $_POST['sortie']);
        $p->saveModif();
        $view = "updatedSaved.php";
        $pagetitle = "Liste des personnes secourues";
        require file::build_path(array("view", "view.php"));
    }
}