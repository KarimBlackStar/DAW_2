<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola php</h1>

    <!-- <h2>Es por la mañana</h2> -->

    <?php
    // Comentario
    echo "<h2>Es por la mañana</h2>";
    ?>
    <div>
    Esto es un div html    
    Esto es un div html
    </div>

    <?php
    echo "Esto esta fuera del div y es PHP"
    ?>
    <br>
    Hoy es <?php echo date('d-M-Y'); ?>, que tengas un buen día
    <br>
    Hoy es <?= date('d-M-Y'); ?>, que tengas un buen día
</body>

</html>