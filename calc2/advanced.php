<?php

$num = $_POST["num"];
// if(!is_numeric($num)){
//   echo("Invalid input");
//   exit;
// }
switch($_POST["op"]){
  case "cos":
    echo cos(deg2rad($num));
    break;
  case "sin":
    echo sin(deg2rad($num));
    break;
  case "tan":
    echo tan(deg2rad($num));
    break;
  case "b2d":
    echo bindec($num);
    break;
  case "d2b":
    echo decbin($num);
    break;
  case "h2d":
    echo hexdec($num);
    break;
  case "d2h":
    echo dechex($num);
    break;
  default:
    echo "Invalid operation";
}