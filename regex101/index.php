<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<fieldset>
  <legend>
    Regex
  </legend>
  <form action="index.php" method="post">
    <input type="text" id="regex" name="regex" placeholder="regex" required>
    <textarea name="text" id="text" placeholder="text" required></textarea>
    <select name="op" id="op" onchange="toggleDisable()">
      <option value="match" selected>Match</option>
      <option value="matchpos">Match Positions</option>
      <option id="replace" value="replace">Replace</option>
      <option value="validate">Validate</option>
    </select>
    <input type="text" id="torep" placeholder="replace with" name="torep">
    <input type="submit" value="submit" name="submit" id="submit">

  </form>
</fieldset>
<?php
if (isset($_POST["submit"]) && $_POST["submit"] != "") {
  switch ($_POST["op"]) {
    case "match":
      preg_match_all($_POST['regex'], $_POST['text'], $res);
      $fullres = "";
      foreach ($res as $key => $value) {
        $fullres .= implode("", $value);
      }
      break;
    case "matchpos":
      preg_match_all($_POST['regex'], $_POST["text"], $res, PREG_OFFSET_CAPTURE);
      foreach($res[0] as $key => $value){
        $fullres .= $value[1] . ": ";
        $fullres .= $value[0];
        $fullres .= ", ";
      }
      break;
    case "replace":
      $fullres = preg_replace($_POST['regex'], $_POST['torep'], $_POST['text']);
      break;
    case "validate":
      $fullres = preg_match($_POST['regex'], $_POST['text']);
      if($fullres){
        $fullres = "True";
      } else {
        $fullres = "False";
      }
      break;
    default:
      echo ("<h1 id='error'>Error: invalid operation</h1>");
  }
  echo ("<h1 id='success'>Output: " . $fullres . "</h1>");
  // echo("<h1 id='error'>Error: required field not set");
  // exit;
}
// if (!isset($_POST["text"]) || $_POST["text"] == "") {
//   echo("<h1 id='error'>Error: required field not set");
//   exit;
// }
// if (!isset($_POST["op"]) || $_POST["op"] == "") {
//   echo("<h1 id='error'>Error: required field not set");
//   exit;
// }
?>

<script>
  function toggleDisable() {
    let target = document.getElementById("torep")
    let op = document.getElementById("replace")
    if (!op.selected) {
      target.disabled = true;
      if (!target.classList.contains("hidden")) {
        target.classList.add("hidden")
      }
    } else {
      target.disabled = false;
      if (target.classList.contains("hidden")) {
        target.classList.remove("hidden")
      }
    }
  }
  toggleDisable();
</script>
</body>

</html>