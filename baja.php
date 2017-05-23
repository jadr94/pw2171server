<?php 
include("utilerias.php");
$conexion= conecta();
  print ("<form action= 'guardaalta.php' method='post'><br>");
  print ("<input type= 'text' placeholder='usuario' name='txtUsuario'>");
   print ("<input type= 'submit' value= 'Guardar'>");
  print("</form>");
 ?>