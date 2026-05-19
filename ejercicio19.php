<?php

$n1=$_POST['n1'];

echo "Tabla del ".$n1.":<br><br>";

for($i=1; $i<=10; $i++)
{
    $resultado=$n1*$i;
    echo $n1." x ".$i." = ".$resultado."<br>";
}

?>