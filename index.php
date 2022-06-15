<?php
/*
if(isset($_POST['marine'])){
    $maVariable=  $_POST['marine'];
    echo $maVariable.". Au revoir !";
}else{
    echo 'il n\existe pas de case dans le tableau post qui s\'appelle Marine';
}
*/


echo 'autre exercice';

// creer une boucle for
for ($i=0; $i<=5; $i++){
    echo 'test ma boucle : ' . $i;
    echo '</br>';

}

const marine="bonjour marine";
echo marine;

$variable="variable php";
echo $variable;

// $variable="je vais reussir";
echo $variable;

 $bonjour="je creer une constante";
$marine2="je creer une variable en php";

 $bonjour2= $bonjour . $marine2;
echo $bonjour2;
echo '</br>';
echo '</br>';

if ($bonjour=='je creer une constante'){

    echo 'la  condition est vérifiée';

}else{
    echo'la condition n\'est pas vérifiée';

}


// creer boucle for

for ($ships=0; $ships <=10; $ships++){
    echo 'chips au barbecue';
    echo'</br>';
}

$monTableau=  array();
$autreVariable="chien";
$monTableau= ['chips1', $autreVariable, 'chips3'];

foreach ($monTableau as $maChips){
    echo $maChips;
    echo'</br>';
}

for($i=0; $i<count($monTableau); $i++){
    echo $monTableau[$i];
    echo '</br>';
}

echo count($monTableau);

const pratique= "je vais y arriver";

$variable1="hello marine";
$variable2="calandri";

$var= $variable1 . $variable2;
echo $var;

if (marine == 'je vais reussir'){
    echo 'je vais trouver du boulot';

}else{

    echo ' je reste au chomage';
}