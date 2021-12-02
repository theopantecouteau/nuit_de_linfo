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

    /**
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $descriptionbreve
     * @param $datenaissance
     * @param $datemort
     */
    public function __construct($nom = NULL, $prenom = NULL, $description = NULL, $datenaissance = NULL, $datemort = NULL)
    {
        if (!is_null($nom) && !is_null($prenom) && !is_null($description)) {
            $this->id = NULL;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->description = $description;
            $this->datenaissance = $datenaissance;
            $this->datemort = $datemort;
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

    public function save()
    {
        try {
            $sql = "INSERT INTO Sauveteurs__verifFALSE  (nom, prenom, description, dateNaissance, dateMort) VALUES 
                    (:nom, :prenom, :description, :dateNaissance, :dateMort)";

            $req_prep = model::getPDO()->prepare($sql);
            echo($this->nom);

            $values= array(
                "nom" => $this->nom,
                "prenom" =>$this->prenom,
                "description" =>$this->description,
                "dateNaissance" => $this->datenaissance,
                "dateMort" => $this->datemort
            );

            // On donne les valeurs et on exécute la requête
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

    public static function selectAllbyid($id)
    {
        try {
            $rep = model::getPDO()->query("SELECT  * FROM Sauveteurs__verifTRUE WHERE id=$id");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'modelSauveteurs');
            $tab = $rep->fetchAll();
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

    public function saveModif()
    {
        try {
            $sql = "INSERT INTO Sauveteurs__MODIF  (nom, prenom, description, dateNaissance, dateMort) VALUES 
                    (:nom, :prenom, :description, :dateNaissance, :dateMort)";

            $req_prep = model::getPDO()->prepare($sql);
            echo($this->nom);

            $values= array(
                "nom" => $this->nom,
                "prenom" =>$this->prenom,
                "description" =>$this->description,
                "dateNaissance" => $this->datenaissance,
                "dateMort" => $this->datemort
            );

            // On donne les valeurs et on exécute la requête
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



}
