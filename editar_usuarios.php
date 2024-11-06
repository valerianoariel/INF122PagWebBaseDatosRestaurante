<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de REGISTRO</title>
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
background-color: #0ed9f1;
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
color: #4C0050;
text-decoration: none;
font-weight: bold;
}
.back-link a:hover {
text-decoration: underline;
}
.edit-form {
margin-top: 20px;
display: none;
}
.edit-form input, .edit-form button {
margin: 5px;
}
</style>
</head>
<body>
<div class="container">
<h2>Listado de Tabla de Reservas</h2>
<hr>
</div>
<!-- Tabla de usuarios -->
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
<th>Acciones</th>
</tr>
</thead>
    <tbody id="userTable">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "registro1")
                or die("Problemas con la conexión");
            $registros = mysqli_query($conexion,"SELECT id, nombre, telefono, asunto, email, ciudad, mensaje from usuario")
                or die("Problemas en el select:" . mysqli_error($conexion));
                
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<tr>";
                echo "<td>" . $reg['id'] . "</td>";
                echo "<td>" . $reg['nombre'] . "</td>";
                echo "<td>" . $reg['telefono'] . "</td>";
                echo "<td>" . $reg['asunto'] . "</td>";
                echo "<td>" . $reg['email'] . "</td>";
                echo "<td>" . $reg['ciudad'] . "</td>";
                echo "<td>" . $reg['mensaje'] . "</td>";
                echo "<td><button onclick=\"editUser(" . $reg['id'] . ", '" . $reg['nombre'] . "', '" . $reg['telefono'] . "', '" . $reg['asunto'] . "', '" . $reg['email'] . "', '" . $reg['ciudad'] . "', '" . $reg['mensaje'] . "')\"> Editar </button></td> ";
                echo "</tr>"; 
            }
            mysqli_close($conexion); 
        ?>
    </tbody>
</table>
    <!-- Formulario de edición -->
    <div class="edit-form" id="editForm">
        <h3>Editar Usuario</h3>
        <form id="updateForm" method="POST" action="update_usuario.php">
            <input type="hidden" id="editId" name="id">
            <label>Nombre: </label><input type="text"id="editNombre" name="nombre"><br>
            <label>Telefono: </label><input type="text"id="editTelefono" name="telefono"><br>
            <label>Asunto: </label><input type="text"id="editAsunto" name="asunto"><br>
            <label>Email: </label><input type="text"id="editEmail" name="email"><br>
            <label>Ciudad: </label><input type="text" id="editCiudad" name="ciudad"><br>
            <label>Mensaje: </label><input type="text"id="editMensaje" name="mensaje"><br>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
    <script>
    // Función para mostrar los datos en el formulario de edición
    function editUser(id, nombre, telefono, asunto, email, ciudad, mensaje) {
        document.getElementById("editId").value = id;
        document.getElementById("editNombre").value = nombre;
        document.getElementById("editTelefono").value = telefono;
        document.getElementById("editAsunto").value = asunto;
        document.getElementById("editEmail").value = email;
        document.getElementById("editCiudad").value = ciudad;
        document.getElementById("editMensaje").value = mensaje;
        // Mostrar el formulario de edición
        document.getElementById("editForm").style.display = "block";
    }
    
    </script>
    
</body>
</html>
