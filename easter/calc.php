<?php
$date = $_POST["date"];

function calcEaster($x, $y){
  global $date;
  $a = $date % 19;
  $b = $date % 4;
  $c = $date % 7;
  $d = (19 * $a + $x) % 30;
  $e = (2 * $b + 4 * $c + 6 * $d + $y) % 7;
  if($e == 6 && $d = 29){
    echo("26 Kwietnia");
    exit;
  }
  if($e == 6 && $d = 28 && ((11 * $x + 11) % 30) < 19){
    echo("18 Kwietnia");
    exit;
  }
  if(($d + $e) < 10){
    echo((22 + $d + $e) . " Marca");
    exit;
  }
  if(($d + $e) > 9){
    echo(($d + $e - 9) . "Kwietnia");
  }

}

if(!is_numeric($_POST["date"])){
  echo("Invalid input");
  exit;
}

if($date < 1 || $date > 2199){
  echo("Invalid year");
  exit;
}

if($date >= 1 && $date <= 1582){
  calcEaster(15, 6);
}
if($date >= 1583 && $date <= 1699){
  calcEaster(22, 2);
}
if($date >= 1700 && $date <= 1799){
  calcEaster(23, 3);
}
if($date >= 1800 && $date <= 1899){
  calcEaster(23, 4);
}
if($date >= 1900 && $date <= 2099){
  calcEaster(24, 5);
}
if($date >= 2100 && $date <= 2199){
  calcEaster(24, 6);
}