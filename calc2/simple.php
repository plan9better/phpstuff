<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

if(!is_numeric($num1) || !is_numeric($num2) || ($_POST["op"] == "div" && $_POST["num2"] == 0)) {
  echo "Invalid input";
  exit;
}

switch($_POST["op"]){
  case "add":
    echo($num1 + $num2);
    break;
  case "sub":
    echo($num1 - $num2);
    break;
  case "mul":
    echo($num1 * $num2);
    break;
  case "div":
    echo($num1 / $num2);
    break;
  default:
    echo "Invalid operation";
}