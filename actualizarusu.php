<?php
$nombres = "";
$apellidos = "";
$correo = "";
$telefono = "";
if(@$_GET["numero"]!="")
{
    include_once 'conexion.php';
    $sql = "SELECT * FROM usuarios WHERE id=".$_GET["numero"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $nombres=$row["nombres"];
          $apellidos=$row["apellidos"];
          $correo=$row["correo"];
          $telefono=$row["telefono"];
        }
    } else {
      echo "0 registros";
    }
    $conn->close();
    }
?>
<html>
    <head>
        <title>Edición de usuario</title>
    </head>
    <body>
        <form action="index.php?pagina=usu&actualizarU=si&id=<?php echo $_GET["numero"]; ?>" method="POST">
            <label for="nombre">Nombre(s):</label><br>
            <input type="text" id="nombre" value="<?php echo $nombres; ?>" name="txtNombres"><br>
            <label for="apellido">Apellido(s):</label><br>
            <input type="text" id="apellido" value="<?php echo $apellidos; ?>" name="txtApellidos"><br>
            <label for="correo">Correo electrónico:</label><br>
            <input type="text" id="correo" value="<?php echo $correo; ?>" name="txtCorreo"><br>
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" value="<?php echo $telefono; ?>" name="txtTelefono"><br>
           <label for="genero">vacunado:</label><br>
            <label><input type="radio" value="Si" name="radVac">Si</label>
            <label><input type="radio" value="No" name="radVac">No</label><br>
            <label for="genero">Género:</label><br>
            <label><input type="radio" value="fem" name="radGenero">Femenino</label>
            <label><input type="radio" value="mas" name="radGenero">Masculino</label><br>
            <label for="origen">Lugar de origen:</label>
            <select name="lstOrigen">
                <option value="yuc">Yucatán</option>
                <option value="qro">Quintana Roo</option>
                <option value="cam">Campeche</option>
            </select>
            <br><br>
            <input type="submit" value="Actualizar">
            <br><br>
            <a href="index.php?pagina=usu">Cancelar</a>
        </form> 
    </body>
</html>
