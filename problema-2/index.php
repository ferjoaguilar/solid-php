<?php

//O - Open/Closed Principle (OCP) o Principios de Abierto/Cerrado.

class Pago{
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
?>

<?php

$pago = new Pago();

$pago->MasterCardPay();
echo "<br>";
$pago->VisaPay();
echo "<br>";
$pago->PayPalPay();
?>
