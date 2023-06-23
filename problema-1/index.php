<?php

// S – Single Responsibility Principle (SRP) o Principios de responsabilidad única.

class Tienda{

    protected $usuario;
    protected $contrasena;

    public function __construct(string $usuario, string $contrasena){
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
    }

    public function inicioSesion(){
        if($this->usuario == "admin" && $this->contrasena == "1234"){
            echo "Bienvenido a nuestra tienda en online";
        }else{
            echo "Usuario o contraseña incorrectos";
        }
    }

    public function cerrarSesion(){
        echo "Sesión cerrada";
    }

    public function MasterCardPay(){
        echo "Pago realizado con MasterCard";
    }


    public function VisaPay(){
        echo "Pago realizado con Visa";
    }

    public function PayPalPay(){
        echo "Pago realizado con PayPal";
    }

    public function agregarCarrito (int $productos){
        if ($productos > 0){
            echo "Producto agregado al carrito". "<br>". "Cantidad de productos: ". $productos; 
        }else{
            echo "No hay productos en el carrito";
        }
    }
}

?>

<?php
$tienda = new Tienda("admin", "1234");
$tienda->InicioSesion();
echo "<br>";
$tienda->CerrarSesion();
echo "<br>";
$tienda->agregarCarrito(52);

?>