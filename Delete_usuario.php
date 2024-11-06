<?php
    $conexion = mysqli_connect("localhost", "root", "","registro1")
        or die("Problemas con la conexión");

    $id = $_GET['id'];
    echo $id;

    // Consulta para eliminar el usuario
    mysqli_query($conexion, " DELETE FROM usuario WHERE id='$id'")
        or die("Problemas en el delete: " . mysqli_error($conexion));

    mysqli_close($conexion);
    // Redirigir de nuevo a la página de listado
    header("Location: CONTACTO.html");
    exit;
?>