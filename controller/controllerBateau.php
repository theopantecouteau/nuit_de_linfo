<?php
require_once file::build_path(array('model', 'modelBateau.php'));
class controllerBateau
{
    protected static $object = 'Bateau';

    public static function readAll(){
        $tab_b = modelBateau::selectAll();
        $view = 'list.php';
        $pagetitle = 'Liste des bateaux';
        require file::build_path(array('view', 'view.php'));
    }
    public static function error(){
        $view = 'error.php';
        $pagetitle = 'Erreur';
        require file::build_path(array('view', 'view.php'));
    }
    public static function read($idBateau){
        if(!modelBateau::select($idBateau)){
            $view = 'error.php';
            $pagetitle = 'Erreur';
            require file::build_path(array('view','view.php'));
        }
        else{
            $b = modelBateau::select($idBateau);
            $view = 'detail.php';
            $pagetitle = 'Détails du bateau';
            require file::build_path(array('view','view.php'));
        }
    }
    public static function delete($idBateau){
        if(!modelBateau::select($idBateau)){
            $view = 'error.php';
            $pagetitle = 'Erreur';
            require file::build_path(array('view','view.php'));
        }
        else{
            modelBateau::delete($idBateau);
            $tab_b = modelBateau::selectAll();
            $view = 'deleted.php';
            $pagetitle = 'Bateau supprimé';
            require file::build_path(array('view', 'view.php'));
        }
    }
    public static function create(){
        $action = '';
        //Liste des attributs à remplir dans formulaire
        $view = 'update.php';
        $pagetitle = 'Création d\'un bateau';
        require file::build_path(array('view','view.php'));
    }
    public static function created(){
        $b1 = new modelBateau(/*Attributs du model*/);
        $data = [/* Données provenant du form*/];
        $b1->save($data);
        $tab_b = modelBateau::selectAll();
        $view = 'created.php';
        $pagetitle = 'Bateau créé';
        require file::build_path(array('view', 'view.php'));
    }
    public static function update($idBateau){
        $b1 = modelBateau::select($idBateau);
        $action = '';
        $rqd = 'readonly';
        //récup des attributs du bateau que l'on veut modifier.
        $view = 'update.php';
        $pagetitle = 'Modification d\'un bateau';
        require file::build_path(array('view', 'view.php'));
    }
    public static function updated(){
        $data = [/*Données provenant du formulaire*/];
        modelBateau::update($data);
        $tab_p = ModelProduit::selectAll();
        $view = 'updated.php';
        $pagetitle = 'Bateau mis à jour';
        require file::build_path(array('view', 'view.php'));
    }
}