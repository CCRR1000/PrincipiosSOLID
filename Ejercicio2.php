<?php
    /**
     * Principio SOLID aplicado
     * LISKOV SUBSTITUTION
     */

    interface ControlPago 
    {
        public function pago();
    }
    
    class Adulto implements ControlPago {
        public function pago(){
            echo "Es mayor de edad puede pagar";
        }
    }

    class Niño {
        public function juego()
        {
            throw new Exception("El niño puede jugar");
        }
    }


    /**
     * CODIGO SIN CORREGIR
     */

#    class Adulto {
#        public function pago(){
#            echo "Es mayor de edad puede pagar";
#        }
#    }
#
#    class Niño extends Adulto{
#        public function pago()
#        {
#            throw new Exception("el niño no puede pagar, porque es menor de edad");
#        }
#    }

?>