<informacionempleados>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de Empleados</title>
</head>

<body>

    <form name="empleados" action="informacion.php" method="POST">
        <table border="1">

            <tr>
                <td>Identificación del Empleado</td>
                <td>
                    <input type="text" name="Identificacion" required>
                </td>
            </tr>

            <tr>
                <td>Nombres y Apellidos</td>
                <td>
                    <input type="text" name="NomApellidos" required>
                </td>
            </tr>

            <tr>
                <td>Cargo a Desempeñar</td>
                <td>
                    <input type="text" name="Cargo" required>
                </td>
            </tr>

            <tr>
                <td>Salario</td>
                <td>
                    <input type="number" name="Salario" required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar Datos">
                </td>
            </tr>

        </table>
    </form>

</body>
</html>
