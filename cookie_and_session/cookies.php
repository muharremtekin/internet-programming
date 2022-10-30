<?php
if (isset($_POST['submit'])) {
  $select = $_POST["select"];
  setcookie("colour", $select);
  header('Location: cookies.php');
}

if (isset($_COOKIE["colour"])) {
  $colourvalue = $_COOKIE["colour"];
} else {
  $colourvalue = "#0000FF";
}
?>
<html>

<head>
<title>cookies</title>
</head>

<body>
  <div class="container">
    <P>Bir Renk Seçin</P>
    <form action="cookies.php" method="post">
      <select name="select">
        <option value="#cbf078">Green</option>
        <option value="#eec60a">Yellow</option>
        <option value="#f83e4b">Red</option>
        <option value="#3ab1c8">Blue</option>
      </select>
      <input type="submit" name="submit" value="Uygula" />
    </form>
    <p> </p>
  </div>
</body>

</html>