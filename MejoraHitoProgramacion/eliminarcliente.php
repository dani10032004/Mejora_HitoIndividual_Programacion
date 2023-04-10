<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Selección de todas las entradas
$sql = "DELETE FROM `login` WHERE id=2";
$result = $conn->query($sql);

// Mostrar las entradas
if ($result->num_rows > 0) {
    echo "<table border=1>";
    echo "<tr><th>id</th><th>nombre</th><th>email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron entradas";
}

// Cerrar la conexión
$conn->close();
?>