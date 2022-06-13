<?php
$tab;
$index;
$valeur;
do {
    $nbr++;
    $rand= random_int(20,100);
    $tab[]=$rand;
} while ($nbr < 30);
print_r($tab);
for( $i=0;$i<30 ;$i+=2){
    unset($tab[$i]);
}
print_r($tab);

for ($i=0;$i<3;$i++){
    $index=readline("tape l'index a \n");      
    $valeur=readline("taper la valeur\n");
    $tab[$index]=$valeur;
}
print_r($tab);
    
 
foreach ($tab as $index => $valeur) {
    if (is_string($valeur)){
    echo("La valeur de l'index $index est $valeur \n");
    }
}