<?php

$monto=$_POST['monto'];

if($monto>100)
{
    $descuento=$monto*0.10;
    $total=$monto-$descuento;
    echo "Se aplico un 10% de descuento.<br>";
    echo "El total a pagar es: $".$total;
}
else
{
    echo "No aplica descuento. El total a pagar es: $".$monto;
}

?>