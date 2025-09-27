<?php

$entrada = "ops.csv";
$salida = "resultado.csv";

$archivoEntrada = fopen($entrada, "r");
$archivoSalida = fopen($salida, "w");

fputcsv($archivoSalida, ["z1", "z2", "op", "resultado"]);

while (($data = fgetcsv($archivoEntrada)) !== false) {
    if (count($data) < 3) {
        continue;
    }

    $z1 = (int)$data[0];
    $z2 = (int)$data[1];
    $op = strtolower(trim($data[2]));
    $resultado = "";

    switch ($op) {
        case "suma":
            $resultado = $z1 + $z2;
            break;
        case "resta":
            $resultado = $z1 - $z2;
            break;
        case "producto":
            $resultado = $z1 * $z2;
            break;
        case "division":
            if ($z2 == 0) {
                $resultado = "ERROR";
            } else {
                $resultado = $z1 / $z2;
            }
            break;
        default:
            $resultado = "Operacion no valida";
    }

    fputcsv($archivoSalida, [$z1, $z2, $op, $resultado]);
}

fclose($archivoEntrada);
fclose($archivoSalida);

echo "Archivo $salida generado correctamente.\n";
?>
