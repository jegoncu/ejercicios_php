<?php
$numero = $_POST['numero'];
$suma = 0;
if ($numero >= 0) {
  for ($i = 0; $i <= $numero; $i++) {
    $suma += $i;
  }
  echo "la suma total es: " . $suma;
} else {
  echo "introduzca un número mayor que 0";
}
