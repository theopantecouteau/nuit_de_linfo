<?php
require_once file::build_path(array('model', 'modelBateau.php'));
require_once file::build_path(array('model','modelMoyens.php'));
class controllerMoyens extends model
{
    protected static $object = 'Bateau';
    public static function readDunkerque(){
        $tab = modelBateau::selectAll();
        $tab_b = array();
        $moyen = modelMoyens::select(1);
        $histoire = $moyen->get('histoire');
        foreach($tab as $boat){
            if($boat->get('idMoyen') == 1){
                $tab_b[] = $boat;
            }
        }
        $view = 'list.php';
        $pagetitle = '';
        require file::build_path(array('view','view.php'));

    }
    public static function readFort(){
        $tab = modelBateau::selectAll();
        $tab_b = array();
        $moyen = modelMoyens::select(2);
        $histoire = $moyen->get('histoire');
        foreach($tab as $boat){
            if($boat->get('idMoyen') == 2){
                $tab_b[] = $boat;
            }
        }
        $view = 'list.php';
        $pagetitle = '';
        require file::build_path(array('view','view.php'));
    }
    public static function readGravel(){
        $tab = modelBateau::selectAll();
        $tab_b = array();
        $moyen = modelMoyens::select(3);
        $histoire = $moyen->get('histoire');
        foreach($tab as $boat){
            if($boat->get('idMoyen') == 3){
                $tab_b[] = $boat;
            }
        }
        $view = 'list.php';
        $pagetitle = '';
        require file::build_path(array('view','view.php'));
    }
}