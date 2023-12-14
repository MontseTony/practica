<html>
	
<head>
<title> Problema</title>
</head>
<body>
<?php>
echo "La fecha de hoy es:";
$fecha=date("d/m/Y")：
echo $fecha;
echo "<br>";
echo "La hora actual es:";
$hora=date ("H:i:s");
echo $hora;
echo "<br>";
?>
<a href="fecha2.php"›Siguiente problema</a>
</body>
</html>
	
b) fecha2.php
<html>
	
<head>
<title> Problema</title>
</head>
<body>
<?php>
echo "La fecha de hoy es:";
$fecha=date("j/n/y")：
echo $fecha;
echo "<br>";
?>
<a href="fecha3.php"›Siguiente problema<<html>
	
<head>
<title> Problema</title>
</head>
<body>
<?php>
echo "La fecha de hoy es:";
$fecha=date("j/n/y")：
echo $fecha;
echo "<br>";
?>
<a href="fecha3.php"›Siguiente problema</a>
</body>
</html>
b) fecha3.php
<html>
	
<head>
<title> Problema</title>
</head>
<body>
<?php>
$dato=date("L");
if($dato==1)
echo "año bisiesto";
else
echo "año no bisiesto";	
echo "<br>";
echo "Dia de la semana:";	
$dato=date("w");
switch($dato){
	case 0: echo "domingo";break;
	case 1:echo "lunes";break;
	case 2:echo "martes";break;
	case 3:echo "miercoles";break;
	case 4:echo "jueves";break;
	case 5:echo "viernes";break;
	case 6:echo "sabado";break;
}
?>
</body>
</html>/a>
</body>
</html>
