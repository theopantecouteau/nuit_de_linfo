<?php
require_once File::build_path(array("model","model.php"));
class modelSavedForms{
    private $id;
    private $nom;
    private $prenom;
    private $date;
    private $nomSauvetage;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getNomSauvetage()
    {
        return $this->nomSauvetage;
    }

    public function __construct($id = NULL, $nom, $prenom, $date, $nomSauvetage = NULL)
    {
        $this->id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
        $this->nomSauvetage = $nomSauvetage;
    }

    public function saveNew(){
        try{
            $sql = "INSERT INTO PersonnesSecourus__PASVERIF (id, nom, prenom, nomSortie, datesauvetage ) VALUES (NULL, :nam, :firstname, :save, :datte)";
            $req_prep = Model::getPDO()->prepare($sql);
            $values = array(
                "nam" => $this->nom,
                "firstname" => $this->prenom,
                "datte" => $this->date,
                "save" => $this->nomSauvetage,
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
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
            $sql = "INSERT INTO PersonnesSecourus__MODIF (nom, prenom, date, nomSortie, id ) VALUES (NULL, :nam, :firstname, :save, :datte)";
            $req_prep = Model::getPDO()->prepare($sql);
            $values = array(
                "nam" => $this->nom,
                "firstname" => $this->prenom,
                "datte" => $this->date,
                "save" => $this->nomSauvetage,
            );
            $req_prep->execute($values);
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