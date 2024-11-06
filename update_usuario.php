<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Edicion de Usuarios</title>
</head>
<body>
<center>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "registro1")
            or die("Problemas con la conexión");

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $ciudad = $_POST['ciudad'];
        $mensaje = $_POST['mensaje'];

        $query = "UPDATE usuario SET nombre='$nombre', asunto='$asunto', telefono='$telefono', email='$email', ciudad='$ciudad', mensaje='$mensaje' WHERE id='$id'";

        if (mysqli_query($conexion, $query)) {
            echo "Registro actualizado exitosamente";
        } else {
            echo "Error al actualizar el registro: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    ?>

<div class="back-link">
    <p><a href=".html">[ Volver..]</a></p>
</div>
</center>
</body>
</html>