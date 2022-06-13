<?php
$tab;

do {
    $nbr++;

    $rand= random_int(20,100);
    $tab[]=$rand;
} while ($nbr <= 30);
print_r($tab);
asort($tab);
print_r($tab);
arsort($tab);
print_r($tab);

?> 