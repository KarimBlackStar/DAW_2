<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL TIEMPO</title>
</head>
<body>
    <?php
    if(date('H')>=6 && date('H')<=12){
        echo "Es por la mañana";
        echo "<br>";
        $mañana = "images.jpeg";
        echo '<img src= "' . $mañana . '" alt="">';
    } 
    ?>
</body>
</html>