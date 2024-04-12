<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>ARCHIVOS</title>
</head>
<body>
<div class="container">

    <h1>Archivos Subidos</h1>
    <a href="index.html" class="boton_desliz">SUBIR MAS ARCHIVOS</a>

     <!-- Botón para descargar todos los archivos -->
     <form action="download_all.php" method="post"></form>

    <form id="uploadForm" enctype="multipart/form-data">

    <ul>
        <?php
        // Directorio donde se guardan los archivos subidos
        $directory = 'uploads/';

        // Obtener la lista de archivos en el directorio
        $files = glob($directory . '*');

        // Mostrar la lista de archivos como enlaces para descargar
        foreach ($files as $file) {
            $fileName = basename($file);
            echo '<li><a href="' . $file . '" download>' . $fileName . '</a></li>';
        }
        ?>
    </ul>
    </form>
    </div>

</body>
</html>