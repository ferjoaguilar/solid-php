<?php
interface Autenticacion {
    public function inicioSesion(string $usuario, string $contrasena): bool;
    public function MesanjePremiun(): string;
}

class Tienda implements Autenticacion {
    public function inicioSesion(string $usuario, string $contrasena): bool {
        if($usuario == "admin" && $contrasena == "1234"){
            return true;
        }else{
            return false;
        }
    }
}

class TiendaPremium implements Autenticacion {
    public function inicioSesion(string $usuario, string $contrasena): bool {
        // Additional premium login logic
        if($usuario == "admin" && $contrasena == "1234"){
            // Additional premium login logic
            return true;
        }else{
            return false;
        }
    }

    public function MesanjePremiun(): string {
        return "Bienvenido a nuestra tienda en online";
    }
}
?>