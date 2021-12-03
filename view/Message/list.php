<?php

foreach ($tab_v as $mess){
    echo "de la part de : {$mess->getPseudo()}";
    echo "<br>";
    echo $mess->getMessage();
    echo "<br>";
}