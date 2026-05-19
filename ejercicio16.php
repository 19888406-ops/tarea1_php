<?php

$nombre=$_POST['nombre'];
$horas=$_POST['horas'];
$pago=$_POST['pago'];

$salario=$horas*$pago;

echo "Empleado: ".$nombre."<br>";
echo "El salario total es: $".$salario;

?>