<?php
class controllerSite{


    public static function redirect($page){
        $controller = 'pages';
        $pagetitle = ucwords($page);
        controllerSite::template($controller, $page, $pagetitle);
    }

    public static function template($controleur, $vue, $titre){
        $controller = $controleur;
        $view = $vue;
        $pagetitle = $titre;
        require File::build_path(array("view", "view.php"));
    }
}