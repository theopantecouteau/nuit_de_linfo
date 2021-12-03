<?php

require_once file::build_path(array("model", "modelBateau.php"));
require_once file::build_path(array("model", "modelSauveteurs.php"));
require_once file::build_path(array("model", "modelSaved.php"));


Class controllerSearch {

    protected static $object='Search';

    public function searched(){
        $letter = conf::myGet('search');
        $p=modelSauveteurs::selectAllbyLetter($letter);
        $c= modelBateau::selectAllbyLetter($letter);
        //$d= modelSaved::getAllbyLetter($letter);
        $view="search.php";
        $pagetitle="Votre recherche";
        require file::build_path(array("view", "view.php"));
    }
}
