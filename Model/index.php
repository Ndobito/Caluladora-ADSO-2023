<?php

include_once "lib/database/conexion.php"; 

class Model_index{
    private $oConexion; 
    function __construct(){
        $this->oConexion = databaseConexion::fnConexion(); 
    }

    public function fnLogin($user, $password){
        $qSql = "SELECT nickuser FROM tbl_user WHERE nickuser = '$user' AND passuser = '$password'"; 
        $result = $this->oConexion->query($qSql);
        if($result->num_rows > 0){
            return $result->fetch_array();
        }else{
            $vUsuarioNoExiste = $this->fnUserExist($user);
            return ($vUsuarioNoExiste) ? true : false;
        }
    }

    public function fnUserExist($user){
        $qUser = "SELECT nickuser FROM tbl_user WHERE nickuser = '$user'"; 
        $resultado = $this->oConexion->query($qUser);
        if($resultado->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }
}

?>