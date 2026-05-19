<?php

$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

$promedio=($n1+$n2+$n3)/3;

echo "El promedio es: ".$promedio."<br>";

if($promedio>=6)
{
    echo "El estudiante esta: aprobado";
}
else
{
    echo "El estudiante esta: reprobado";
}

?>