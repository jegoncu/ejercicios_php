<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
if ($n1 > $n2) {
  if ($n1 > $n3) {
    echo "El número mayor es: " . $n1;
  } else {
    echo "El número mayor es: " . $n3;
  }
} else {
  if ($n2 > $n3) {
    echo "El número mayor es: " . $n2;
  } else {
    echo "El número mayor es: " . $n3;
  }
}
