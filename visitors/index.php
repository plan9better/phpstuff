<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <h1>Number of visits</h1>
  <?php
    if($_POST['submit'] != ''){
      file_put_contents("counter.txt", "0");
    }
    $fd = fopen("./counter.txt", "r");
    if($fd == false){
      echo "Error";
      exit();
    }
    $n = fgets($fd);
    fclose($fd);

    $num = 0 + $n;
    $num += 1;
    file_put_contents("counter.txt", $num);
    echo("<h1 id=\"out\">" . $num . "</h1>"); 
  ?>
  <form action="index.php" method="post">
    <button type="submit" id="submit" value="reset" name="submit">
      Reset
    </button>
  </form>
  
</body>
</html>