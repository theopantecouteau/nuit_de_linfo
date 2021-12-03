<?php
require_once file::build_path(array("config", "conf.php"));

class model
{

    private static $pdo = NULL;

    public static function init()
    {
        try {
            $hostname = conf::gethostname();
            $datebase_name = conf::getDatabase();
            $login = conf::getLogin();
            $password = conf::getPassword();

            self::$pdo = new PDO("mysql:host=$hostname;dbname=$datebase_name", $login, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo "Une erreur est survenue";
            }
            die();
        }
    }

    public static function getPDO()
    {
        if (is_null(self::$pdo)) {
            self::init();
        }
        return self::$pdo;
    }

    public static function selectAll()
    {
        $table_name = static::$table;
        $class_name = 'model' . ucfirst($table_name);
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
        $table_name = static::$object;
        $class_name = 'model' . ucfirst($table_name);
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
        $table_name = static::$object;
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
        $table_name = static::$object;
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

    /*public function save()
    {
        $table_name = static::$object;
        $attributs = static::$data;
        $set = "";
        $tag = "";
        foreach ($attributs as $key => $valeur) {
            if ($key != 'numProduit' || $key != 'idCommande') {
                $set = $set . $key . ",";
                $tag = $tag . ":$key" . ",";
            }
        }
        $set = rtrim($set, ",");
        $tag = rtrim($tag, ",");
        try {
            $sql = "INSERT INTO $table_name (" . $set . ") VALUES
                    (" . $tag . ") ";

            $req_prep = model::getPDO()->prepare($sql);

            // On donne les valeurs et on exécute la requête
            $req_prep->execute($attributs);
        } catch (PDOException $e) {
            if (conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }*/
}
