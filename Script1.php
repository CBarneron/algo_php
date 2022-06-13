<?php
$mot = readline("Le mot:");
$max = strlen($mot);
echo $mot;
echo $max;
 for ($i=0 ;$i < $max; $i++)
 {
     echo " La lettre n°$i vaut:".$mot[$i];

}
?>