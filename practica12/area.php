<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ejercicio 3 </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body class="backgroud">
<form id="form1" name="form1" method="post" action="">
    
          <label>Ingrese el valor del radio : </label>
        <input type="text" name="radio" id="radio" />
        <label for="opcion"><br />
          <br />
          opciones :  </label>
        <select name="opcion" id="opcion">
          <option value="1">circulo</option>
          <option value="2">circunferencia</option>
        </select>
      </p>
      <br>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </br>
      <p>
          
        <label for="resultado">
      </p>      
<?php
   if (!empty($_POST["opcion"])) {
	 $radio = $_POST["radio"];
        $Pi = 3.1416;
        $a = $Pi * $radio * $radio;
         $l = 2 * $Pi * $radio;
	 
	 $opc = $_POST["opcion"];
	 if ($opc == 1){
		echo"El area del circulo es:<h2> $a</h2><br/>";
     }else {
	 	echo"La longitud de la circunferencia es:<h2> $l</h2><br/>";	 
	 }
  }
  
?>          
  </body>          
</html>