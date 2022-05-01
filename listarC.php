<?php
include_once 'conexion.php';

/*--------------*/
if(@$_GET["actualizarC"]=="si")
{
    $sql = "UPDATE clientes SET nombres='".htmlentities($_POST["txtNombres"])."', apellidos='".$_POST["txtApellidos"]."', direccion='".$_POST["txtDireccion"]."', correo='".$_POST["txtCorreo"]."', telefono='".$_POST["txtTelefono"]."', genero='".$_POST["radGenero"]."' WHERE id=".$_GET["id"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué actualizado correctamente<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/
if(@$_GET["eliminar"]=="si")
{
    $sql = "DELETE FROM clientes WHERE id=".$_GET["ide"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué eliminado<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>NOMBRES</td>";
        echo "<td>APELLIDOS</td>";
        echo "<td>DIRECCION</td>";
        echo "<td>GENERO</td>";
        echo "<td>TELEFONO</td>";
        echo "<td>CORREO</td>";
        echo "<td>CLASIFICACION</td>";
        echo "<td>&nbsp;</td>";
        echo "<td>&nbsp;</td>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombres"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["direccion"]."</td>";
        echo "<td>".$row["genero"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "<td>".$row["correo"]."</td>";
        echo "<td>".$row["clasificacion"]."</td>";
        echo "<td><a href=index.php?pagina=clieac&numero=".$row["id"].">editar</a></td>";
        echo "<td><a href=index.php?pagina=clie&eliminar=si&ide=".$row["id"].">eliminar</a></td>";
    echo "</tr>";
      
      }
  echo "</table>";
} else {
  echo "0 registros";
}
$conn->close();
?> 
<br>
<a href="index.php?pagina=clieA">Agregar cliente</a>
<br><br
    