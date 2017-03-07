<?php 
	include_once 'controller/controller.php';
	include_once 'view/home_view.php';
	include_once 'model/partes_model.php';
    include_once 'model/usuario_model.php';

	class PartesController extends Controller {

    	function __construct(){
    		$this->model = new PartesModel();
    		$this->view = new homeView();
            $this->modelUsuario = new UsuarioModel();
    	}

    	function mostrarDeportes(){
            $id_deporte = $_REQUEST['id_deporte'];
            session_start();
            if (isset($_SESSION['usuario'])) {
                $session = $_SESSION['usuario'];
            }
            else {
                $session = null;
            }

    		$partes = $this->model->getPartesDeporte($id_deporte);
            $comentarios = $this->modelUsuario->getComentarios();
    		$this->view->mostrarPartes($session, $partes, $comentarios);
    	}

    	function agregarParte(){
            $imagen = $_FILES['image'];
	    	$nombre = $_REQUEST['nombre'];
	    	$marca = $_REQUEST['marca'];
	    	$precio = $_REQUEST['precio'];
            $id_deporte = $_REQUEST['id_deporte'];

	    	$carga =  $this->model->agregarParte($nombre,$marca,$precio,$imagen,$id_deporte);
	    	$partes =  $this->model->getPartesDeporte($id_deporte);
            $imagenes = $this->model->getImagen();
	   		$this->view->mostrarAdmin($partes, $carga, $imagenes);
    
    	}
        function borrarParte(){
            if (isset($_POST["id"])){
                $id = $_POST["id"];
                $this->model->borrarParte($id);
             }

        }

        function editarParte(){
            $id_deporte = $_REQUEST['id_deporte'];
            $carga = true;
            switch ($_POST['editar']) {
                case 1:
                $nombre = $_POST['dato'];
                $this->model->editarNombre($nombre, $_POST['id_producto']);
                $partes =  $this->model->getParte($id_deporte);
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
                case 2 :
                $marca = $_POST['dato'];
                $this->model->editarMarca($marca, $_POST['id_producto']);
                $partes =  $this->model->getParte($id_deporte);
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
                case 3:
                $precio = $_POST['dato'];
                $this->model->editarPrecio($precio, $_POST['id_producto']);
                $partes =  $this->model->getParte($id_deporte);
                $imagenes = $this->model->getImagen();
                $this->view->mostrarAdmin($partes, $carga, $imagenes);
                break;
            }
        }
    }
?>