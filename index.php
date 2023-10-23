<!DOCTYPE html>
<html>
<head>
    <title>Subir y Descargar Documentos</title>
</head>
<body>
    <h1>Subir Documentos</h1>
    <form action="subida.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileInput">
        <input type="submit" value="Cargar Documento">
    </form>

    <hr>

    <h1>Descargar Documentos</h1>
    <a id="downloadLink" style="display:none">Descargar Documento</a>

    <!-- Lista de archivos generada por PHP -->
    <div id="fileList">
        <?php include 'listado.php'; ?>
    </div>
</body>
</html>
