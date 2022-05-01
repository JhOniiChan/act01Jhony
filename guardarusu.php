 <?php
include_once 'conexion.php';

$sql = "INSERT INTO usuarios
    (nombres, apellidos, correo, telefono, vacunado, genero, origen)
VALUES ('".$_POST["txtNombres"]."','".$_POST["txtApellidos"]."','".$_POST["txtCorreo"]."','".$_POST["txtTelefono"]."','".$_POST["radVac"]."','".$_POST["radGenero"]."','".$_POST["lstOrigen"]."')";

if ($conn->query($sql) === TRUE) {
  echo "Se ha guardado nuevo usuario";
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
<a href="index.php?pagina=usuA">Agregar nuevo usuario</a>
<br><br>
<a href="index.php?pagina=usu">regresar</a>
