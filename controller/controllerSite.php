<?php
class controllerSite{

    protected static $object = 'Pages';

    public static function redirect($page){
        $view = $page.'.php';
        $pagetitle = ucwords($page);
        require File::build_path(array("view", "view.php"));
    }

    public static function setDark(){
        $_SESSION['colormode'] = 'dark';
        $view="19s.php";
        require file::build_path(array("view","view.php"));
    }

    public static function setLight(){
        $_SESSION['colormode'] = 'light';
        $view="19s.php";
        require file::build_path(array("view","view.php"));
    }
}