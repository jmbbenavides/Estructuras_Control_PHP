<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frecuencia de Caracteres</title>
</head>
<body>
    <h1>Frecuencia de Caracteres</h1>
    <!-- formulario donde se pueda ingresar un txt -->
    <form method="post" action="">
        <label for="texto_frecuencia">Ingrese un texto:</label>
        <input type="text" id="texto_frecuencia" name="texto_frecuencia" required>
        <button type="submit">Calcular Frecuencia</button>
    </form>
    <?php
    if(isset($_POST['texto_frecuencia'])) {
        // funcion para calcular la frecuencia de cada caracter 
        function frecuenciaCaracteres($cadena) {
            $frecuencia =[];
            // recorrer cada caracter 
            for ($i=0; $i < strlen($cadena); $i++) { 
                $caracter = $cadena[$i];
                if(isset($frecuencia[$caracter])) {
                    $frecuencia[$caracter]++;
                }else {
                    $frecuencia[$caracter] = 1; //solo inicializo el contenido si un dado caso no existe 
                }
            }
            return $frecuencia;
        }
        $texto = $_POST['texto_frecuencia'];
        echo "<p>Frecuencia de caracteres en \"$texto\":</p><ul>";
        foreach (frecuenciaCaracteres($texto) as $caracter => $frecuencia) {
            echo "<li>'$caracter' aparece $frecuencia veces</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
