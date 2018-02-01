<?php
	require_once 'view/view.php';
	
	class HomeView extends View{
	
		function mostrarDefault($logueo){
			$this->smarty->assign('logueo', $logueo);
			$this->smarty->display('index.tpl');
		}

		function mostrarHome(){
			$this->smarty->display('home.tpl');
		}

		function mostrarPartes($session,$partes,$comentarios){
			$this->smarty->assign('partes',$partes);
			$this->smarty->assign('comentarios',$comentarios);
			$this->smarty->assign('session',$session);
			
			$this->smarty->display('partes.tpl');
		}

		function mostrarPartesSkate($partes){
			$this->smarty->assign('partes',$partes);
			$this->smarty->display('partesskate.tpl');

		}
		function mostrarRiders(){
			$this->smarty->display('riders.tpl');
		}
		function mostrarContacto($contactos){
			$this->smarty->assign('contactos',$contactos);
			$this->smarty->display('contacto.tpl');
		}
		function mostrarAdmin($partes, $seAgrego, $comentarios){
			$this->smarty->assign('seAgrego',$seAgrego);
			$this->smarty->assign('partes',$partes);
			$this->smarty->assign('comentarios', $comentarios);	
			$this->smarty->display('admin.tpl');
		}
		function registrarse(){
			$this->smarty->display('registrar.tpl');
		}
		function iniciaSesion(){
			$this->smarty->display('login.tpl');
		}
	}

?>
