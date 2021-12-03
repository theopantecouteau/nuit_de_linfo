<?php
require_once file::build_path(array('model', 'model.php'));
class modelBateau extends model{

    private $id;
    private $nom;
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
    private $idMoyen;
    protected static $object = 'bateau';
    protected static $primary = 'id';
    protected static $table = 'Bateau__PASVERIF';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idBateau
     */
    public function setId($idBateau)
    {
        $this->id = $idBateau;
    }

    /**
     * @return mixed
     */
    public function getNomBateau()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nomBateau
     */
    public function setNomBateau($nomBateau)
    {
        $this->nom = $nomBateau;
    }

    /**
     * @return mixed
     */
    public function getConstructeur()
    {
        return $this->constructeur;
    }

    /**
     * @param mixed $constructeur
     */
    public function setConstructeur($constructeur)
    {
        $this->constructeur = $constructeur;
    }

    /**
     * @return mixed
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * @param mixed $datecommande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param mixed $dimensions
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getHistoire()
    {
        return $this->histoire;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;
    }

    /**
     * @return mixed
     */
    public function getTypeBateau()
    {
        return $this->typeBateau;
    }

    /**
     * @param mixed $typeBateau
     */
    public function setTypeBateau($typeBateau)
    {
        $this->typeBateau = $typeBateau;
    }

    /**
     * @return mixed
     */
    public function getFinService()
    {
        return $this->finService;
    }

    /**
     * @param mixed $finService
     */
    public function setFinService($finService)
    {
        $this->finService = $finService;
    }

    /**
     * @return mixed
     */
    public function getLienImagePlan()
    {
        return $this->lienImagePlan;
    }

    /**
     * @param mixed $lienImagePlan
     */
    public function setLienImagePlan($lienImagePlan)
    {
        $this->lienImagePlan = $lienImagePlan;
    }

    /**
     * @return mixed
     */
    public function getLienimageHistorique()
    {
        return $this->lienimageHistorique;
    }

    /**
     * @param mixed $lienimageHistorique
     */
    public function setLienimageHistorique($lienimageHistorique)
    {
        $this->lienimageHistorique = $lienimageHistorique;
    }

    /**
     * @return mixed
     */
    public function getNomdonnedate()
    {
        return $this->nomdonnedate;
    }

    /**
     * @param mixed $nomdonnedate
     */
    public function setNomdonnedate($nomdonnedate)
    {
        $this->nomdonnedate = $nomdonnedate;
    }

    /**
     * @return mixed
     */
    public function getNumCoque()
    {
        return $this->numCoque;
    }

    /**
     * @param mixed $numCoque
     */
    public function setNumCoque($numCoque)
    {
        $this->numCoque = $numCoque;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getMoteurs()
    {
        return $this->moteurs;
    }

    /**
     * @param mixed $moteurs
     */
    public function setMoteurs($moteurs)
    {
        $this->moteurs = $moteurs;
    }

    /**
     * @return mixed
     */
    public function getTirantDeau()
    {
        return $this->tirantDeau;
    }

    /**
     * @param mixed $tirantDeau
     */
    public function setTirantDeau($tirantDeau)
    {
        $this->tirantDeau = $tirantDeau;
    }

    /**
     * @return mixed
     */
    public function getIdMoyen()
    {
        return $this->idMoyen;
    }

    /**
     * @param mixed $idMoyen
     */
    public function setIdMoyen($idMoyen)
    {
        $this->idMoyen = $idMoyen;
    }

    /**
     * @return string
     */
    public static function getObject()
    {
        return self::$object;
    }

    /**
     * @param string $object
     */
    public static function setObject($object)
    {
        self::$object = $object;
    }

    /**
     * @return string
     */
    public static function getPrimary()
    {
        return self::$primary;
    }

    /**
     * @param string $primary
     */
    public static function setPrimary($primary)
    {
        self::$primary = $primary;
    }

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$table;
    }

    /**
     * @param string $table
     */
    public static function setTable($table)
    {
        self::$table = $table;
    }




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

    public function __construct($id = NULL, $constructeur = NULL,$nomBateau = NULL, $datecommande = NULL, $dimensions = NULL, $histoire = NULL, $typeBateau = NULL,
                                $finService = NULL, $lienImagePlan = NULL, $lienimageHistorique = NULL, $nomdonnedate = NULL, $numCoque = NULL, $poids = NULL, $vitesse = NULL,
                                $moteurs = NULL, $tirantDeau = NULL, $idMoyen = NULL){
        if(!is_null($id) && !is_null($nomBateau) && !is_null($constructeur) &&!is_null($datecommande) && !is_null($dimensions) && !is_null($histoire) && !is_null($typeBateau)
        && !is_null($finService) && !is_null($lienImagePlan) && !is_null($lienimageHistorique) && !is_null($nomdonnedate) && !is_null($numCoque) && !is_null($poids)
        && !is_null($vitesse) && !is_null($moteurs) && !is_null($tirantDeau) && !is_null($idMoyen)){
            $this->id = $id;
            $this->nom = $nomBateau;
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
            $this->idMoyen = $idMoyen;
        }

    }
    public static function selectAll()
    {
        $table_name = 'Bateau__VERIF';
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
        $table_name = 'Bateau__MODIF';
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



    public function saveMod($data)
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

    public static function selectAllbyLetter($lettre)
    {
        try {
            $rep = model::getPDO()->query("SELECT * FROM Bateau__VERIF WHERE nom LIKE '%$lettre%'");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'modelBateau');
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

}