<?php
    /**
     * Principio SOLID aplicado
     * INTERFACE SEGREGATION
     */

    interface ExpPDF{
        public function exportarPDF();
    }
    
    interface ExpJSON{
        public function exportarJSON();
    }
    
    interface ExpText{
        public function exportarText();
    }
    
    class BoletaPago implements ExpPDF{
        public function exportarPDF()
        {
            return  "Su boleta de pago esta en PDF";
        }
    }

    class Listado implements ExpJSON{
        public function exportarJSON()
        {
            return  "Su listado esta en JSON";
        }
    }

    class Informacion implements ExpText{
        public function exportarText()
        {
            return  "Su informacion esta en texto";
        }
    }
    

    /**
     * CODIGO SIN CORREGIR
     */

#    interface exportDocument{
#        public function exportarPDF();
#        public function exportarJSON();
#        public function exportarText();
#    }
#    
#    class BoletaPago implements exportDocument{
#        public function exportarPDF()
#        {
#            return  "Su boleta de pago esta en PDF";
#        }
#    
#        public function exportarJSON()
#        {
#            throw new Exception("no se puede exportar en JSON");
#        }
#    
#        public function exportarText()
#        {
#            throw new Exception("no se puede exportar en texto");
#        }
#    }
    
?>
