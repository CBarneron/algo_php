<?php

$tab=[];
$somme;
do {
     $saisi=readline("Saisir un charactere numerique ou q:");
     if (is_numeric($saisi)) {
        $tab[]=$saisi;
       $somme= array_sum($tab); 
    }

} while ($saisi!="q");
echo count($tab );

echo "\n$somme \n";
print_r($tab);
asort($tab);
print_r($tab);


?>