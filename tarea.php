<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de PHP Interactivo</title>
</head>
<body>

<h2>Ingrese sus datos:</h2>

<form method="post">
    <label for="edad">Ingrese su edad:</label>
    <input type="number" id="edad" name="edad" required><br><br>

    <label for="nota">Ingrese su nota:</label>
    <input type="number" id="nota" name="nota" required><br><br>

    <label for="numero1">Ingrese el primer número:</label>
    <input type="number" id="numero1" name="numero1" required><br><br>

    <label for="numero2">Ingrese el segundo número:</label>
    <input type="number" id="numero2" name="numero2" required><br><br>

    <label for="palabra">Ingrese una palabra:</label>
    <input type="text" id="palabra" name="palabra" required><br><br>

    <button type="submit" name="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $edad = $_POST["edad"];
    $nota = $_POST["nota"];
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $palabra = $_POST["palabra"];

    // Estructura Condicional Simple
    if ($edad >= 18) {
        echo "Eres mayor de edad.<br>";
    }

    // Estructura Condicional Doble
    if ($nota >= 60) {
        echo "Aprobado.<br>";
    } else {
        echo "Reprobado.<br>";
    }

    // Estructura Repetitiva for
    echo "Contando del $numero1 al $numero2 con un bucle for:<br>";
    for ($i = $numero1; $i <= $numero2; $i++) {
        echo $i . "<br>";
    }

    // Estructura Repetitiva while
    echo "Contando del $numero1 al $numero2 con un bucle while:<br>";
    $j = $numero1;
    while ($j <= $numero2) {
        echo $j . "<br>";
        $j++;
    }

    // Estructura Repetitiva do-while
    echo "Contando del $numero1 al $numero2 con un bucle do-while:<br>";
    $k = $numero1;
    do {
        echo $k . "<br>";
        $k++;
    } while ($k <= $numero2);

    // Función establecida por PHP
    echo "Obteniendo la longitud de una cadena con la función strlen():<br>";
    $longitud = strlen($palabra);
    echo "La longitud de la cadena \"$palabra\" es: $longitud";
}
?>

</body>
</html>