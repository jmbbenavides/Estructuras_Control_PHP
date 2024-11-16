<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <h1>Palíndromo</h1>
    <!-- formulario donde pueda ingresaer el texto -->
    <form method="post" action="">
        <label for="texto_palindromo">Ingrese un texto:</label>
        <input type="text" id="texto_palindromo" name="texto_palindromo" required>
        <button type="submit">Verificar si es Palíndromo</button>
    </form>
    <?php
    if(isset($_POST['texto_palindromo'])) {
        // funcion donde se pueda verificar si el txt es palindronmo
        function esPalindromo($cadena) {
            // convertirt el txt a minuscula y eliminar caracteres 
            $cadena = strtolower(preg_replace("/[^a-z0-9]/", "", $cadena));
            return $cadena == strrev($cadena);
        }
        $texto=$_POST['texto_palindromo'];
        echo "<p>El texto \"$texto\" ".(esPalindromo($texto) ? "es un palíndromo." : "no es un palíndromo.") . "</p>";
    }
    ?>
</body>
</html>
