<?php
$numero = $_POST['numero'];
if ($numero >= 1 && $numero <= 10) {
  for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . $numero * $i . "<br>";
  }
}