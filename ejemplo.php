<?php
/**
 * se genera la referencia a la clase
 * */
require_once("class/Sbif.php");
/**
 * se genera la instancia a la clase
 * Se le debe pasar el parámetro que corresponde a la clave que se obtiene desde http://api.sbif.cl/uso-de-api-key.html, al solicitarla les llegará un mail
 * He usado una de ejemplo que he solicitado ahora para probar, la he puesto en la variable $key que está más abajo en la línea 11
 * */
 $key="a127d84de78836a568f4b210d568e241ab352968";
 $Sbif=new Sbif($key);
 $dolar=$Sbif->obtiene();
 /**
  * imprimo el valor, lo puse en una variable llamada dolar para que sea más fácil su comprensión. Con esta variable podrán realizar todas sus funcionalidades
  * he omitido los tildes en los títulos para que se vean bien, ya que no quise agregar más código que entorpezca el ententimiento de esta clase.
  * */
 echo "el valor del dolar del dia ".date("d-m-Y")." :<br>"; //he puesto esta línea sólo para adornar
 
 echo $dolar;
 echo "<hr />";//he puesto esta línea sólo para adornar
  /**
  * para cambiar pesos a dólares usen la siguiente función, sólo deben pasarle el número de dólares y él les devolverá la cantidad en pesos chilenos
  * en este ejemplo, le he pasado la cantidad de 100 dólares
  * */
 echo "La conversion de 100 dolares a pesos chilenos es :<br>"; //he puesto esta línea sólo para adornar
 echo $Sbif->calcular(100);
?>
