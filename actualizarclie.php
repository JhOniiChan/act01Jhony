<?php
$nombres = "";
$apellidos = "";
$direccion = "";
$telefono = "";
$correo = "";
$clasificacion = "";
if(@$_GET["numero"]!="")
{
    include_once 'conexion.php';
    $sql = "SELECT * FROM clientes WHERE id=".$_GET["numero"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $nombres=$row["nombres"];
          $apellidos=$row["apellidos"];
          $direccion=$row["direccion"];
          $telefono=$row["telefono"];
          $correo=$row["correo"];
          $clasificacion=$row["clasificacion"];
        }
    } else {
      echo "0 registros";
    }
    $conn->close();
    }
?>
<html>
    <head>
        <title>Edición de cliente</title>
    </head>
    <body>
        <form action="index.php?pagina=clie&actualizarC=si&id=<?php echo $_GET["numero"]; ?>" method="POST">
            <label for="nombre">Nombre(s):</label><br>
            <input type="text" id="nombre" value="<?php echo $nombres; ?>" name="txtNombres"><br>
            <label for="apellido">Apellido(s):</label><br>
            <input type="text" id="apellido" value="<?php echo $apellidos; ?>" name="txtApellidos"><br>
            <label for="direccion">Direccion:</label><br>
            <input type="text" id="direccion" value="<?php echo $direccion; ?>"  name="txtDireccion"><br>
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" value="<?php echo $telefono; ?>"  name="txtTelefono"><br>
            <label for="correo">Correo electrónico:</label><br>
            <input type="text" id="correo" value="<?php echo $correo; ?>"  name="txtCorreo"><br>
            <label for="clasificacion">Clasificacion:</label><br>
            <input type="text" id="correo" value="<?php echo $clasificacion; ?>"  name="txtClasificacion"><br>
            <label for="genero">Género:</label><br>
            <label><input type="radio" value="fe" name="radGenero">Femenino</label>
            <label><input type="radio" value="ma" name="radGenero">Masculino</label><br>
            <br>
            <input type="submit" value="Actualizar">
               <br><br>
             <a href="index.php?pagina=usu">Cancelar</a>
        </form> 
    </body>
</html>
