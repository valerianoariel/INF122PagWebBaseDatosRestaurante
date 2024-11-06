<html>
<head>
<title>Problema</title>
<style>
body {
font-family: Arial, sans-serif;
display: flex;
flex-direction: column;
align-items: center;
}
.container {
text-align: center;
margin-top: 20px;
}
h2 {
color: #333;
}
table {
width: 80%;
border-collapse: collapse;
margin-top: 20px;
}
th, td {
padding: 10px;
border: 1px solid #ddd;
text-align: center;
}
th {
background-color: #4CAF50;
color: white;
}
tr:nth-child(even) {
background-color: #f2f2f2;
}
.back-link {
margin-top: 20px;
text-align: center;
}
.back-link a {
    color: #4CAF50;
text-decoration: none;
font-weight: bold;
}
.back-link a:hover {
text-decoration: underline;
}
</style>

</head>


<body>
<div align="center" >
<label>LISTADO DE TABLA DE RESERVAS</label>
<hr>
</div>
<table>
<thead>
<tr>
<th>ID</th>
<th>Nombre y Apellido</th>
<th>Telefono</th>
<th>Asunto</th>
<th>Email</th>
<th>Ciudad</th>
<th>Mensaje</th>
</tr>
</thead>
<tbody>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "registro1") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion,"select id,nombre, telefono, asunto, email, ciudad, mensaje

    from usuario") or die("Problemas en el select:" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "<tr>";
        echo "<td>" . $reg['id'] . "</td>";
        echo "<td>" . $reg['nombre'] . "</td>";
        echo "<td>" . $reg['telefono'] . "</td>";
        echo "<td>" . $reg['asunto'] . "</td>";
        echo "<td>" . $reg['email'] . "</td>";
        echo "<td>" . $reg['ciudad'] . "</td>";
        echo "<td>" . $reg['mensaje'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($conexion);
?>
</tbody>
</table>
<div align="center">
<p>&nbsp;
</p>
<p><a href="REGISTRO.html">[ Volver..]</a>
</p>
</div>
</body>
</html>