<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "file.php";
require_once file::build_path(array("controller", "routeur.php"));
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (10*60))) {
    session_unset();
    session_destroy();
} else {
    $_SESSION['LAST_ACTIVITY'] = time();
}
?>