<?php
require_once File::build_path(array("model","model.php"));
class modelSaved{
    private $id;
    private $nom;
    private $prenom;
    private $date;
    private $idSauvetage;
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

    public function getIdSauvetage()
    {
        return $this->idSauvetage;
    }

    public function getNomSauvetage()
    {
        return $this->nomSauvetage;
    }

    public function __construct($id, $nom, $prenom, $date, $idSauvetage = NULL, $nomSauvetage = NULL)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
        if ($nomSauvetage == NULL){
            $this->idSauvetage = $idSauvetage;
        } else {
            $this->nomSauvetage = $nomSauvetage;
        }
    }

    public static function getAllbyLetter($lettre)
    {
        try {
            $rep = model::getPDO()->query("SELECT DISTINCT * FROM PersonnesSecourus__VERIF WHERE nom LIKE '%$lettre%'");
            $rep->setFetchMode(PDO::FETCH_CLASS, 'modelSaved');
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

    public static function getSaved($id){
        try{
            $sql = "SELECT * from PersonneSecourus__VERIF WHERE id=:id";
            $req_prep = Model::getPDO()->prepare($sql);
            $values = array(
                "id" => $id,
            );
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelSaved');
            $tab_user = $req_prep->fetchAll();
            if (empty($tab_user))
                return false;
            return $tab_user[0];
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> Retour a la page d\'accueil </a>';
            }
            die();
        }
    }
}