<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <h1>Enter file name</h1>
  <form action="index.php" method="post">
    <input type="text" id="text" name="text" required placeholder="try shakespeare.txt">
    <input type="submit" id="submit" value="submit">
  </form>
  <?php
  if (!isset($_POST["text"]) || $_POST["text"] == "") {
    echo ("</body></html>");
    exit();
  }
  $files = scandir(".");
  $res = "<h1 id=\"error\"> File not found </h1>";
  foreach ($files as $key => $value) {
    if ($value == $_POST['text']) {
      $fs = filesize($_POST['text']);
      $res = "<h1> B: " . $fs . "</h1>";
      $fskb = $fs / 1000;
      $res .= "<h1> KB: " . $fskb . "</h1>";
      $fsmb = $fskb / 1000;
      $res .= "<h1> MB: " . $fsmb . "</h1>";
      $res .= "<h1> GB: " . $fsmb / 1000 . "</h1>";
    }
  }
  echo $res;
  ?>
</body>

</html>