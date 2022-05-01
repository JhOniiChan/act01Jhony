<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td><img src="402.jpg"></td>
            </tr>
            <tr>
                <td>
                    <table border="1">
                        <tr>
                            <td><a href="index.php?">Inicio</a></td>
                            <td><a href="index.php?pagina=usu">Usuarios</a></td>
                            <td><a href="index.php?pagina=pro">Productos</a></td>
                            <td><a href="index.php?pagina=clie">Clientes</a></td>
                            <td>Cerrar sesión</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    switch (@$_GET["pagina"])
                    {
                        case "usu": include "listarU.php";break;
                        case "usuA": include "fusuarios.php";break;
                        case "usuG": include "guardarusu.php";break;
                        case "usuac": include "actualizarusu.php";break;
                        /*------------------------------------------------------*/
                        case "pro": include "listarP.php";break;
                        case "proA": include "fproductos.php";break;
                        case "proG": include "guardarpro.php";break;
                        case "proac": include "actualizarpro.php";break;
                        /*------------------------------------------------------*/
                        case "clie": include "listarC.php";break;
                        case "clieA": include "fclientes.php";break;
                        case "clieG": include "guardarclie.php";break;
                        case "clieac": include "actualizarclie.php";break;
                        default: include "hola.php";break;
                    }
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>Algunos derechos reservados 2022 | servidor1/act01</td>
            </tr>
        </table>
    </body>
</html>
