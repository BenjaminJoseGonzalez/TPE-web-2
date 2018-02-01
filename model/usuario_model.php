<?php
require_once(__DIR__ . '/model.php');
class UsuarioModel extends Model {

	function getUsuario($usuario){

		$consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ? ");
		$consulta->execute(array($usuario));
		$usuario = $consulta->fetchAll();

		if(count($usuario)>0)
			return $usuario;
		else 
			return 404;
	}

	function agregarUsuario($usuario,$password){
		$consulta = $this->db->prepare('INSERT INTO usuario (email,pasword) VALUES(?,?)');
		$consulta->execute(array($usuario,$password));
	}
	function getComentarios(){
		$consulta = $this->db->prepare("SELECT * FROM comentario");
		$consulta->execute();
		return $consulta->fetchAll();

	}

	function agregarComentario($puntaje,$comentario, $usuario){
		$consulta = $this->db->prepare('INSERT INTO comentario(puntaje,comentario,usuario) VALUES(?,?,?)');
		$consulta->execute(array($puntaje,$comentario,$usuario));

		return "Se cargo exitosamente";
	}
	function borrarComentario($id_comentario){
		$consulta = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = (?)');
		$consulta->execute(array($id_comentario));
		return "Se borro un comentario";
	}
}

?>