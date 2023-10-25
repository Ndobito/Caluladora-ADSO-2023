<?php 

$controller = "index";

if(!isset($_REQUEST['x'])){
    require_once 'controller/'.$controller.'.controller.php'; 
    $controller = 'Controller_'.ucwords($controller);
    $controller = new $controller;
    $controller->Inicio(); 
}else{
    
}

?>