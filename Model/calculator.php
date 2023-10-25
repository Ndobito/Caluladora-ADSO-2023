<?php 

include_once "lib/database/conexion.php"; 

class Model_calculator{
    private $oConexion; 
    function __construct(){
        $this->oConexion = databaseConexion::fnConexion(); 
    }


}

?>