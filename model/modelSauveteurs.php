<?php

require_once file::build_path(array("model", "model.php"));

Class modelSauveteurs {

    protected static $object = "Sauveteurs";
    protected static $table = "Sauveteurs__verifTRUE";
    protected static $primary = "id";
    private $id;
    private $nom;
    private $prenom;
    private $description;
    private $datenaissance;
    private $datemort;
    private $biographie;

    /**
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $descriptionbreve
     * @param $datenaissance
     * @param $datemort
     * @param $biographie
     */
    public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $descriptionbreve = NULL, $datenaissance = NULL, $datemort = NULL, $biographie = NULL)
    {
        if (!is_null($id) && !is_null($nom) && !is_null($prenom) && !is_null($descriptionbreve) && !is_null($datenaissance) && !is_null($datemort) && !is_null($biographie) ) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->description = $description;
            $this->datenaissance = $datenaissance;
            $this->datemort = $datemort;
            $this->biographie = $biographie;
        }
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $descriptionbreve
     */
    public function setDescriptionbreve($descriptionbreve)
    {
        $this->descriptionbreve = $descriptionbreve;
    }

    /**
     * @return mixed
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @param mixed $datenaissance
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * @return mixed
     */
    public function getDatemort()
    {
        return $this->datemort;
    }

    /**
     * @param mixed $datemort
     */
    public function setDatemort($datemort)
    {
        $this->datemort = $datemort;
    }

    /**
     * @return mixed
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * @param mixed $biographie
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    public static function selectAllbyLetter($lettre)
    {
        try {
            $rep = model::getPDO()->query("SELECT DISTINCT nom FROM Sauveteurs__verifTRUE WHERE nom LIKE '$lettre%'");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'modelSauveteurs');
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

    public static function selectAllbyNom($nom)
    {
        try {
            $rep = model::getPDO()->query("SELECT  * FROM Sauveteurs__verifTRUE WHERE nom='$nom'");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'modelSauveteurs');
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
