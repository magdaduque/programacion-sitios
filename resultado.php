<?php 

$num1=$_POST['numero1'];
$num2=$_POST['numero2'];
$operaciones=$_POST['operacion'];

if ($operaciones=="sumar") {
	$suma=$num1+$num2;
	echo "EL resultado de la suma es: ".$suma;
}
elseif ($operaciones=="restar") {
	$resta=$num1-$num2;
	echo "EL resultado de la resta es: ".$resta;
}
elseif ($operaciones=="multiplicar") {
	$multiplica=$num1*$num2;
	echo "EL resultado de la multiplicación es: ".$multiplica;
}
elseif ($operaciones=="dividir") {
	$divide=$num1/$num2;
	echo "EL resultado de la división es: ".$divide;
}
echo "<br >";

/*
*Comparacion de los numeros
*/

$n1=$_POST['numero1'];
$n2=$_POST['numero2'];

if ($n1>$n2){
    echo "El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
}
elseif ($n1==$n2){
    echo "El primer numero (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer numero (".$n1.") es menor que el segundo (".$n2.")";
}

/*
*secuencia de numeros
*/
echo "<br >";

for($i = 1; $i <= 33; $i += 1)
  echo $i . "-\n";  
	echo "<br >";
 ?>