<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "File.php";
$filepath = File::build_path(array("view", static::$object, "$view"));

require $filepath;

?>