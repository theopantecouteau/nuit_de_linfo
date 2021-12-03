<?php
require_once file::build_path(array("model", "modelMessage.php"));

class controllerMessage{

    protected static $object = "Message";

    public static function readAll() {
        $tab_v = modelMessage::getAllMessages();//appel au modèle pour gerer la BD
        $view= "list.php";
        $pagetitle="Liste des messages";
        require File::build_path(array("view","view.php")); //"redirige" vers la vue
    }


    public static function create() {
        $view="create.php";
        $pagetitle="créer un message";
        require File::build_path(array("view", "view.php"));
    }

    public static function created(){
        $id = conf::myGet('prenom');
        $message = conf::myGet('message');
        $image = conf::myGet('image');
        $m1 = new modelMessage($id, $message, $image);
        $m1->save();
        controllerMessage::readAll();

    }
}


?>

