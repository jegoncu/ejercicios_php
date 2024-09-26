<?php
$edad = $_POST['edad'];
if ($edad >= 0) {
  if ($edad < 12) {
    echo "Infante";
  } elseif ($edad >= 12 && $edad < 17) {
    echo "Adolescente";
  } elseif ($edad >= 18 && $edad < 60) {
    echo "adulto";
  } elseif ($edad >= 60) {
    echo "anciano";
  }
} else {
  echo "no se pueden tener menos de 0 años";
}
