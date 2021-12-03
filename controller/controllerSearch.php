<?php

require file::build_path(array("model", "modelSearch.php"));

Class controllerSearch extends modelSearch {

    protected static $object='Search';

    public function searched(){
        $letter = conf::myGet('search');
        echo ($letter);
        $p=modelSearch::searchSauveteur($letter);
        $c= modelSearch::searchBateau($letter);
        $d = modelSearch::searchSauve($letter);
        $view="search.php";
        $pagetitle="Votre recherche";
        require file::build_path(array("view", "view.php"));
    }
}
