<?php
// Vamos a mostrar un PDF
header('Content-type: application/pdf');

// Se descarga automáticamente y se llamará downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');
header("Content-Length: " . filesize($file));

// La fuente de PDF se encuentra en original.pdf
readfile('ExamenTema4.pdf');
?>
