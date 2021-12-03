<?php
require_once file::build_path(array('model', 'modelBateau.php'));
class controllerBateau
{
    protected static $object = 'Bateau';
    protected static $data = array();
    public static function readAll(){
        $tab_b = modelBateau::selectAll();
        $view = 'list.php';
        $pagetitle = 'Liste des bateaux';
        require file::build_path(array('view', 'view.php'));
    }
    public static function error(){
        $view = 'error.php';
        $pagetitle = 'Erreur';
        require file::build_path(array('view', 'view.php'));
    }
    public static function read($idBateau){
            $b = modelBateau::select($idBateau);
            $view = 'detail.php';
            $pagetitle = 'Détails du bateau';
            require file::build_path(array('view','view.php'));

    }
    public static function delete($idBateau){
        if(!modelBateau::select($idBateau)){
            $view = 'error.php';
            $pagetitle = 'Erreur';
            require file::build_path(array('view','view.php'));
        }
        else{
            modelBateau::delete($idBateau);
            $tab_b = modelBateau::selectAll();
            $view = 'deleted.php';
            $pagetitle = 'Bateau supprimé';
            require file::build_path(array('view', 'view.php'));
        }
    }
    public static function create(){
        $action = 'index.php?action=created&controller=bateau';
        $rqd = 'required';
        $bId = '';
        $bNom = '';
        $bConstructeur = '';
        $bDateCommande = date(null, null);
        $bDimensions = '';
        $bHistoire = '';
        $bTypebateau = '';
        $bFinService = date(null,null);
        $bNomdonnedate = date(null,null);
        $bNumcoque = '';
        $bPoids = '';
        $bVitesse = '';
        $bMoteurs = '';
        $bTirant = '';
        $bIdMoyen = '';
        $view = 'update.php';
        $pagetitle = 'Création d\'un bateau';
        require file::build_path(array('view','view.php'));
    }
    public static function created(){
        $b1 = new modelBateau($_POST['idBateau'],$_POST['nomBateau'], $_POST['constructeur'],$_POST['datecommande'],$_POST['dimensions'],
        $_POST['histoire'], $_POST['typebateau'], $_POST['finService'], '', '', $_POST['nomdonnedate']
        ,$_POST['numcoque'], $_POST['poids'], $_POST['vitesse'], $_POST['moteurs'], $_POST['tirantdeau'], $_POST['idMoyen']);
        $data = ['id'=>$_POST['idBateau'],'nom'=>$_POST['nomBateau'], 'constructeur' =>$_POST['constructeur'], 'datecommande'=>$_POST['datecommande'],
            'dimensions'=>$_POST['dimensions'], 'histoire'=> $_POST['histoire'], 'typebateau'=>$_POST['typebateau'], 'finService'=>$_POST['finService'],
            'lienimageplan'=> ' ', 'lienimagehistorique'=>'','numcoque'=>$_POST['numcoque'], 'poids'=>$_POST['poids'], 'vitesse'=>$_POST['vitesse'],'moteurs'=> $_POST['moteurs']
            , 'tailletirandeau'=>$_POST['tirantdeau'], 'nomdonnedate'=> $_POST['nomdonnedate'], 'idMoyen'=>$_POST['idMoyen']];
        $b1->save($data);
        $tab_b = modelBateau::selectAll();
        $view = 'created.php';
        $pagetitle = 'Bateau créé';
        require file::build_path(array('view', 'view.php'));
    }
    public static function update($idBateau){
        $b1 = modelBateau::select($idBateau);
        $action = 'index.php?action=updated&controller=bateau';
        $rqd = 'readonly';
        $bId = $b1->get('id');
        $bNom = $b1->get('nomBateau');
        $bConstructeur = $b1->get('constructeur');
        $bDateCommande = $b1->get('datecommande');
        $bDimensions = $b1->get('dimensions');
        $bHistoire = $b1->get('histoire');
        $bTypebateau = $b1->get('typeBateau');
        $bFinService = $b1->get('finService');
        $bNomdonnedate = $b1->get('nomdonnedate');
        $bNumcoque = $b1->get('numCoque');
        $bPoids = $b1->get('poids');
        $bVitesse = $b1->get('vitesse');
        $bMoteurs = $b1->get('moteurs');
        $bTirant = $b1->get('tirantDeau');
        $bIdMoyen = $b1->get('idMoyen');
        //récup des attributs du bateau que l'on veut modifier.
        $view = 'update.php';
        $pagetitle = 'Modification d\'un bateau';
        require file::build_path(array('view', 'view.php'));
    }
    public static function updated(){
        $data = ['id'=>$_POST['idBateau'],'nom'=>$_POST['nomBateau'], 'constructeur' =>$_POST['constructeur'], 'datecommande'=>$_POST['datecommande'],
            'dimensions'=>$_POST['dimensions'], 'histoire'=> $_POST['histoire'], 'typebateau'=>$_POST['typebateau'], 'finService'=>$_POST['finService'],
            'numcoque'=>$_POST['numcoque'], 'poids'=>$_POST['poids'], 'vitesse'=>$_POST['vitesse'],'moteurs'=> $_POST['moteurs']
            , 'tailletirandeau'=>$_POST['tirantdeau'], 'nomdonnedate'=> $_POST['nomdonnedate'], 'idMoyen' => $_POST['idMoyen']];
        modelBateau::update($data);
        $tab_p = ModelBateau::selectAll();
        $view = 'updated.php';
        $pagetitle = 'Bateau mis à jour';
        require file::build_path(array('view', 'view.php'));
    }
}