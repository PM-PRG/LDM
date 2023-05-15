<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Pablo M. VV.">
<style>

div {
border: 4px solid red;
width: 10rem;
margin: 2rem;
padding: 1rem;
display: inline-block;
text-align: center;
font-family: Arial;
}

h2 {
text-align: center;
font-family: Arial;
color: red;
font-size: 3vw;
text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;
margin-left: -11.5rem;
}
</style>
</head>

<body>
<h2>TABLAS MULTIPLICACIÓN PHP</h2>
<?php

for ($x = 1; $x <= 10; $x++) {
echo "<div>"; #comienzo div 
  for ($y = 1; $y <= 10; $y++) {
    echo "Tabla de $x * $y= " . $x * $y;
    echo "<br>";
}
echo "<br>";
echo "</div>"; #fin div
}

?>
<footer style="font-size:0.8vw; font-family: Arial;">Pablo M. V.</footer>
</body>
</html>