<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_2</title>
</head>
<body>
    <?php
    
        function login(string $usuario,string $contraseña) : bool{
            $acceso=false;
            if(empty($usuario) || empty($contraseña) || $usuario != "admin" || $contraseña != "1234"  ){
                $acceso=false;
                echo "Acceso denegado<br>";
            } else {
                $acceso=true;
                echo "Acceso concedido<br>";
            }
            return $acceso;
        }
echo login("","1234");
echo login("admin","1234");
echo login("admin","1111");
echo login("admin","");
    ?>
</body>
</html>