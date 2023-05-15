<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Pablo M. VV.">
<title>Palíndromas</title>
</head>
<body>
    <div style="padding: 1rem; background-color: lightgray; margin-right:30rem">
    <h1>Comprobador frases palíndromas.</h1> <br>
    <form method="get">
Introduzca la frase : <input type="text" name="frase"><br>
<input type="submit">
</form>

<?php
$palabra = "";
if (isset($_GET['frase']) && (!empty($_GET['frase']))) {
    $palabra = $_GET['frase'];
    palindromo($palabra);
  }

function palindromo($palabra) {
    echo "<br> FRASE: " . $palabra . "<br><br>";
    $minusculas = explode(" ", strtolower($palabra)); //Convertimos la cadena a minusculas
    $nuevo="";
    foreach($minusculas as $m)
    {
        trim($m); //Eliminamos los espacios en blanco
        $nuevo .= $m; 
    }
    if($nuevo == strrev($nuevo))
    {
        echo "Es palíndromo";
    }
    else {
        echo "No es palíndromo";
    }
}


?>
</div>
</body>
</html>