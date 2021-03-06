<?php


class modelMessage{

    private $id;
    private $pseudo;
    private $message;
    private $image;

    // un getter
    public function getId() {
        return $this->id;
    }


    public function getMessage() {
        return $this->message;
    }

    public function getImage() {
        return $this->image;
    }

    // un setter
    public function setId($i) {
        $this->id = $i;
    }


    public function setMessage($m) {
        $this->message = $m;
    }

    public function setImage($im) {
        $this->image = $im;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }



    // un constructeur
    public function __construct($i = NULL,  $p= NULL, $m = NULL, $im = NULL) {
        if(!is_null($m)){
            $this->id = $i;
            $this->pseudo = $p;
            $this->message = $m;
            $this->image = $im;
        }
    }

    public static function getAllMessages(){
        $rep = Model::getPDO()->query("SELECT * FROM __Messages__ ORDER BY id DESC");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'modelMessage');
        return $tab_msg = $rep->fetchAll();
    }

    public static function getMessageById($id) {
        $sql = "SELECT * from __Messages__ WHERE id=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $id,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'modelMessage');
        $tab_msg = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_msg))
            return false;
        return $tab_msg[0];
    }

    public function save(){
        $sql = "INSERT INTO __Messages__ (id, pseudo, message, image) VALUES (:tag1, :tag2, :tag3, :tag4)";
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "tag1" => $this->id,
            "tag2" => $this->pseudo,
            "tag3" => $this->message,
            "tag4" => $this->image
        );
        $req_prep->execute($values);
    }

}
?>

