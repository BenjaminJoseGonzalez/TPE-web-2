<?php
include_once 'controller/controller.php';
include_once 'model/usuario_model.php';

class UsuarioController extends Controller{

	function __construct(){
		$this->model = new UsuarioModel();
		$this->view = new homeView();
	}

	function logIn(){
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$nombre = $this->model->getUsuario($email);
		if($nombre != 404){
			//	echo var_dump($nombre[0]['password']);
			if($nombre[0]['password'] == $password){
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['nombre']= $nombre[0]['nombre'];
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
		if(isset($_SESSION['email'])){		
			return true;
		}
		else
			return false;
	}

	function agregarUsuario(){
		if(isset($_REQUEST['nombre']) && isset($_REQUEST['email']) && isset($_REQUEST['password'])){
			
			$email = $_REQUEST['email'];
			$nombre = $_REQUEST['nombre'];
			$password = $_REQUEST['password'];
			$prueba = $this->model->agregarUsuario($nombre,$email,$password);
			if($prueba == 1){
				$this->logIn($email,$password);
				echo('registrado correctamente');
			}
		}
    
    }

}




?>