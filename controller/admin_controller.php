<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/partes_model.php';
	include_once 'model/usuario_model.php';

	class AdminController extends Controller {

    	function __construct(){
    	  $this->model = new PartesModel();
    	  $this->view = new homeView();
    	  $this->modelComentario = new UsuarioModel();
    	}

		function mostrarAdmin(){
			$partes =  $this->model->getPartes();
			$comentarios = $this->modelComentario->getComentarios();
			$this->view->mostrarAdmin($partes, null, $comentarios);
		}
    }


?>