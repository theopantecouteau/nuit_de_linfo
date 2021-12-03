<?php

class modelSortie
{
    private $id;
    private $nom;
    private $duree;
    private $societe_id;
    private $patron_id;
    private $souspatron_id;
    private $histoires;
    private $sources;
    private $imagelien;
    private $nbpersonnesauve;
    private $nbpersonnesmort;
    private $date;


    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function getSocieteId()
    {
        return $this->societe_id;
    }

    public function getPatronId()
    {
        return $this->patron_id;
    }

    public function getSouspatronId()
    {
        return $this->souspatron_id;
    }

    public function getHistoires()
    {
        return $this->histoires;
    }

    public function getSources()
    {
        return $this->sources;
    }

    public function getImagelien()
    {
        return $this->imagelien;
    }

    public function getNbpersonnesauve()
    {
        return $this->nbpersonnesauve;
    }

    public function getNbpersonnesmort()
    {
        return $this->nbpersonnesmort;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function __construct($id = NULL, $nom = NULL, $duree = NULL, $societe_id = NULL, $patron_id = NULL, $souspatron_id = NULL, $histoires = NULL, $sources = NULL, $imagelien = NULL, $nbpersonnesauve = NULL, $nbpersonnesmort = NULL, $date = NULL)
    {
        if (!is_null($nom) && !is_null($histoires) && !is_null($sources) && !is_null($imagelien) && !is_null($nbpersonnesauve) && !is_null($date)) {
            $this->id = $id;
            $this->nom = $nom;
            $this->duree = $duree;
            $this->societe_id = $societe_id;
            $this->patron_id = $patron_id;
            $this->souspatron_id = $souspatron_id;
            $this->histoires = $histoires;
            $this->sources = $sources;
            $this->imagelien = $imagelien;
            $this->nbpersonnesauve = $nbpersonnesauve;
            $this->nbpersonnesmort = $nbpersonnesmort;
            $this->date = $date;
        }
    }

    public static function getSortiebyID($id){
        try{
            $sql = "SELECT * from Sauvetages WHERE id=:id";
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