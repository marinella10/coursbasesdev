<?php

if(isset($_POST['premierChiffre']) && isset($_POST['chiffreDeux'])){
    $var=multiplication($_POST['premierChiffre'],$_POST['chiffreDeux'] );
    echo $var;
}



function exercice( $essaie, $devoir){
    $variable= $essaie . $devoir;
    return $variable;

}




function multiplication ( $chiffre1, $chiffre2){
    $var= $chiffre1 * $chiffre2;
    return $var;
}

 function soustraction ( $chiffre1 , $chiffre2){
    $variable=$chiffre1 - $chiffre2;
    return $variable;

 }

