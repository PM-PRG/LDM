
<!DOCTYPE HTML>  
<html>
<head>
  <style>
    .err {
      background-color: #ff8080;
      padding:1rem;
      margin-right: 70%;
    }
    .form {
      background-color: lightgrey;
      padding:0.5rem;
      margin-left: 10%;
      margin-right:30%;

    }
    .success {
      background-color: lightskyblue;
      padding:1rem;
      margin-right: 70%;
    }

  </style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $nif = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  if (!preg_match("/^([a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\\s])+$/",$name)) {
  $nameErr = "Formato de nombre incorrecto o no insertado";
} 
  

  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email incorrecto o no insertado";
    }


  $nif = test_input($_POST["nif"]);
  if (!preg_match("/^[0-9]{8}[T|R|W|A|G|M|Y|F|P|D|X|B|N|J|Z|S|Q|V|H|L|C|K|E]$/", $nif)) {
    $nifErr = "Formato de NIF incorrecto o no insertado";
  }

  $date = test_input($_POST["fecha"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="form">
<h2>Formularios PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  NIF: <input type="text" name="nif">
  <br><br>
  Fecha de Nacimiento: 
  <input type="date" name="fecha">
  <br><br>
  Género:
  <input type="radio" name="gender" value="F" required>F
  <input type="radio" name="gender" value="M">M
  <input type="radio" name="gender" value="Otro">Otro
  <br><br>
  <input type="submit" name="submit" value="Entregar">  
</form>
</div>
<?php
echo "<h2>Tus datos:</h2>";
if (isset($nameErr)) {
  echo '<div class="err">';
  echo $nameErr;
  echo "</div>";
} else {
  echo '<div class="success">';
  echo $name;
  echo "</div>";
}
echo "<br>";
if (isset($emailErr)) {
  echo '<div class="err">';
  echo $emailErr;
  echo "</div>";
} else {
  echo '<div class="success">';
echo $email;
echo "</div>";
}
echo "<br>";

if (isset($nifErr)) {
  echo '<div class="err">';
  echo $nifErr;
  echo "</div>";
} else {
  echo '<div class="success">';
echo $nif;
echo "</div>";
}

echo "<br>";
echo '<div class="success">';
echo $date;
echo "</div>";
echo "<br>";
echo '<div class="success">';
echo $gender;
echo "</div>";
?>

</body>
</html>