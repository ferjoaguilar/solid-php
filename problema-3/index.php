<?php
//L - Liskov Substitution Principle (LSP) o Principio de sustitución de Liskov.
class Tienda{
    public function inicioSesion(string $usuario, string $contrasena): bool {
        if($usuario == "admin" && $contrasena == "1234"){
            return true;
        }else{
            return false;
        }
    }
}

 class TiendaPremium extends Tienda{
    public function inicioSesionPremiun(string $usuario, string $contrasena): bool {
        if($usuario == "admin" && $contrasena == "1234"){
            return true;
        }else{
            return false;
        }
    }
}

$tienda = new TiendaPremium();
if ($tienda->inicioSesion("admin", "1234")){
    if ($tienda->inicioSesionPremiun("admin", "1234")){
        echo "Bienvenido a nuestra tienda en online";
    }else{
        echo "Usuario o contraseña incorrectos FALLO SU SUBSCRIPTOR PREMIUM";
    }
} else{
    echo "Usuario o contraseña incorrectos FALLO EN TIENDA";
}

?>