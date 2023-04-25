<?php
    /**
     * Principio SOLID aplicado:
     * OPEN-CLOSED
     */

    interface Transferencia{
        public function pago($cantidad);
    }

    class TarjetaCredito implements Transferencia {
        public function pago($cantidad) {
            return "Usted va pagar $$cantidad con tarjeta de credito";
        }
    }

    class PayPal implements Transferencia {
        public function pago($cantidad) {
            return "Usted va pagar $$cantidad por medio de PayPal";
        }
    }


    /**
     * CODIGO SIN CORREGIR
     */

#    class Transferencia{
#        public function tipoPago($tipo, $cantidad){
#            if($tipo == "tarjetaCredito"){
#                return "Usted va pagar $$cantidad con tarjeta de credito";
#            }
#            if($tipo == "payPal"){
#                return "Usted va pagar $$cantidad por medio de PayPal";
#            }
#        }
#    }

?>