<html>
<head>
<title>Adicion de usuario</title>
</head>
<body>
<?php
        $conexion = mysqli_connect("localhost", "root", "", "registro1") or die ("Problemas con la conexión");
        mysqli_query($conexion, "insert into usuario(id, nombre, asunto, telefono, email, ciudad, mensaje) values('','$_REQUEST[nombre]','$_REQUEST[asunto]','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[ciudad]','$_REQUEST[mensaje]')")
        or die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);
    ?>
    <div align="center" >
        <label>El REGISTRO fue ADICIONADO con Exito..!!</label>
    </div>
    <div align="center">
    <hr>
        <p>&nbsp;
        </p>
        <p><a href="CONTACTO.html">[ Continuar conAdicion..]</a>
        </p>
    </div>
</body>
</html>