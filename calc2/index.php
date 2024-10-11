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
      <legend>Prosty</legend>
        <form action="simple.php" method="post">
          <input type="number" name="num1" id="num1">
          <select name="op" id="op">
            <option value="add">Dodawanie</option>
            <option value="sub">Odejmowanie</option>
            <option value="mul">Mnożenie</option>
            <option value="div">Dzielenie</option>
          </select>
          <input type="number" name="num2" id="num2">
          <br>
          <input type="submit" value="Oblicz">
        </form>
    </fieldset>
  
    <fieldset>
      <legend>Zaawansowany</legend>
        <form action="advanced.php" method="post">
          <input type="text" name="num" id="num">
          <select name="op" id="op">
            <option value="sin">Sinus</option>
            <option value="cos">Cos</option>
            <option value="tan">Tan</option>
            <option value="b2d">Bin to dec</option>
            <option value="d2b">Dec to bin</option>
            <option value="h2d">Hex to dec</option>
            <option value="d2h">Dec to hex</option>
          </select>
          <br>
          <input type="submit" value="Oblicz">
        </form>
    </fieldset>
</body>
</html>