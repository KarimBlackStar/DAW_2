# Guía Rápida de Sintaxis PHP (Moderno)

Esta hoja de referencia cubre la sintaxis fundamental y más utilizada en el desarrollo diario con PHP (versiones 7.4 a 8.x).

---

## 1. Estructura Básica y Salida

```php
<?php
// Script estándar de PHP

// Comentario de una sola línea
# Otro comentario de una sola línea
/*
   Comentario
   multilínea
*/

// Salida de datos
echo "Hola Mundo";
print "También imprime texto";

// Inspección y depuración
var_dump($variable); // Muestra tipo y valor
print_r($array);     // Muestra estructura legible de un array/objeto
```

---

## 2. Variables, Tipos de Datos y Constantes

```php
<?php
// Variables (siempre empiezan con $)
$nombre = "Carlos";           // String
$edad = 28;                   // Integer
$precio = 19.99;              // Float
$activo = true;               // Boolean
$vacio = null;                // Null

// Concatenación e interpolación
$saludo = "Hola, " . $nombre;          // Concatenación con punto (.)
$frase = "Hola, $nombre. Tienes $edad años."; // Interpolación con comillas dobles

// Constantes
define('APP_NAME', 'MiTienda'); // Constante global clásica
const VERSION = '1.2.0';        // Sintaxis moderna (en tiempo de compilación)
```

---

## 3. Operadores Más Utilizados

```php
<?php
// Aritméticos
$suma = 10 + 5;
$potencia = 2 ** 3; // 8
$modulo = 10 % 3;   // 1

// Comparación
$a == $b;   // Igualdad de valor
$a === $b;  // Igualdad estricta (valor y tipo - RECOMENDADO)
$a !== $b;  // Diferencia estricta
$a <=> $b;  // Nave espacial: -1 ($a < $b), 0 ($a == $b), 1 ($a > $b)

// Lógicos
if ($activo && $edad >= 18) { /* AND */ }
if ($esAdmin || $esEditor)   { /* OR */ }
if (!$activo)               { /* NOT */ }

// Operador Ternario
$estado = $edad >= 18 ? "Adulto" : "Menor";

// Null Coalescing Operator (??)
$usuario = $_GET['user'] ?? 'Invitado'; // Si no existe o es null, usa 'Invitado'

// Nullsafe Operator (?->) (PHP 8+)
$pais = $usuario?->getDireccion()?->pais; // Evita error si getDireccion() devuelve null
```

---

## 4. Estructuras de Control

### Condicionales: `if`, `else`, `elseif`, `switch` y `match`

```php
<?php
// if - elseif - else
if ($edad < 13) {
    echo "Niño";
} elseif ($edad < 18) {
    echo "Adolescente";
} else {
    echo "Adulto";
}

// switch tradicional
switch ($rol) {
    case 'admin':
        $permiso = 'todos';
        break;
    case 'editor':
        $permiso = 'editar';
        break;
    default:
        $permiso = 'leer';
        break;
}

// match (PHP 8+ / Expresión moderna, estricta y concisa)
$permiso = match ($rol) {
    'admin'  => 'todos',
    'editor' => 'editar',
    default  => 'leer',
};
```

---

## 5. Bucles

```php
<?php
// foreach (el más utilizado en PHP para arrays)
$frutas = ["Manzana", "Pera", "Plátano"];

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}

// foreach con clave => valor
$usuario = ["nombre" => "Ana", "edad" => 25];
foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor\n";
}

// for clásico
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// while y do-while
$contador = 0;
while ($contador < 3) {
    $contador++;
}

do {
    $contador--;
} while ($contador > 0);
```

---

## 6. Arrays (Indexados y Asociativos)

```php
<?php
// Array indexado (numérico)
$numeros = [1, 2, 3, 4];
$numeros[] = 5; // Agregar elemento al final

// Array asociativo (clave-valor)
$producto = [
    'id' => 101,
    'titulo' => 'Teclado Mecánico',
    'precio' => 79.99
];

echo $producto['titulo']; // Acceso por clave

// Funciones esenciales de arrays
in_array('Teclado Mecánico', $producto); // Verifica si existe un valor
array_key_exists('precio', $producto);   // Verifica si existe una clave
count($numeros);                         // Longitud del array
array_push($numeros, 6, 7);              // Inserta uno o más elementos al final
array_merge($numeros, [8, 9]);           // Combina arrays

// Destructuración de arrays
[$primero, $segundo] = $numeros;

// Spread operator (...)
$nuevosNumeros = [...$numeros, 10, 11];
```

---

## 7. Funciones y Tipado Moderno

```php
<?php
declare(strict_types=1); // Modo estricto de tipos (al inicio del archivo)

// Función con tipos en parámetros y retorno
function sumar(int $a, int $b): int {
    return $a + $b;
}

// Parámetros con valor por defecto y tipos anulables (?tipo)
function saludar(string $nombre, ?string $titulo = null): string {
    if ($titulo !== null) {
        return "Hola, $titulo $nombre";
    }
    return "Hola, $nombre";
}

// Named Arguments (Argumentos por nombre, PHP 8+)
saludar(titulo: "Sr.", nombre: "López");

// Funciones anónimas (Closures)
$multiplicar = function (int $n) use ($factor): int {
    return $n * $factor;
};

// Arrow functions (Funciones flecha de una línea)
$duplicar = fn(int $n): int => $n * 2;
```

---

## 8. Programación Orientada a Objetos (POO)

```php
<?php

// Interfaz
interface Autenticable {
    public function login(): bool;
}

// Clase con Constructor Promotion y Tipado (PHP 8+)
class Usuario implements Autenticable {
    // Las propiedades se pueden declarar directamente en el constructor:
    public function __construct(
        public string $nombre,
        protected string $email,
        private string $password,
        public readonly int $id // readonly: no se puede modificar tras asignarse
    ) {}

    public function login(): bool {
        // Lógica de inicio de sesión
        return true;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

// Herencia
class Administrador extends Usuario {
    public function __construct(
        string $nombre,
        string $email,
        string $password,
        int $id,
        public array $permisos = []
    ) {
        parent::__construct($nombre, $email, $password, $id);
    }
}

// Instanciación y uso
$admin = new Administrador("Laura", "laura@example.com", "secret123", 1, ['admin']);
echo $admin->nombre;
echo $admin->getEmail();
```

---

## 9. Manejo de Errores y Excepciones

```php
<?php

function dividir(float $a, float $b): float {
    if ($b === 0.0) {
        throw new InvalidArgumentException("La división por cero no está permitida.");
    }
    return $a / $b;
}

try {
    $resultado = dividir(10, 0);
    echo $resultado;
} catch (InvalidArgumentException $e) {
    echo "Error en los argumentos: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error general: " . $e->getMessage();
} finally {
    // Se ejecuta siempre
    echo "\nOperación finalizada.";
}
```

---

## 10. Variables Superglobales

PHP dispone de arrays asociativos predefinidos disponibles en cualquier ámbito:

```php
$_GET;     // Datos pasados por URL (?param=valor)
$_POST;    // Datos enviados mediante formulario HTTP POST
$_REQUEST; // Contiene $_GET, $_POST y $_COOKIE (usar con precaución)
$_SESSION; // Variables de sesión del usuario (requiere session_start())
$_COOKIE;  // Cookies HTTP recibidas
$_SERVER;  // Cabeceras, rutas e información del entorno/servidor
$_FILES;   // Archivos subidos mediante multipart/form-data
$_ENV;     // Variables de entorno del sistema
```