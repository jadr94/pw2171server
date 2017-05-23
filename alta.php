<?php 
 include("utilerias.php");
  print ("<form action= 'guardaalta.php' method='post'><br>");
  print ("<input type= 'text' placeholder='usuario' name='txtUsuario'>");
  print ("<input type= 'text' placeholder='Nombre' name='txtNombre'>");
  print ("<input type= 'text' placeholder='Clave' name='txtClave'>");
  print ("<input type= 'text' placeholder='Departamento' name='txtDepto'>");
  print ("<input type= 'text' placeholder='Vigencia' name='txtVigencia'>");
  print ("<input type= 'submit' value= 'Guardar'>");
  print("</form>");
?>