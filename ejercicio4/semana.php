<?php
$numero = $_GET['numero'];
if ($numero > 0 && $numero < 8) {
  switch ($numero) {
    case 1:
      echo "el día de la semana es lunes";
      break;
    case 2:
      echo "el día de la semana es martes";
      break;
    case 3:
      echo "el día de la semana es miércoles";
      break;
    case 4:
      echo "el día de la semana es jueves";
      break;
    case 5:
      echo "el día de la semana es viernes";
      break;
    case 6:
      echo "el día de la semana es sábado";
      break;
    case 7:
      echo "el día de la semana es domingo";
      break;
  }
} else {
  echo "El número no está entre 1 y 7.";
}
