<?php
include_once 'controller/controller.php';
include_once 'model/usuario_model.php';

class UsuarioController extends Controller{

	function __construct(){
		$this->model = new UsuarioModel();
		$this->view = new homeView();
	}

	function logIn($usuario,$contrasenia){

		$nombre = $this->model->getUsuario($usuario);
		if($nombre != 404){
			echo var_dump($nombre);
			if($nombre[0]['contraseña'] == $contrasenia){
				session_start();
				$_SESSION['usuario'] = $usuario;
				
			}
			else
				return 404;
		}
		else
			return 404;

	}

	function logOut(){
		if(strlen(session_id()) < 1)
			session_start();
		$_SESSION = array();	
		unset($_SESSION);
		session_destroy();
	}

	function chekeoSession(){
		if(strlen(session_id()) < 1){
			session_start();
		}	
		if(isset($_SESSION['usuario'])){		
			return true;
		}
		else
			return false;
	}

	function agregarUsuario(){
		if(isset($_REQUEST['usuario']) && isset($_REQUEST['pasword'])){
			
		    $usuario = $_REQUEST['usuario'];
			$password = $_REQUEST['pasword'];
			echo ($usuario + "sdd");
		    $this->model->agregarUsuario($usuario,$password);

		}
    
    }

}




?>