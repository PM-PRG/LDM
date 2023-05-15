<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Pablo M. VV.">
<title>Escítala</title>
</head>
<body>

<?php
$frase = array (
	array("t", "e", "s", "t", " ", "d"), #6x3
	array("e", " ", "p", "r", "u", "e"),
	array("b", "a", ".", " ", " ", " ")
);

for ($x = 0; $x < count($frase); $x++) {
	for ($y = 0; $y < count($frase[$x]); $y++) {
		echo $frase[$x][$y];
	}
}

echo "<br><br><br>";

for ($cont = 0; $cont < count($frase[0]); $cont++) {
for ($i = 0; $i < count($frase); $i++) {
		echo $frase[$i][$cont];
	    $fraseVuelta[$cont][$i] = $frase[$i][$cont]; 
	}
	}
	echo "<br>";
for ($x = 0; $x < count($fraseVuelta); $x++) {

	for ($y = 0; $y < count($fraseVuelta[$x]); $y++) {

		echo $fraseVuelta[$x][$y];
	}
}
echo "<br>";



?>

</body>
</html>