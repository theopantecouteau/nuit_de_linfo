<?php
Class controllerSortie{

    protected static $object="Sortie";

    public function dix_huit_siecle(){
        $view = "dix_huit.php";
        $pagetitle = "18 ieme siècle";
        require file::build_path(array("view","view.php"));
    }
}