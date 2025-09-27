<?php
$entrada = "texto.txt";
$salida = "estadisticas.csv";


$contenido = file_get_contents($entrada);
$contenido = mb_strtolower($contenido, 'UTF-8');
$contenido = preg_replace('/[^\p{L}\s]+/u', ' ', $contenido);

$palabras = preg_split('/\s+/', trim($contenido));

$frecuencias = array_count_values($palabras);

$archivoSalida = fopen($salida, "w");

fputcsv($archivoSalida, ["palabra", "frecuencia"]);

foreach ($frecuencias as $palabra => $frecuencia) {
    if ($palabra !== "") {
        fputcsv($archivoSalida, [$palabra, $frecuencia]);
    }
}

fclose($archivoSalida);

echo "Archivo $salida generado correctamente.\n";
?>
