## Número capicúa (palíndromo numérico)

Implementa una función __esCapicua(int $n): bool__ que determine si un número entero positivo es capicúa.

- Un número es capicúa si se lee igual de izquierda a derecha que de derecha a izquierda.


    Entrada:

    ```php
    <?php 
    function esCapicua(int $n): bool{
        $invertido = strrev("$n");
        if ("$n" == $invertido){
            echo "El numero " . $n . " es capicua <br>";
            return true;
        } 
        echo "El numero " . $n . " no es capicua <br>";
        return false;
    }

    esCapicua(12321);
    esCapicua(12356);
    ?>
    ```

    Salida:

    ```
    El numero 12321 es capicua
    El numero 12356 no es capicua
    ```
## Escalera de asteriscos

Implementa una función __montañaAsteriscos(int $n, $m): void__ que imprima una escalera de asteriscos de altura `N`y el tamaño M.

- La primera fila contiene 1 asterisco, la segunda 2, y así hasta `N`, `M` veces.




    Entrada:

    ```php


    ```

    Salida:

    ```

    ```

## Suma de dígitos

Implementa una función __sumaDigitos(int $n): int__ que calcule la suma de los dígitos de un número entero positivo.

- Descompón el número en dígitos y súmalos.


    Entrada:

    ```php
    <?php
    function sumaDigitos(int $numero): int {
        $suma = 0;
        while ($numero > 0) {
            $suma += $numero % 10;   
            $numero = intdiv($numero, 10); 
        }
        return $suma;
    }

    echo sumaDigitos(2020);
    ?>
    ```

    Salida:

    ```
    4
    ```
## Número secreto (múltiplos de 3 o 5)

Implementa una función __multiplosTresOCinco(int $n): array__ que devuelva todos los múltiplos de 3 o 5 menores que `N`.

- Además, calcula la suma de dichos múltiplos.


    ```code
    3, 5, 6, 9
    Suma = 23
    ```

    Entrada:
    ```php
    <?php
    function multiplosTresOCinco(int $n): array {
        $multiplos = [];
        $suma = 0;

        for ($i = 1; $i < $n; $i++) {
            if ($i % 3 === 0 || $i % 5 === 0) {
                $multiplos[] = $i;
                $suma += $i;
            }
        }

        return ["multiplos" => $multiplos, "suma" => $suma];
    }

    $resultado = multiplosTresOCinco(15);

    echo "Múltiplos: " . implode(", ", $resultado["multiplos"]) . " ";
    echo "Suma = " . $resultado["suma"];
    ?>

    ```

    Salida:
    ```
    Múltiplos: 3, 5, 6, 9, 10, 12 Suma = 45
    ```
## Secuencia de Collatz

Implementa una función __secuenciaCollatz(int $n): array__ que genere la secuencia de Collatz a partir de un entero positivo.

- Si el número es par → dividir entre 2.  
- Si es impar → multiplicar por 3 y sumar 1.  
- Repetir hasta llegar a 1.


    ```code
    6 → 3 → 10 → 5 → 16 → 8 → 4 → 2 → 1
    ```

    Entrada:
    ```php
    <?php
    function secuenciaCollatz(int $n): array {

        $secuencia = [$n]; 

        while ($n !== 1) {
            if ($n % 2 === 0) {
                $n = $n / 2;    
            } else {
                $n = 3 * $n + 1; 
            }
            $secuencia[] = $n; 
        }

        return $secuencia;
    }

    $resultado = secuenciaCollatz(6);

    echo "Secuencia: " . implode(" → ", $resultado);
    ?>
    ```

    Salida:
    ```
    Secuencia: 6 → 3 → 10 → 5 → 16 → 8 → 4 → 2 → 1
    ```