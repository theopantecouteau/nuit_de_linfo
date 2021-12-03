<?php

Class modelSearch{

    public function searchSauveteur($lettre){
        try {
            $rep = model::getPDO()->query("SELECT DISTINCT nom FROM Sauveteurs__verifTRUE WHERE nom LIKE '$lettre%' ");
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

    public function searchBateau($lettre){
        try {
            $rep = model::getPDO()->query("SELECT DISTINCT nom  FROM Bateau__VERIF WHERE nom LIKE $lettre%");
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

    public function searchSauve($lettre){
        try {
            $rep = model::getPDO()->query("SELECT DISTINCT nom,  FROM PersonnesSecourus__VERIF WHERE nom LIKE '$lettre%'");
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
}
