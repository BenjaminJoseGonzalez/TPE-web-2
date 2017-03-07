<?php

  include_once 'controller/controller.php';
  include_once 'view/home_view.php';
  include_once 'model/partes_model.php';

  class HomeController extends Controller {

    function __construct(){
      $this->model = new PartesModel();
      $this->view = new homeView();
    }

    function mostrarDefault($logueo){
      $this->view->mostrarDefault($logueo);
    }

    function mostrarHome(){
      $this->view->mostrarHome();
    }

    
  }

?>
