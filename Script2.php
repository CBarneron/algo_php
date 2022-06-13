<?php
$Salaire;
do {
    $Salaire=readline("tape ton salaire:");
    $Salaire=intval($Salaire);
    $rand=random_int(20,300);
   
} while( $Salaire >=3000|| $Salaire <= 1500);
$jour=1;
while ($Salaire >= 0 && $jour <= 30)
    {
        $jour ++;
    $Salaire= $Salaire - $rand;
  echo("Jour n° $jour, il me reste $Salaire €\n");
   
//   while($Salaire > 0)
//   {
//     echo "j'ai economisé $Salaire€";
//    }

//    while ($Salaire ==0 ){
//     echo"j'ai 0€ le $jour";
//    }
    }
if ($Salaire>0){
    echo("Tu as economiser $Salaire");

} 
else {
    echo("Tu as 0€ le $jour");
}




