<?php

include_once "lib/database/conexion.php"; 

class Model_index{
    private $oConexion; 
    function __construct(){
        $this->oConexion = databaseConexion::fnConexion(); 
    }

    public function fnListaUsuarios(){
        $qSql = "SELECT * FROM tbl_user";
        $oResult = $this->oConexion->query($qSql); 
        var_dump($oResult);
    }
}

?>