<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function calcularIva(float $precioProducto, int $iva = 21) : float{
        $importeIva = $precioProducto * $iva / 100;
        return $precioProducto + $importeIva;
        }
        
        echo "Precio base con 25% IVA: " . calcularIva(2.55, 25) . "€ <br>";
    echo "Precio base 15,45€ con IVA por defecto(21%)" . calcularIva(15.45) . "€";
    ?>
</body>
</html>