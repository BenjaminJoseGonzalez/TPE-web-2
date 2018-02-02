<?php 
include_once'controller/controller.php';
include_once 'view/home_view.php';


class RegistrarController extends Controller {

		function __construct(){
			$this->view = new homeView();
		}
		function mostrarRegistro(){
			$this->view->registrarse();
		}
		function mostrarIniciarSesion(){
			$this->view->iniciaSesion();
		}

	}
?>