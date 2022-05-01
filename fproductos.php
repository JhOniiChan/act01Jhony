<html>
    <head>
        <title>Agregar Producto</title>
    </head>
    <body>
        <form action="index.php?pagina=proG" method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="txtNombre"><br>
            <label for="descripcion">Descripcion:</label><br>
            <input type="text" id="descripcion" name="txtDescripcion"><br>
            <label for="cantidad">Cantidad:</label><br>
            <input type="text" id="cantidad" name="txtCantidad"><br>
            <label for="costocompra">Costo-compra:</label><br>
            <input type="text" id="costocompra" name="txtCompra"><br>
            <label for="costoventa">Costo-venta:</label><br>
            <input type="text" id="costocompra" name="txtVenta"><br>
             <br>
            <input type="submit" value="Guardar">
             <br><br>
             <a href="index.php?pagina=pro">Cancelar</a>
        </form> 
    </body>
</html>
