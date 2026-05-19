<?php

$n1=$_POST['n1'];
$suma=0;

for($i=1; $i<=$n1; $i++)
{
    $suma=$suma+$i;
}

echo "La suma de los numeros desde 1 hasta ".$n1." es: ".$suma;

?>