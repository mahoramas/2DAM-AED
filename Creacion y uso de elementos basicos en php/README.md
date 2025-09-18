# Bloque 1: Conceptos básicos (introducción a php)

### Variables y Condicionales

1. **Mayor de dos números**  
   Pide dos números y muestra cuál es mayor o si son iguales.  

    Entrada:

    ```php
    <?php
    $numero = 5;
    $numero2 = 5;

    if($numero > $numero2){
        echo "El mayor numero es " . $numero;
    }
    if($numero < $numero2){
        echo "El mayor numero es " . $numero2;
    }
    if($numero == $numero2){
        echo "Los dos números son iguales: " . $numero;
    }
    ?>
    ```

    Salida:
    ```
    Los dos números son iguales: 5 
    ```

2. **Edad permitida**  
   Pide la edad de una persona y muestra:  
   - `"Eres menor de edad"` si es < 18.  
   - `"Eres mayor de edad"` si es ≥ 18.  

    Entrada: 
    ```php
    <?php
    $edad = 15;

    if($edad >= 18 ){
        echo "Eres mayor de edad, tienes " . $edad;
    }
    if($edad < 18 ){
        echo "Eres menor de edad, tienes " . $edad;
    }
    ?>
    ```

    Salida:
    ```
    Eres menor de edad, tienes 15 
    ```
3. **Positivo, negativo o cero**  
   Comprueba si un número almacenado en una variable es positivo, negativo o cero.  

    Entrada:
   ```php
    <?php
    $numero = 0;

    if($numero > 0){
        echo "El numero " . $numero . " es positivo";
    }
    if($numero < 0){
        echo "El numero " . $numero . " es negativo";
    }
    if($numero == 0){
        echo "El numero es igual a 0 ";
    }
    ?>
   ```
    Salida:
    ```
    El numero es igual a 0 
    ```

4. **Nota final**  
   Pide la nota de un alumno y muestra:  
   - `"Suspenso"` (< 5), `"Aprobado"` (5–6), `"Notable"` (7–8), `"Sobresaliente"` (9–10).  

   Entrada:
   ```php
   <?php
    $nota = 10;

    if($nota < 5){
        echo "La nota " . $nota . " es un suspenso";
    }
    if($nota == 5 || $nota == 6){
        echo "La nota " . $nota . " es un aprobado";
    }
    if($nota == 7 || $nota == 8){
        echo "La nota " . $nota . " es un notable";
    }
        if($nota == 9 || $nota == 10){
        echo "La nota " . $nota . " es un sobresaliente";
    }

    ?>
   ```

   Salida:
   ```
    La nota 10 es un sobresaliente 
   ```

---

### 2️⃣ Bucles (for, while, foreach)

5. **Contar del 1 al 100**  
   Muestra los números del 1 al 100 en pantalla.  

   Entrada:
   ```php
   <?php
 	
    $contador = 0;

	while ($contador <= 100) {
    echo "$contador\n";
    $contador++;
	}

    ?>
   ```

   Salida:
   ```
    0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49 50 51 52 53 54 55 56 57 58 59 60 61 62 63 64 65 66 67 68 69 70 71 72 73 74 75 76 77 78 79 80 81 82 83 84 85 86 87 88 89 90 91 92 93 94 95 96 97 98 99 100
   ```

6. **Suma acumulada**  
   Calcula la suma de los números del 1 al 50 usando un bucle.  

   Entrada:
   ```php
   <?php
 	
    $contador = 0;
	$suma = 0;
	while ($contador <= 50) {
    $suma = $suma + $contador;
    $contador++;
	}
    echo $suma;
    ?>
   ```

   Salida:
   ```
   1275
   ```

7. **Tabla de multiplicar**  
   Pide un número y genera su tabla de multiplicar del 1 al 10.  

   Entrada:
   ```php
   <?php
 	
    $tablas = 1;
	$numero = 2;
	while ($tablas <= 10) {
    $resultado = $numero * $tablas;
    echo "$resultado\n";
    $tablas++;
	}
    ?>
   ```

   Salida:
   ```
    2 4 6 8 10 12 14 16 18 20 
   ```

8. **Números pares**  
   Muestra todos los números pares entre 1 y 50.  

   Entrada:
   ```php
   <?php
 	
    $contador = 0;

	while ($contador <= 50) {
    	if(($contador % 2) ==0){
    	echo "$contador\n";
    	}
    $contador++;
	}
    ?>
   ```

   Salida:
   ```
    0 2 4 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 42 44 46 48 50 
   ```

9. **Cuenta atrás**  
   Haz un bucle que cuente de 10 a 1 y luego muestre `"¡Fin!"`.  

   Entrada:
   ```php
    <?php
 	
    $contador = 10;

	while ($contador >= 1) {
    	echo "$contador\n";

    $contador--;
	}
    echo "¡Fin!";
    ?>
   ```

   Salida:
   ```
    10 9 8 7 6 5 4 3 2 1 ¡Fin! 
   ```

10. **Factorial**  
    Calcula el factorial de un número introducido (ejemplo: `5! = 120`).  

    Entrada:
    ```php
    <?php

    $numero = 5;
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    echo "El factorial de $numero es: $factorial";

    ?>
    ```

    Salida:
    ```
    El factorial de 5 es: 120 
    ```

---

### 3️⃣ Combinando Condicionales y Bucles

11. **Números primos**  
    Escribe un algoritmo que muestre los números primos entre 1 y 50.  

    Entrada:
    ```php
    <?php
    function esPrimo($numero) {
	if ($numero < 2) return false;

	for ($i = 2; $i <= sqrt($numero); $i++) {
    	if ($numero % $i == 0) {
        	return false;
    	}
	}
	return true;
    }

    for ($i = 1; $i <= 50; $i++) {
    if (esPrimo($i)) {
        echo $i . " ";
    }
    }
    ?>
    ```

    Salida:
    ```
    2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 
    ```

12. **Fibonacci**  
    Genera los primeros 20 términos de la secuencia de Fibonacci.  

    Entrada:
    ```php
    <?php
    $primero = 0;
    $segundo = 1;

    echo $primero . " " . $segundo . " ";

    for ($i = 3; $i <= 20; $i++) {
        $siguiente = $primero + $segundo;
        echo $siguiente . " ";
        $primero = $segundo;
        $segundo = $siguiente;
    }
    ?>
    ```

    Salida:
    ```
    0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584 4181 
    ```

13. **Múltiplos de un número**  
    Pide un número `n` y muestra sus múltiplos hasta 100.  

    Entrada:
    ```php
    <?php

    $n = 5;

    for ($i = $n; $i <= 100; $i += $n) {
        echo $i . " ";
    }

    ?>
    ```

    Salida:
    ```
    5 10 15 20 25 30 35 40 45 50 55 60 65 70 75 80 85 90 95 100 
    ```

14. **Suma de pares e impares**  
    Calcula la suma de los números pares e impares entre 1 y 100 por separado. 

    Entrada:
    ```php
    <?php

    $sumaPares = 0;
    $sumaImpares = 0;

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0){
            $sumaPares += $i;
        } else { 
            $sumaImpares += $i;
            }
    }
    
    echo "Suma de pares = $sumaPares ";
    echo "Suma de impares = $sumaImpares";

    ?>
    ```

    Salida:
    ```
    Suma de pares = 2550 Suma de impares = 2500 
    ``` 

15. **Adivinar número**  
    Genera un número aleatorio entre 1 y 20.  
    Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: `"Mayor"` o `"Menor"`.  

    Entrada:
    ```php
    <?php
    $numero = rand(1,20);
    $adivinado = true;
    while ($adivinado) {
        $nDado = readline("ingresa un numero ");
        if ($nDado < $numero) {
            echo "el numero ingresado es mas pequeño \n";
        } else if($nDado > $numero){
            echo "el numero ingresado es mas grande \n";
        }
        if ($nDado == $numero) {
            $adivinado = false;
            break;
        }
    }
    echo "adivinaste \n";
    ```

    Salida:
    ```
    ``` 

---

### 4️⃣ Construcción de Algorítmicos

16. **Número perfecto**  
    Comprueba si un número es perfecto (la suma de sus divisores propios es igual al número).  

    Entrada:
    ```php
    <?php
    $numero = 6;
    $sumaDivisores = 0;

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }

    if ($sumaDivisores == $numero) {
        echo "$numero es un número perfecto.\n";
    } else {
        echo "$numero no es un número perfecto.\n";
    }

    ?>
    ```

    Salida:
    ```
    6 es un número perfecto. 
    ``` 

17. **Invertir número**  
    Escribe un algoritmo que invierta los dígitos de un número (ejemplo: `123 → 321`).

    Entrada:
    ```php
    <?php

    function invertirNumero($numero) {
        
    $numeroInvertido = strrev($numero);
    echo "$numero invertido es $numeroInvertido";
    }

    $numeroEjemplo = 12345;
    invertirNumero($numeroEjemplo);
    ?>
    ```

    Salida:
    ```
    12345 invertido es 54321 
    ```   

18. **Palíndromo**  
    Comprueba si una palabra almacenada en una variable es palíndroma.  

    Entrada:
    ```php
    <?php

    function comprobarPalindroma($palabra) {
        
    $palabraInvertida = strrev($palabra);
    if ($palabraInvertida == $palabra){
        echo "$palabra es un palindromo <br>";
    } else {
        echo "$palabra no es un palindromo <br>";
    }
    }

    $palabraPalindroma = "ojo";
    $palabraNoPalindroma = "puerta";
    comprobarPalindroma($palabraPalindroma);
    comprobarPalindroma($palabraNoPalindroma);
    ?>
    ```

    Salida:
    ```
    ojo es un palindromo
    puerta no es un palindromo 
    ``` 

19. **Máximo común divisor (MCD)**  
    Escribe un algoritmo que calcule el MCD de dos números.  

    Entrada:
    ```php
    <?php
    $numero1 = 16;
    $numero2 = 8;

    while ($numero2 != 0) {
        $temp = $numero2;
        $numero2 = $numero1 % $numero2;
        $numero1 = $temp;
    }

    echo "El MCD es: " . $numero1 . "\n";
    ?>
    ```

    Salida:
    ```
    El MCD es: 8 
    ``` 

20. **Triángulo de asteriscos**  
    Muestra en pantalla un triángulo de altura `n` usando `*`.  
    Ejemplo con `n = 5`:  
    ```
    *
    **
    ***
    ****
    *****
    ```

    Entrada:
    ```php
    <?php
    $altura = 5; 

    for ($i = 1; $i <= $altura; $i++) {
        echo str_repeat("*", $i) . "<br>";
    }
    ?>
    ```

    Salida:
    ```
    *
    **
    ***
    ****
    *****
    ``` 
---