<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("PI", 3.1416);
        function calcularVolumen($radio, $altura){
            return $volumen = PI*$radio*$radio*$altura;
            //return $volumen = PI*$radio*$radio*$altura;
        }
        echo calcularVolumen(5,10);
    ?>
    <h2>Volumen de un cilindro de radio 5 y altura 10</h2>
</body>
</html>