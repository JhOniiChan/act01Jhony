<?php
$nombre = "";
$descripcion= "";
$cantidad = "";
$costocompra = "";
$costoventa= "";

if(@$_GET["numero"]!="")
{
    include_once 'conexion.php';
    $sql = "SELECT * FROM productos WHERE id=".$_GET["numero"];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          $nombre=$row["nombre"];
          $descripcion=$row["descripcion"];
          $cantidad=$row["cantidad"];
          $costocompra=$row["costocompra"];
          $costoventa=$row["costoventa"];
          
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
        <form action="index.php?pagina=pro&actualizarP=si&id=<?php echo $_GET["numero"]; ?>" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" value="<?php echo $nombre; ?>" name="txtNombre"><br>
            <label for="descripcion">Descripcion:</label><br>
            <input type="text" id="descripcion" value="<?php echo $descripcion; ?>" name="txtDescripcion"><br>
            <label for="cantidad">Cantidad:</label><br>
            <input type="text" id="cantidad" value="<?php echo $cantidad; ?>" name="txtCantidad"><br>
            <label for="costocompra">Costo-compra:</label><br>
            <input type="text" id="costocompra" value="<?php echo $costocompra; ?>" name="txtCompra"><br>
            <label for="costoventa">Costo-venta:</label><br>
            <input type="text" id="costocompra" value="<?php echo $costoventa; ?>" name="txtVenta"><br>
            <br>
            <input type="submit" value="Actualizar">
            <br><br>
            <a href="index.php?pagina=pro">Cancelar</a>
        </form> 
    </body>
</html>
