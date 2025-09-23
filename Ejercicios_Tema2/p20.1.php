<?php
// Realiza un script php donde muestre un saludo “Buenos días”,… en función de la hora actual.
if (date("H") >= 6 && date("H") < 12){
    echo "Buenos días";
} elseif (date("H") >= 12 && date("H") < 21){
    echo "Buenas tardes";
} elseif (date("H") >= 21 && date("H") < 6){
    echo "Buenas noches";
}