<?php 
 include("utilerias.php");
  $u=GetSQLValueString($_GET["txtUsuario"],"text");
  $conexion=conecta();
  $consulta=sprintf("select * from usuarios where usuario=%s",$u);
  $resultado=mysql_query($consulta);

  if(mysql_num_rows($resultado)>0)){

  if($registro=mysql_fetch_array($resultado)){
	print ("<form action= 'guardacambio.php' method='post'>");
	print ("<input type= 'text' placeholder='usuario' name='txtUsuario' value=".$registro["usuario"]."><br>");
	print ("<input type= 'text' placeholder='nombre' name='txtNombre' value=".$registro["nombre"]."><br>");
	print ("<input type= 'text' placeholder='Clave' name='txtClave'value=".$registro["clave"]."><br>");
	print ("<input type= 'text' placeholder='Departamento' name='txtDepto'value=".$registro["departamento"]."><br>");
	print ("<input type= 'text' placeholder='Vigencia' name='txtVigencia'value=".$registro["vigencia"]."><br>");
	print ("<input type= 'submit' value= 'Guardar'><br>");
	print("</form>");
  }
  }
?>