<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Serie Fibonacci</title>
</head>
<body>
    <h1>Serie Fibonacci</h1>
    <!-- Formulario donde se ingresara los numeros| -->
    <form method="post" action="">
        <label for="fibonacci_n">Número de términos:</label>
        <input type="number" id="fibonacci_n" name="fibonacci_n" required>
        <button type="submit">Generar Serie</button>
    </form>
    <?php
    // verifica si se a enviado formuklario
    if( isset($_POST['fibonacci_n']) ) {

        // funcion para generar la serie de Fibonacci
        function generarFibonacci($n){  
            $fibonacci =[0, 1];
            for ($i = 2;$i< $n;$i++) {
                $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];  
            }
            return array_slice($fibonacci, 0, $n);
        }
        $n = (int)$_POST['fibonacci_n'];
        echo "<p>Serie de Fibonacci para n = $n:</p>";
        echo "<p>".implode(", ", generarFibonacci($n))."</p>";
    }
    ?>
</body>
</html>
