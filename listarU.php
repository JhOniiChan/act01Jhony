<?php
include_once 'conexion.php';

/*--------------*/
if(@$_GET["actualizarU"]=="si")
{
    $sql = "UPDATE usuarios SET nombres='".htmlentities($_POST["txtNombres"])."', apellidos='".$_POST["txtApellidos"]."', correo='".$_POST["txtCorreo"]."', telefono='".$_POST["txtTelefono"]."', vacunado='".$_POST["radVac"]."', genero='".$_POST["radGenero"]."', origen='".$_POST["lstOrigen"]."' WHERE id=".$_GET["id"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué actualizado correctamente<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/
if(@$_GET["eliminar"]=="si")
{
    $sql = "DELETE FROM usuarios WHERE id=".$_GET["ide"];

    if ($conn->query($sql) === TRUE) {
      echo "            El registro fué eliminado<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
/*--------------*/

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'>";
  echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>NOMBRES</td>";
        echo "<td>APELLIDOS</td>";
        echo "<td>CORREO ELECTRÓNICO</td>";
        echo "<td>TELÉFONO</td>";
        echo "<td>VACUNAD@</td>";
        echo "<td>GENERO</td>";
        echo "<td>ORIGEN</td>";
        echo "<td>&nbsp;</td>";
        echo "<td>&nbsp;</td>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombres"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["correo"]."</td>";
        echo "<td>".$row["telefono"]."</td>";
        echo "<td>".$row["vacunado"]."</td>";
        echo "<td>".$row["genero"]."</td>";
        echo "<td>".$row["origen"]."</td>";
        echo "<td><a href=index.php?pagina=usuac&numero=".$row["id"].">editar</a></td>";
        echo "<td><a href=index.php?pagina=usu&eliminar=si&ide=".$row["id"].">eliminar</a></td>";
    echo "</tr>";
      
      }
  echo "</table>";
} else {
  echo "0 registros";
}
$conn->close();
?> 
<br>
<a href="index.php?pagina=usuA">Agregar Usuario</a>
<br><br
    