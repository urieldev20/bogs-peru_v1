<?php
// Conexión a la base de datos (cambia los valores según tu configuración)
$servername = "localhost";
$username = "ajgykvcs_admin";
$password = "Informatica100+";
$dbname = "ajgykvcs_bogsperu";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para recuperar datos
$sql = "SELECT * FROM nombre_tabla";
$result = $conn->query($sql);

// Comprobar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla HTML
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellido</th><th>Número</th><th>Correo</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["numero"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>