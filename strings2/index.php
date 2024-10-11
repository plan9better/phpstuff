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
            <option value="unique">Extract unique words and how often they occur</option>
            <option value="alphasc">Sort words alphabetically (ascending)</option>
            <option value="alphdesc">Sort words alphabetically (descending)</option>
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
    $words = array();
    $res = explode(" ", $res);

    switch($_POST["op"]){
      case "unique":
        foreach($res as $x){
          $words[$x] += 1;
        }
        $resp = <<<EOD
        <div id='success'>
        <table>
          <thead>
            <tr>
              <td>Word</td>
              <td>Frequency</td>
            </tr>
          </thead>
          <tbody>
        EOD;
        echo $resp;
        foreach($words as $x => $y){
          echo("<tr><td>{$x}</td><td>{$y}</td></tr>");
        }
        echo("</tbody></table></div>");
        break;

      case "alphasc":
        sort($res);
        $res = implode(" ", $res);
        echo("<h1 id='success'>" . $res . "</h1>");
      case "alphdesc":
        rsort($res);
        $res = implode(" ", $res);
        echo("<h1 id='success'>" . $res . "</h1>");


      default:
        $res = "Unknown operation";
      
    }
    ?>
</body>
</html>