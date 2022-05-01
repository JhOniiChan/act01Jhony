<?php
include_once 'conexion.php';

/*--------------*/
if(@$_GET["actualizarP"]=="si")
{
    $sql = "UPDATE productos SET nombre='".htmlentities($_POST["txtNombre"])."', descripcion='".$_POST["txtDescripcion"]."', cantidad='".$_POST["txtCantidad"]."', costocompra='".$_POST["txtCompra"]."', costoventa='".$_POST["txtVenta"]."' WHERE id=".$_GET["id"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué actualizado correctamente<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/
if(@$_GET["eliminar"]=="si")
{
    $sql = "DELETE FROM productos WHERE id=".$_GET["ide"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué eliminado<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>NOMBRE</td>";
        echo "<td>DESCRIPCION</td>";
        echo "<td>CANTIDAD</td>";
        echo "<td>CONSTOCOMPRA</td>";
        echo "<td>COSTOVENTA</td>";
        echo "<td>FECHA</td>";
        echo "<td>&nbsp;</td>";
        echo "<td>&nbsp;</td>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["descripcion"]."</td>";
        echo "<td>".$row["cantidad"]."</td>";
        echo "<td>".$row["costocompra"]."</td>";
        echo "<td>".$row["costoventa"]."</td>";
        echo "<td>".$row["fecha"]."</td>";
        echo "<td><a href=index.php?pagina=proac&numero=".$row["id"].">editar</a></td>";
        echo "<td><a href=index.php?pagina=pro&eliminar=si&ide=".$row["id"].">eliminar</a></td>";
    echo "</tr>";
      
      }
  echo "</table>";
} else {
  echo "0 registros";
}
$conn->close();
?> 
<br>
<a href="index.php?pagina=proA">Agregar producto</a>
<br><br
    