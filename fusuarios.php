<html>
    <head>
        <title>Agregar Usuario</title>
    </head>
    <body>
        <form action="index.php?pagina=usuG" method="POST">
            <label for="nombre">Nombre(s):</label><br>
            <input type="text" id="nombre" name="txtNombres"><br>
            <label for="apellido">Apellido(s):</label><br>
            <input type="text" id="apellido" name="txtApellidos"><br>
            <label for="correo">Correo electrónico:</label><br>
            <input type="text" id="correo" name="txtCorreo"><br>
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" name="txtTelefono"><br>
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
            <input type="submit" value="Guardar">
            <br><br>
            <a href="index.php?pagina=usu">Cancelar</a>
        </form> 
    </body>
</html>