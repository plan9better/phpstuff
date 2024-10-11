<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <fieldset>
      <legend>String operations</legend>
        <form action="index.php" method="post">
          <input type="text" name="string" id="string" required placeholder="Your string">
          <select name="op" id="op">
            <option value="reverse">Reverse</option>
            <option value="toupper">Convert all to upper case</option>
            <option value="tolower">Convert all to lower case</option>
            <option value="count">Count characters</option>
            <option value="trim">Remove whitespace chars from ends</option>
          </select>
          <br>
          <input type="submit" id="submit" value="submit" value="submit">
        </form>
    </fieldset>
    <?php
    if(!isset($_POST['string']) || $_POST['string'] == ''){
      exit;
    }
    if(!isset($_POST["op"]) || $_POST['op'] == ''){
      echo("<h1 id='error'>Please select an operation to perform </h1>");
      exit;
    }
    $res = htmlspecialchars($_POST["string"], ENT_QUOTES);
    switch($_POST["op"]){
      case "reverse":
        $res = strrev($res);
        break;
      case "toupper":
        $res = strtoupper($res);
        break;
      case "tolower":
        $res = strtolower($res);
        break;
      case "count":
        $res = strlen($res);
        break;
      case "trim":
        $res = trim($res);
        break;
      default:
        $res = "Unknown operation";
      
    }
    $resp = <<<EOQ
    <h1 id='success'> Result: {$res} </h1>
    EOQ;
    echo ($resp);
    ?>
</body>
</html>