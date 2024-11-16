<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número Primo</title>
</head>
<body>
    <h1>Números Primos</h1>
    <!-- formulario donde ingresara un numero -->
    <form method="post" action="">
        <label for="numero_primo">Ingrese un número:</label>
        <input type="number" id="numero_primo" name="numero_primo" required>
        <button type="submit">Verificar si es Primo</button>
    </form>
    <?php
    if(isset($_POST['numero_primo'])) {
        // funcion que determinara si un numero es primo 
        function esPrimo($numero) {
            if ($numero <= 1) return false;
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0)return false;
            }
            return true; //en est parte si devuelve true eso quiere decir que es primo
        }

        //obteniendo el numero y verificar 
        $numero = (int)$_POST['numero_primo'];
        echo "<p>El número $numero ".(esPrimo($numero) ? "es primo.":"no es primo.")."</p>";
    }
    ?>
</body>
</html>
