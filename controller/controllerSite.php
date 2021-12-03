<?php
class controllerSite{

    protected static $object = 'Pages';

    public static function redirect($page){
        $view = $page.'.php';
        $pagetitle = ucwords($page);
        require File::build_path(array("view", "view.php"));
    }
}