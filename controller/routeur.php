<?php
require_once file::build_path(array("config", "conf.php"));
require_once file::build_path(array("controller", "controllerSauveteurs.php"));
require_once file::build_path(array("controller", "controllerSite.php"));
require_once file::build_path(array("controller", "controllerUser.php"));
require_once file::build_path(array("controller", "controllerStations.php"));
require_once file::build_path(array("controller", "controllerBateau.php"));
require_once file::build_path(array("controller", "controllerSaved.php"));
require_once file::build_path(array("controller", "controllerSearch.php"));
require_once file::build_path(array('controller', 'controllerMoyens.php'));
require_once file::build_path(array('controller', 'controllerMessage.php'));


// require de tous les Controllers
$str = "controller";
$controller_class = "";

if (!is_null(Conf::myGet('controller'))) {
    $controller = Conf::myGet('controller');
    $controller_class = $str . ucfirst($controller);

}
else{
    header('Location : index.php?controller=sauveteurs&action=acteurs');
}

$methode = get_class_methods($controller_class);

if (isset($_GET['page'])){
    controllerSite::redirect($_GET['page']);
}
else if (class_exists($controller_class)) {
    if (!is_null(Conf::myGet('action'))) {
        $action = Conf::myGet('action');
        if (!in_array($action, $methode)) {
            $controller_class::error();
        } else if (!is_null(Conf::myGet('id'))) {
            $id = Conf::myGet('id');
            if (!is_null(Conf::myGet('login'))) {
                $login = Conf::myGet('login');
                $controller_class::$action($id, $login);
            } else {
                $controller_class::$action($id);
            }
        } else {
            $controller_class::$action();
        }
    } else {
        require File::build_path(array("view", "view.php"));
    }
}

?>