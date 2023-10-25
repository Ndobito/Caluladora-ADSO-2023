<?php

class databaseConexion{

    public static function fnConexion(){
        $cHost= "localhost"; 
        $cDB = "calculator";
        $cUser = "root";
        $cPass = ""; 
        $qConexion = mysqli_connect($cHost, $cUser, $cPass, $cDB);
        return $qConexion;
    }

}

?>