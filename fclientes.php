<html>
    <head>
        <title>Agregar Clientes</title>
    </head>
    <body>
        <form action="index.php?pagina=clieG" method="POST">
            <label for="nombres">Nombre(s):</label><br>
            <input type="text" id="nombre" name="txtNombres"><br>
            <label for="apellidos">Apellido(s):</label><br>
            <input type="text" id="apellido" name="txtApellidos"><br>
            <label for="direccion">Direccion:</label><br>
            <input type="text" id="direccion" name="txtDireccion"><br>
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" name="txtTelefono"><br>
            <label for="correo">Correo electrónico:</label><br>
            <input type="text" id="correo" name="txtCorreo"><br>
            <label for="clasificacion">Clasificacion:</label><br>
            <input type="text" id="correo" name="txtClasificacion"><br>
            <label for="genero">Género:</label><br>
            <label><input type="radio" value="fe" name="radGenero">Femenino</label>
            <label><input type="radio" value="ma" name="radGenero">Masculino</label><br>
            <br>
            <input type="submit" value="Guardar">
            <br><br>
            <a href="index.php?pagina=clie">Cancelar</a>
        </form> 
    </body>
</html>