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
    <legend>
      Kalkulator wielkanocy
    </legend>
    <h1>Zadanie 9</h1>
    <p>Aby obliczyć date wielkanocy dla podanego roku, wprowadź rok poniżej</p>
    <form action="calc.php" method="post">
      <span id="input">
        <label for="date">Wprowadź rok: </label>
        <input type="number" required id="date" name="date">
      </span>
      <input type="submit" value="Oblicz" id="submit">
    </form>
  </fieldset>
</body>
</html>