<?php

  include_once 'config/config_app.php';
  include_once 'controller/home_controller.php';
  include_once 'controller/admin_controller.php';
  include_once 'controller/partes_controller.php';
  include_once 'controller/riders_controller.php';
  include_once 'controller/contacto_controller.php';
  include_once 'controller/registrarController.php';
  include_once 'controller/controller_usuario.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){
    $homeController = new HomeController();
    $usuarioController = new UsuarioController();
    $logueo = $usuarioController->chekeoSession();
    $homeController->mostrarDefault($logueo);
  }
  else
    switch ($_REQUEST[ConfigApp::$ACTION]){

    case ConfigApp::$ACTION_HOME:
      $homeController = new HomeController();
      $homeController->mostrarHome();
    break;
    case ConfigApp::$ACTION_DEPORTES:
      $partesController = new PartesController();
      $partesController->mostrarDeportes();
    break;
    case ConfigApp::$ACTION_RIDERS:
      $ridersController = new RidersController();
      $ridersController->mostrarRiders();
    break;
    case ConfigApp::$ACTION_CONTACTO:
      $contactoController = new ContactoController();
      $contactoController->mostrarContacto();
    break;
    case ConfigApp::$ACTION_INICIA_SESSION:
      $registrarController = new RegistrarController();
      $registrarController->mostrarIniciarSesion();
    break;
    case ConfigApp::$ACTION_AGREGAR_CONTACTO:
      $contactoController = new ContactoController();
      $contactoController->agregarContacto();
    break;
    case ConfigApp::$ACTION_ADMIN:
      $adminController = new AdminController();
      $adminController->mostrarAdmin();
    break;
    case ConfigApp::$ACTION_AGREGAR_PARTE:
      $partesController = new PartesController();
      $partesController->agregarParte();
    break;
    case ConfigApp::$ACTION_BORRAR_PARTE:
      $partesController = new PartesController();
      $partesController->borrarParte();
    break;
    case ConfigApp::$ACTION_EDITAR_PARTE:
      $partesController = new PartesController();
      $partesController->editarParte();
    break;
    case ConfigApp::$ACTION_REGISTRAR:
      $registrarController = new RegistrarController();
      $registrarController->mostrarRegistro();
    break;
    case ConfigApp::$ACTION_AGREGAR_USUARIO:
      $usuarioController = new UsuarioController();
      $usuarioController->agregarUsuario();
    break;
    case ConfigApp::$ACTION_LOGIN:
      $usuarioController = new UsuarioController();
      $usuarioController->logIn($_REQUEST['usuario'], $_REQUEST['contraseña']);
    break;
    case ConfigApp::$ACTION_LOGOUT:
      $usuarioController = new UsuarioController();
      $usuarioController->logOut();
    break;
    case ConfigApp::$ACTION_AGERGAR_COMENTARIO:
      $usuarioController = new UsuarioController();
      $usuarioController->agregarCoentario();
    break;
    default:
      echo 'Pagina no encontrada';
      break;
    }

?>
