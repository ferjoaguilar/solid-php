<?php 


class Usuario{
    protected $usuario;
    protected $contrasena;

    protected $servicioClave;

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

    public function RecuperarContrasena(){
        // Logica para recuperar contraseña
        echo "Inicializando el servicio";
        echo "El servicio de recuperación de contraseña está activo";
        echo "Estamos enviando un correo electrónico con las instrucciones para recuperar la contraseña";
    }
}

class Pasarela {
    public function MasterCardPay(){
        echo "Pago realizado con MasterCard";
    }


    public function VisaPay(){
        echo "Pago realizado con Visa";
    }

    public function PayPalPay(){
        echo "Pago realizado con PayPal";
    }
}

class producto {
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
$usuario = new Usuario("admin", "1234");
$usuario->InicioSesion();
echo "<br>";
$usuario->CerrarSesion();
echo "<br>";

$pasarela = new Pasarela();
$pasarela->MasterCardPay();
echo "<br>";
$pasarela->VisaPay();
echo "<br>";
$pasarela->PayPalPay();
echo "<br>";

$producto = new Producto();
$producto->agregarCarrito(52);
?>