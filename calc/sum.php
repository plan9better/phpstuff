<?php

$nums1 = explode(",", $_POST["num1"]);
$nums2 = explode(",", $_POST["num2"]);

foreach ($nums1 as $k => $v) {
  if (!is_numeric($v)) {
    echo ($v . " is not a number");
    exit();
  }
}
foreach ($nums2 as $k => $v) {
  if (!is_numeric($v)) {
    echo ($v . " is not a number");
    exit();
  }
}

$op = $_POST["operation"];
$result = array();

switch ($op) {
  case "union":
    $result = array_unique(array_merge($nums1, $nums2));
  case "intersect":
    foreach ($nums1 as $k => $v) {
      if(in_array($v, $nums2)){
        $result[] = $v;
      }
    }
  case "except":
    foreach ($nums1 as $k => $v) {
      if(!in_array($v, $nums2)){
        $result[] = $v;
      }
    }
}

echo(implode(",", $result));