<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post" id="form">
    <textarea name="text" id="text" placeholder="best chineese food in town"></textarea>
    <input type="submit" value="subimit" id="submit" name="submit">
  </form>
  
<?php

if(isset($_POST["reset"]) && $_POST["reset"] != ""){
  $json = json_encode(array());
  file_put_contents("reviews.json", $json);
}
$json = file_get_contents("reviews.json");
$reviews = json_decode($json, true);

if(isset($_POST['id']) && $_POST["id"] != ""){
  unset($reviews[$_POST["id"]]);
  $json = json_encode($reviews);
  file_put_contents("reviews.json", $json);
}

if(isset($_POST["submit"]) && $_POST["text"] != ""){
  $reviews[uniqid()] = $_POST['text'];
  $json = json_encode($reviews);
  file_put_contents("reviews.json", $json);
}

echo("<div id=\"reviews\">");
echo("<form action=\"\" method=\"post\"><button class=\"reset\" name=\"reset\" value=\"reset\"> Reset</button></form>");
foreach($reviews as $k => $v){
  echo("<div class=\"rev\">");
  echo("<h1 id=\"review\">" . $v . "</h1>");
  echo("<form action=\"\" method=\"post\"><button class=\"delete\" name=\"id\" value=\"" . $k . "\"> Delete </button></form>");
  echo("</div>");
}
echo("</div>");
?>
</body>
</html>