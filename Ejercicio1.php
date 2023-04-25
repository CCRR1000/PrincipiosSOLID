<?php
    /**
     * Principio SOLID aplicado:
     * SINGLE RESPONSABILITY
     */

    class ConnectionDB {
        public function connection(){
            return " The connection to the database was successful";
        }
    }

    class Employee extends ConnectionDB {

        public function saveEmployee(){
            return "The employee's information has been saved successfully.";
        }
        
        public function reportByDepartment($department){
            return "Information of all active employees in $department";
        }

    }


    /**
     * CODIGO SIN CORREGIR
     */

#    class Employee{
#    
#        public function saveEmployee(){
#            return "The employee's information has been saved successfully.";
#        }
#        public function connection(){
#            return " The connection to the database was successful";
#        }
#        public function reportByDepartment($department){
#            return "Information of all active employees in $department";
#        }
#    
#    }

?>
