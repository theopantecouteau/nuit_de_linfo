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
    protected static $table = 'Bateau__PASVERIF';


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
    public static function selectAll()
    {
        $table_name = static::$table;
        $class_name = 'modelBateau';
        try {
            $rep = model::getPDO()->query("SELECT * FROM $table_name");
            $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            return $tab = $rep->fetchAll();
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    public static function select($primary_value)
    {
        $table_name = 'Bateau__PASVERIF';
        $class_name = 'modelBateau';
        $primary_key = static::$primary;
        try {
            $sql = "SELECT * from $table_name WHERE $primary_key=:nom_tag";
            // Préparation de la requête
            $req_prep = model::getPDO()->prepare($sql);

            $values = array(
                "nom_tag" => $primary_value,
            );
            // On donne les valeurs et on exécute la requête
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            $tab = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab))
                return false;
            return $tab[0];
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }
    public static function delete($primary_value)
    {
        $table_name = 'Bateau__PASVERIF';
        $primary_key = static::$primary;
        try {
            $sql = "DELETE FROM $table_name WHERE $primary_key=:tag1";
            $req_prep = model::getPDO()->prepare($sql);
            $values = array(
                "tag1" => $primary_value
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public static function update($data)
    {
        $table_name = 'Bateau__PASVERIF';
        $primary_key = static::$primary;
        $set = "";
        $tab = array();
        foreach ($data as $cle => $valeur) {
            if ($cle == $primary_key) {
                $primary_value = $valeur;
                $tab[":primary_key"] = $valeur;
            } else {
                $set = $set . $cle . "=" . ":" . $cle . ",";
                $tab[":$cle"] = $valeur;
            }
        }
        $set = rtrim($set, ",");
        $sq = $set . " " . "WHERE " . $primary_key .  "=:" . 'primary_key';
        try {
            $sql = "UPDATE $table_name SET $sq";
            $req_prep = model::getPDO()->prepare($sql);
            $req_prep->execute($tab);
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

    public function save($data)
    {
        $table_name = 'Bateau__PASVERIF';
        $primary_key = static::$primary;
        $column = "";
        $tag = "";
        $tab = array();
        foreach ($data as $cle => $valeur) {
            $column = $column . " " . $cle . ",";
            $tag = $tag . " " . "?" . ',';
            $tab[] = $valeur;
        }
        $column = rtrim($column, ",");
        $tag = rtrim($tag, ',');
        $sq = $column;
        try {
            $sql = "INSERT INTO $table_name ($sq) VALUES ($tag)";
            $req_prep = Model::getPDO()->prepare($sql);
            $req_prep->execute($tab);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

}