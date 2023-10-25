<?php 

include_once "Model/index.php";

class Controller_index{

    private $object;
    public function __construct(){
        $this->object = new Model_index();
    }

    public function Inicio(){
        require_once "view/index.php"; 
    }

    public function fnValidarUsuario(){
        $nick = $_POST['nick']; 
        $pass = md5($_POST['pass']);

        session_start();
        $_SESSION['usuario'] = $nick;
        if(empty($nick) || empty($pass)){
            redirect("?bx=index&y=Inicio")->error("Complete todos los campos!")->send();
        }else{
            if($this->object->fnLogin($nick,$pass)){
                redirect("?x=calculator")->success("Inicio de Sesion exitoso")->send();
            }else{
                redirect("?x=index")->error("El usuario no existe")->send();
            }
        }
        session_abort();
    }
}

?>