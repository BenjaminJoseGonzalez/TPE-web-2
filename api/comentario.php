<?php 
require_once('api.php');
require_once('../model/usuario_model.php');

class ComentarioAPI extends Api{
	private $model;

	public function __construct($request)
	{
		parent::__construct($request); 
		$this->model = new UsuarioModel();
	}

	protected function comentario(){
		switch ($this->method) {
			case 'GET':
				if (count($this->args) == 0) {
					return $this->model->getComentarios();
				}
			break;
			case 'POST':
				return $this->model->agregarComentario($_REQUEST['puntaje'], $_REQUEST['comentario'],$_REQUEST['usuario']);
			break;
			case 'DELETE':
				if (count($this->args) > 0) {
					return $this->model->borrarComentario($this->args[0]);
				}
			break;
			default:
				
			break;
		}
}

}

?>