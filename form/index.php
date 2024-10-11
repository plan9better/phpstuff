<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
    if (isset($_POST["submit"])){
      if (!isset($_POST["name"]) || $_POST["name"] == "") {
        echo("<h1 id='error'> Please set" . " name " . "field and try again</h1>");
        exit;
      }
      if (!isset($_POST["email"]) || $_POST["email"] == "") {
        echo("<h1 id='error'> Please set" . " email " . "field and try again</h1>");
        exit;
      } else {
        // regex check [any number of non-whitespace characters]@[any number of non-whitespace characters]
        if(!preg_match("/\S+@\S+/", $_POST["email"])){
          echo("<h1 id='error'> Invalid " . " email " . "field, please try again</h1>");
          exit;
        }
      }
      if (!isset($_POST["phone"]) || $_POST["phone"] == "") {
        echo("<h1 id='error'> Please set" . " phone " . "field and try again </h1>");
        exit;
      } else {
        // regex check 
        if(!preg_match("/[0-9]{6,9}/", $_POST["phone"])){
          echo("<h1 id='error'> Invalid " . " phone number " . "field, please make sure you only use numbers, (eg. 123123123) and try again</h1>");
          exit;
        }
      }
      if (!isset($_POST["subject"]) || $_POST["subject"] == "") {
        echo("<h1 id='error'> Please set" . " subject " . "field and try again</h1>");
        exit;
      }
      if (!isset($_POST["message"]) || $_POST["message"] == "") {
        echo("<h1 id='error'> Please set" . " message " . "field and try again</h1>");
        exit;
      }

      $checkbox = array();
      $checkbox[] = $_POST['checkopt1'];
      $checkbox[] = $_POST['checkopt2'];
      $checkbox = implode(',', $checkbox);
      if ($checkbox == ","){
        $checkbox = "no options selected";
      }

      $radio = "";
      if(!isset($_POST['radio']) || $_POST['radio'] == ""){
        $radio = "no option selected";
      } else {
        $radio = $_POST['radio'];
      }

      $result = <<<EOD
      <h1 id='success'>
        Your form data is as follows:<br>
          name: {$_POST['name']}<br>
          email: {$_POST['email']}<br>
          phone number: {$_POST['phone']}<br>
          subject: {$_POST['subject']}<br>
          message: {$_POST['message']}<br>
          checkbox options: {$checkbox}<br>
          radio option: {$radio}<br>
      </h1>
      </body>
      </html>
      EOD;

      echo($result);

      exit;
    }
  ?>
  <fieldset id="main">
    <legend>
      Formularz
    </legend>
    <form action="index.php" method="post">
        <input type="text" required id="name" name="name" placeholder="Your full name">
        <input type="email" required id="email" name="email" placeholder="Your email">
        <input type="tel" required id="phone" name="phone" placeholder="Your phone number">
        <select name="subject" id="subject" required>
          <option value="placeholder" disabled selected hidden>Choose a subject</option>
          <option value="subject1">Subject 1</option>
          <option value="subject2">Subject 2</option>
        </select>
        <input type="text" required id="message" name="message" placeholder="Your message">
        <fieldset id="options">
          <legend>
            Choose options
          </legend>
          <label for="checkopt1">Option 1</label>
          <input type="checkbox" name="checkopt1" id="checkopt1" value="option 1">
          <label for="checkopt2">Option 2</label>
          <input type="checkbox" name="checkopt2" id="checkopt2" value="option 2">
        </fieldset>
        <fieldset id="radios">
          <legend>
            Choose an option
          </legend>
          <label for="radioopt1">Option 1</label>
          <input type="radio" name="radio" id="radioopt1" value="option 1">
          <label for="radioopt2">Option 2</label>
          <input type="radio" name="radio" id="radioopt2" value="option 2">
        </fieldset>
      <input type="submit" name="submit" value="submit" id="submit">
    </form>
  </fieldset>
</body>
</html>