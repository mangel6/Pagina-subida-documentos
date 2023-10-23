<?php
$uploadsDirectory = "Archivos/";  // Directorio de almacenamiento de archivos
$files = scandir($uploadsDirectory);

foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        echo "<a href='$uploadsDirectory/$file' download>$file</a><br>";
    }
}
?>
