<?php

foreach ($tab_v as $mess){
    echo "De la part de : {$mess->getPseudo()}";
    echo "<br>";
    echo $mess->getMessage();
    echo "<br>";
    echo "<br>";
}