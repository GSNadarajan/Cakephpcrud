<?php

$names = array("Natraj", "Raja", "Charlie", "Kumar", "Nagaraj","Navin");

foreach ($names as $value) {              //using foreach loop we can print all the names inside the array one by one
    if (substr($value, 0, 1) === "N") {   //substr takes the value which is equal to 'N'
        echo $value."</br>";
    } 
}
