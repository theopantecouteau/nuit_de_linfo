<?php

class controllerStations
{
    protected static $object = "Stations";

    public function dunkerque(){
        $view= "dunkerque.php";
        $pagetitle = "Station de Dunkerque";
        require file::build_path(array("view", "view.php"));
    }

    public function braydunes(){
        $view= "bray_dunes.php";
        $pagetitle = "Station de Bray Dunes";
        require file::build_path(array("view", "view.php"));
    }

    public function fortmardick(){
        $view= "fort_mardick.php";
        $pagetitle = "Station de Fort Mardick";
        require file::build_path(array("view", "view.php"));
    }

    public function gravelines(){
        $view= "gravelines.php";
        $pagetitle = "Station de Gravelines";
        require file::build_path(array("view", "view.php"));
    }

    public function malo(){
        $view= "malo_les_bains.php";
        $pagetitle = "Station de Malo les Bains";
        require file::build_path(array("view", "view.php"));
    }


}