<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "file.php";
require_once file::build_path(array("controller", "routeur.php"));
session_start();
$_SESSION['colormode']="dark";
?>