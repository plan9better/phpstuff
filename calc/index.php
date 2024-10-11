<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<form action="sum.php" method="POST" id="calculator">
		<fieldset>
			<legend>Calculator</legend>
			<label for="num1">Set 1: </label>
			<input type="text" id="num1" name="num1">
			<br>

			<label for="num2">Set 2: </label>
			<input type="text" id="num2" name="num2">
			<br>

			<label for="operation">Operation: </label>
			<select name="operation" id="operation">
				<option value="union">SUM</option>
				<option value="except">EXCEPT</option>
				<option value="intersect">INTERSECT</option>
			</select>
			<br>

			<input type="submit" value="submit" id="submit">
		</fieldset>
	</form>
</body>
</html>
<?php
?>
