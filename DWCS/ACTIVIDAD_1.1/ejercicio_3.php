<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * Procedimiento
     */
        function sumatorio(int $num1,int $num2,int $num3,int $num4,int $num5) : int{
            // $resultado = 0;
            // for($i=1; $i<6; $i++){
            //     //$resultado += ${"n".$i};
            //     $nombreVar = "n".$i;
            //     $resultado += $$nombreVar;
            //     $textSum .= $$nombreVar . ","
            // }
            echo "Sumatorio($n1, $n2, $n3, $n4, $n5) = ", $n1 + $n2 + $n3 + $n4 + $n5;
        }

    sumatorio(1,3,7,8,10);
        //echo "La suma de $num1, $num2, $num3, $num4, $num5 =", suma(1,2,3,4,5),"<br>";
        //echo suma(10,2,5,8,7);
    ?>
</body>
</html>