<?php
require_once file::build_path(array('model', 'model.php'));
class modelBateau extends model{

    private $idBateau;
    private $nomBateau;
    private $constructeur;
    private $datecommande;
    private $dimensions;
    private $histoire;
    private $typeBateau;
    private $finService;
    private $lienImagePlan;
    private $lienimageHistorique;
    private $nomdonnedate;
    private $numCoque;
    private $poids;
    private $vitesse;
    private $moteurs;
    private $tirantDeau;
    protected static $object = 'bateau';
    protected static $primary = 'id';
    protected static $table = 'bateau';


    public function get($nom_attribut){
        if(property_exists($this, $nom_attribut))
            return $this->$nom_attribut;
        return false;
    }

    public function set($nom_attribut, $valeur) {
        if (property_exists($this, $nom_attribut))
            $this->$nom_attribut = $valeur;
        return false;
    }

    public function __construct($idBateau = NULL, $constructeur = NULL,$nomBateau = NULL, $datecommande = NULL, $dimensions = NULL, $histoire = NULL, $typeBateau = NULL,
                                $finService = NULL, $lienImagePlan = NULL, $lienimageHistorique = NULL, $nomdonnedate = NULL, $numCoque = NULL, $poids = NULL, $vitesse = NULL,
                                $moteurs = NULL, $tirantDeau = NULL){
        if(!is_null($idBateau) && !is_null($nomBateau) && !is_null($constructeur) &&!is_null($datecommande) && !is_null($dimensions) && !is_null($histoire) && !is_null($typeBateau)
        && !is_null($finService) && !is_null($lienImagePlan) && !is_null($lienimageHistorique) && !is_null($nomdonnedate) && !is_null($numCoque) && !is_null($poids)
        && !is_null($vitesse) && !is_null($moteurs) && !is_null($tirantDeau)){
            $this->idBateau = $idBateau;
            $this->nomBateau = $nomBateau;
            $this->constructeur = $constructeur;
            $this->datecommande = $datecommande;
            $this->dimensions = $dimensions;
            $this->histoire = $histoire;
            $this->typeBateau = $typeBateau;
            $this->finService = $finService;
            $this->lienImagePlan = $lienImagePlan;
            $this->lienimageHistorique = $lienimageHistorique;
            $this->nomdonnedate = $nomdonnedate;
            $this->numCoque = $numCoque;
            $this->poids = $poids;
            $this->vitesse = $vitesse;
            $this->moteurs = $moteurs;
            $this->tirantDeau = $tirantDeau;
        }
    }

}