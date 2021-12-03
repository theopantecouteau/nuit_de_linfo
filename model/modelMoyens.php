<?php
require_once file::build_path(array('model', 'model.php'));
class modelMoyens extends model
{
private $id;
private $histoire;
    protected static $object = 'MoyenMaritimes';
    protected static $primary = 'id';


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

    public function __construct($id = NULL, $histoire = NULL){
        if(!is_null($id) && !is_null($histoire)){
            $this->id = $id;
            $this->histoire = $histoire;
        }
    }
    public static function select($primary_value)
    {
        $table_name = 'MoyenMaritimes';
        $class_name = 'modelMoyens';
        $primary_key = 'id';
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
}