<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function invertirNumero($num1){
            return strrev($num1);
        }
        echo invertirNumero("1234") . "\n";
        echo invertirNumero("2468") . "\n";
        echo invertirNumero("3579") . "\n";
    ?>
</body>
</html>