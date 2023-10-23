<?php
$uploadsDirectory = "Archivos/";  // Directorio de almacenamiento de archivos
$files = scandir($uploadsDirectory);

// Inicializa un contador para la numeración de las filas
$rowNumber = 1;

foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        // Imprime una fila de la tabla con el nombre de archivo, fecha (puedes obtenerla del sistema si lo necesitas) y el icono de descarga SVG
        echo "<tr>";
        echo "<th scope='row'>$rowNumber</th>";
        echo "<td>$file</td>";
        echo "<td>" . date("d/m/Y H:i:s", filemtime($uploadsDirectory . $file)) . "</td>";
        echo "<td><a href='$uploadsDirectory/$file' download>";
        echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-download' viewBox='0 0 16 16' style='fill:white;'>";
        echo "<path d='M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z'></path>";
        echo "<path d='M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z'></path>";
        echo "</svg>";
        echo "</a></td>";
        echo "</tr>";

        // Incrementa el contador de filas
        $rowNumber++;
    }
}
?>
