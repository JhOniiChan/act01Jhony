 <?php
include_once 'conexion.php';

$sql = "INSERT INTO productos
    (nombre, descripcion, cantidad, costocompra, costoventa, fecha)
VALUES ('".$_POST["txtNombre"]."','".$_POST["txtDescripcion"]."','".$_POST["txtCantidad"]."','".$_POST["txtCompra"]."','".$_POST["txtVenta"]."',now())";

if ($conn->query($sql) === TRUE) {
  echo "Se ha guardado nuevo producto";
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
<a href="index.php?pagina=proA">Agregar nuevo producto</a>
<br><br>
<a href="index.php?pagina=pro">regresar</a>