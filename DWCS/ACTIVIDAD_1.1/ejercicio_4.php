<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcularVolumen($radio, $altura){
            return $volumen = 3.1416*$radio*$radio*$altura;
        }
        echo calcularVolumen(5,10);
    ?>
</body>
</html>