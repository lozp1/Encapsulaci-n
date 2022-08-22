<?php declare(strict_types=1);
include 'includes/header.php';

// ENCAPSULACIÓN
class Producto {

    #Public - se puede acceder y modificar en cualquier lugar (clase y objeto)
    #Protected - se puede acceder / modificar unicamente en la clase
    #Private - solo miembros de la misma clase pueden acceder a él

    public function __construct(protected string $nombre, public int $precio, public bool $disponible){
    }

    public function mostrarProducto() : void {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio; 
    }

    // acceder -obtener
    public function getNombre () : string {
        return $this-> nombre;
    }

    // modificar - establecer
    public function setNombre (string $nombre){
        return $this -> nombre = $nombre;
    }

}

// crear instancia
$producto = new Producto("Tablet", 200, true);
//$producto->mostrarProducto();
echo $producto -> getNombre();
$producto -> setNombre("Nuevo Nombre");

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor", 300, true);
//$producto2->mostrarProducto();
echo $producto2 -> getNombre();

//echo "<pre>";
//var_dump($producto2);
//echo "</pre>";

include 'includes/footer.php';
