<?php
$submit = filter_input(INPUT_POST, 'submit');
var_dump($submit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="index.php" method="post">

  <h2> E-mail </h2>

  <label for="email"> E-mail: </label>
  <input type="email" name="email" id="email">

   <h2> Pohlaví </h2>

   <label for="gender-male"> Muž </label>
   <input type="radio" name="gender" value="male" id="gender-male">

   <label for="gender-female"> Žena </label>
   <input type="radio" name="gender" value="female" id="gender-female">

   <label for="gender-none"> Nespecifikováno </label>
   <input type="radio" name="gender" value="none" id="gender-none">

   <input type="submit" name="submit" value="Odeslat">
   <br>

   <?php
if (isset($submit)) {
    echo "<br> Formulář byl odeslán";
} else {
    echo "<br> Stránka byla načtena bez odeslaného formuláře";
}
?>
</body>
</html>