<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    $errores = [];

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    if ($mensaje == "") {
        $errores[] = "El mensaje es obligatorio.";
    }

    if (count($errores) > 0) {
    include "header.php";

    echo "<main class='contenedor'>";
    echo "<h1>Errores en el formulario</h1>";

    foreach ($errores as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }

    echo "<a href='contacto.php' class='boton'>Volver al formulario</a>";
    echo "</main>";

    include "footer.php";
    
    } else {
    header("Location: gracias.php");
    exit;
}
}
?>