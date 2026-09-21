<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tablas de Multiplicar</h1>
    <?php
    define("TABLE_FROM",1);
    define("TABLE_TO",10);

    // for($i = 1; $i < 10; $i++){
    //     echo "<h2> Tabla del $i </h2>";
    //     for($j = 1; $j < 10; $j++){
    //         echo "$i x $j = ";
    //         echo $i * $j;
    //         echo "<br>";
    //     }
    // };
    for($table = "TABLE_FROM"; $table<=TABLE_TO; $table++){
        echo "<table>";
        echo "<caption>Tabla del $table</caption>";
        for($por=1;$por <=10;$por++){
            echo "<tr><td>$table x $por =". $table * $por . "</td></tr>";
        }
        echo "</table>";
    }
    
    ?>
</body>
</html>

