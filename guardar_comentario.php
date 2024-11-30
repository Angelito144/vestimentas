<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "123456";  // Usa tu contraseña de MySQL
$baseDatos = "mi_base_datos"; // Nombre de la base de datos
$puerto = 3306;

$conn = new mysqli($host, $usuario, $password, $baseDatos, $puerto);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error al conectar: " . $conn->connect_error);
}

// Verifica si se enviaron datos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];

    // Inserta el comentario en la base de datos
    $sql = "INSERT INTO comentarios (nombre, comentario) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $comentario);

    if ($stmt->execute()) {
        echo "Comentario guardado correctamente.";
    } else {
        echo "Error al guardar: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

// Redirige de vuelta a la página principal
header("Location: index.php");
exit();
?>
