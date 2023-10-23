<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fileInput"])) {
    $uploadsDirectory = "Archivos/";  // Directorio de almacenamiento de archivos
    $file = $_FILES["fileInput"];
    $targetPath = $uploadsDirectory . $file["name"];
    
    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        echo "El archivo se ha cargado exitosamente.";
    } else {
        echo "Hubo un error al cargar el archivo.";
    }
}
?>
