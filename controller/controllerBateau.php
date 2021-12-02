<?php
// require modelbateaux
class controllerBateau
{
    protected static $object = 'bateau';

    public static function readAll(){
        $tab_b = ModelBateau::selectAll();
        $view = 'list';
        $pagetitle = 'Liste des bateaux';
        require File2::build_path(array('view', 'view.php'));
    }
    public static function error(){
        $view = 'error';
        $pagetitle = 'Erreur';
        require File2::build_path(array('view', 'view.php'));
    }
    public static function read($idBateau){
        if(!ModelBateau::select($idBateau)){
            $view = 'error';
            $pagetitle = 'Erreur';
            require File2::build_path(array('view','view.php'));
        }
        else{
            $b = ModelBateau::select($idBateau);
            $view = 'detail';
            $pagetitle = 'Détails du bateau';
            require File2::build_path(array('view','view.php'));
        }
    }
    public static function delete($idBateau){
        if(!ModelBateau::select($idBateau)){
            $view = 'error';
            $pagetitle = 'Erreur';
            require File2::build_path(array('view','view.php'));
        }
        else{
            ModelBateau::delete($idBateau);
            $tab_b = ModelBateau::selectAll();
            $view = 'deleted';
            $pagetitle = 'Bateau supprimé';
            require File2::build_path(array('view', 'view.php'));
        }
    }
    public static function create(){
        $action = '';
        //Liste des attributs à remplir dans formulaire
        $view = 'update';
        $pagetitle = 'Création d\'un bateau';
        require File2::build_path(array('view','view.php'));
    }
    public static function created(){
        $b1 = new ModelBateau(/*Attributs du model*/);
        $data = [/* Données provenant du form*/];
        $b1->save($data);
        $tab_b = ModelBateau::selectAll();
        $view = 'created';
        $pagetitle = 'Bateau créé';
        require File2::build_path(array('view', 'view.php'));
    }
    public static function update($idBateau){
        $b1 = ModelBateau::select($idBateau);
        $action = '';
        $rqd = 'readonly';
        //récup des attributs du bateau que l'on veut modifier.
        $view = 'update';
        $pagetitle = 'Modification d\'un bateau';
        require File2::build_path(array('view', 'view.php'));
    }
    public static function updated(){
        $data = [/*Données provenant du formulaire*/];
        ModelBateau::update($data, $_POST['idBateau']);
        $tab_p = ModelProduit::selectAll();
        $view = 'updated';
        $pagetitle = 'Bateau mis à jour';
        require File2::build_path(array('view', 'view.php'));
    }
}