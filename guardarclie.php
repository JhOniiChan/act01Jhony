 <?php
include_once 'conexion.php';

$sql = "INSERT INTO clientes
    (nombres, apellidos, direccion, genero, telefono, correo, clasificacion)
VALUES ('".$_POST["txtNombres"]."','".$_POST["txtApellidos"]."','".$_POST["txtDireccion"]."','".$_POST["radGenero"]."','".$_POST["txtTelefono"]."','".$_POST["txtCorreo"]."','".$_POST["txtClasificacion"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Se ha guardado nuevo cliente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 
<html>
    <head>
        <title>Agregar Usuario</title>
    </head>
<br><br>
<a href="index.php?pagina=clieA">Agregar nuevo cliente</a>
<br><br>
<a href="index.php?pagina=clie">regresar</a>