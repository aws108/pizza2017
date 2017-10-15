<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crea tu pizza</title>
	<style>
	.center{margin-left: 10%;}
	.barba{margin-left: 10%;}
	</style>
</head>
<body>
<!-- Se genera el formulario -->
<div style="margin: 30px 10%;">

<h2>Elige los ingredientes para tu Barbacoa</h2>
<div class="barba">
	<img src="https://images.telepizza.com/vol/es/images/content/productos/pbbq_c.png">
</div>
<form action="pizza1.php" method="post" id="myform" name="myform">
<p>Elija uno o más ingredientes para su pizza. Cada ingrediente vale 0,5:</p>

	<input type="checkbox" name="carne" value="Carne" /> Carne picada
	<input type="checkbox" name="bacon" value="Bacon" /> Bacon
	<input type="checkbox" name="cebolla" value="Cebolla" /> Cebolla
	<input type="checkbox" name="oregano" value="Oregano" /> Orégano
    <input type="checkbox" name="queso" value="Queso" /> Extra de queso
	<br> 
	<br> 
	<!--<button id="mysubmit" type="submit">Enviar Datos</button><br /><br />-->
	<input type="submit" value="Enviar datos!" > 
</form>
</div>

<?php
$total = 5.0;

echo "<br>";

if (isset($_POST['carne'])) {
     $total = $total + 0.5;
	}
	if (isset($_POST['bacon'])) {
     $total = $total + 0.5;
	}
	if (isset($_POST['cebolla'])) {
     $total = $total + 0.5;
	}
	if (isset($_POST['oregano'])) {
      $total = $total + 0.5;
	}
	if (isset($_POST['queso'])) {
      $total = $total + 0.5;
	}
echo "<br>";
echo "<div class='center'>";
echo "\nSu precio asciende a: ", $total;
echo "</div>";


?>
</body>
</html>