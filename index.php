<?php 

$controller = "index";

if(!isset($_REQUEST['x'])){
    require_once "controller/$controller.controller.php"; 
    $controller = 'Controller_'.ucwords($controller);
    $controller = new $controller;
    $controller->Inicio(); 
}else{
    $controller = strtolower($_REQUEST['x']);
    $action = isset($_REQUEST['y']) ? $_REQUEST['y'] :'Inicio';
    $param = isset($_REQUEST['z']) ? $_REQUEST['z'] :'';
    require_once "controller/$controller.controller.php";
    $controller = 'Controller_'.ucwords($controller);
    $controller = new $controller();
    call_user_func_array(array($controller, $action), $param);
}

?>