<link rel="stylesheet" href="estilos.css">
<?php

if(isset($_POST['btne'])){
	$link=mysql_connect("localhost","root","")or die("<h2>No se encuentra el servidor</h2>");
	$db=mysql_select_db("bicicleta",$link)or die("<h2>Error de Conexion<h/2>");
	$IdE=$_POST["IdE"];
    $Em=$_POST["EmailE"];
    mysql_query("DELETE FROM pedidos WHERE Id='$IdE'and Correo='$Em'",$link)or die("<h2>error al Eliminar</h2>");
    echo"<div class='alert alert-dismissible alert-success'>
  <strong>Eliminado!</strong> La Eliminacion fue un Exito <a href='index.php?var=9' class='btn btn-primary'>VOLVER</a>
</div>";
}
else {
	$link=mysql_connect("localhost","root","")or die("<h2>No se encuentra el servidor</h2>");
	$db=mysql_select_db("bicicleta",$link)or die("<h2>Error de Conexion<h/2>");
                  $Co=$_POST["eemail"];
                  $Nom=$_POST["nnom"];
                  $Cb=$_POST["Claveb"];
                  $Col=$_POST["Col"];
                  $Ct=$_POST["Ct"];
                  $Carac=$_POST["Caracte"];
                  mysql_query("INSERT INTO pedidos VALUES ('','$Co','$Nom','$Cb','$Col','$Ct','$Carac')",$link)or die("<h2>error de envio</h2>");
                  echo"<div class='alert alert-dismissible alert-success'>
                  <br><strong>PEDIDO CREADO!</strong> El Registro fue un Exito </br>
                  <br><strong>CORREO: </strong>".$Co."</br>
                  <br><strong>NOMBRE: </strong>".$Nom."</br>
                  <br><strong>CLAVE: </strong>".$Cb."</br>
                  <br><strong>COLOR: </strong>".$Col."</br>
                  <br><strong>CLAVE TARGETA: </strong>".$Ct."</br>
                  <br><strong>OTRAS CARACTERISTICAS: </strong>$Carac</br>
                  <a href='index.php?var=6' class='btn btn-primary'>VOLVER</a>";
}              
?>