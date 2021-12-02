<?php

require_once file::build_path(array("model", "modelSauveteurs.php"));

Class controllerSauveteurs extends modelSauveteurs {

    protected static $object = 'Sauveteurs';

    public function readAll(){
        $view = "list.php";
        $pagetitle = "Liste des sauveteurs";
        require file::build_path(array("view", "view.php"));
    }

    public function read($id){
        $view = "details.php";
        $pagetitle = "Voici les détails sur ce sauveteur";
        $tab = modelSauveteurs::selectAllbyNom($id);
        require file::build_path(array("view", "view.php"));
    }

    public function tableau(){
        $view = "tableau_honneur.php";
        $pagetitle = "Tableau d'honneur";
        require_once file::build_path(array("view", "view.php"));
    }

    public function parole(){
        $view = "parole.php";
        $pagetitle = "Paroles de sauveteurs et sauvés";
        require_once file::build_path(array("view", "view.php"));
    }

    public function gratification(){
        $view = "gratification.php";
        $pagetitle = "Gratifications";
        require_once file::build_path(array("view", "view.php"));
    }

    public function sauveteur(){
        $view = "sauveteur_ailleurs.php";
        $pagetitle = "Sauveteur(s) d'ailleurs ";
        require_once file::build_path(array("view", "view.php"));
    }

    public function acteurs(){
        $view = "acteurs.php";
        $pagetitle = "Les acteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public function douaniers(){
        $view = "douanier.php";
        $pagetitle = "Les douaniers et les sauveteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public function lamaneurs(){
        $view = "lamaneur.php";
        $pagetitle = "Les lamaneurs et les sauveteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public function pilotes(){
        $view = "pilote.php";
        $pagetitle = "Les pilotes et les sauveteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public function remorquages(){
        $view = "remorquage.php";
        $pagetitle = "Les remorquages et les sauvetages";
        require_once file::build_path(array("view", "view.php"));
    }

    public function islandais(){
        $view = "islandais.php";
        $pagetitle = "Islandais et sauveteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public function sauveteurs(){
        $view = "sauveteurs.php";
        $pagetitle = "Les sauveteurs";
        require_once file::build_path(array("view", "view.php"));
    }

    public static function created()
    {
            $pagetitle = "Demande de vérification en cours";
            $view = "created.php";
            $p = new modelSauveteurs(conf::myGet('nom'), conf::myGet('prenom'), conf::myGet('description'), conf::myGet('naissance'), conf::myGet('mort'));
            $p->save();
            require file::build_path(array("view", "view.php"));
    }

    public function create(){
        $view= "create.php";
        $actionFormulaire = "created";
        $nom ="";
        $prenom="";
        $description="";
        $dateNaissance="";
        $dateMort="";
        $bouton= "Créer";
        $pagetitle="Ajouter un sauveteur";
        require file::build_path(array("view", "view.php"));
    }

    public function update($id){
        $p = modelSauveteurs::selectAllbyid($id);
        $actionFormulaire="createdModif";
        $view="create.php";
        $pagetitle="Modifier des informations";
        $nom ="{$p->getNom()}";
        $prenom="{$p->getPrenom()}";
        $description="{$p->getDescription()}";
        $dateNaissance="{$p->getDatenaissance()}";
        $dateMort="{$p->getDatemort()}";
        $bouton= "Modifier";
        require file::build_path(array("view", "view.php"));

    }

    public function createdModif(){
        $pagetitle = "Demande de vérification en cours";
        $view = "created.php";
        $p = new modelSauveteurs(conf::myGet('nom'), conf::myGet('prenom'), conf::myGet('description'), conf::myGet('naissance'), conf::myGet('mort'));

        $p->saveModif();
        require file::build_path(array("view", "view.php"));
    }










}
